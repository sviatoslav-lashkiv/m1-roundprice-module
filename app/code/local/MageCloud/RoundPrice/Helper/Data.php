<?php
/**
 * Copyright (c) 2019. All rights reserved.
 * @author: Sviatoslav Lashkiv
 * @mail:   ss.lashkiv@gmail.com
 * @github: https://github.com/sviatoslav-lashkiv
 */

class MageCloud_RoundPrice_Helper_Data extends Mage_Core_Helper_Abstract
{
    const METHOD_ROUND_UP_VALUE = 1;
    const METHOD_ROUND_DOWN_VALUE = 2;

    protected $roundMethod = null;
    protected $roundPrecision = null;

    public function isEnabled()
    {
        return Mage::getStoreConfig('roundprice/settings/enabled') && Mage::helper('core')->isModuleEnabled('MageCloud_RoundPrice');
    }

    public function getRoundMethod()
    {
        if ($this->roundMethod === null) {
            $this->roundMethod = Mage::getStoreConfig('roundprice/settings/method');
        }
        return $this->roundMethod;
    }

    public function getRoundPrecision()
    {
        if ($this->roundPrecision === null) {
            $this->roundPrecision = Mage::getStoreConfig('roundprice/settings/precision');
        }
        return $this->roundPrecision;
    }

    public function getRoundPrice($price)
    {
        $roundPrice = $price;
        switch ($this->getRoundMethod()) {
            case self::METHOD_ROUND_UP_VALUE:
                $pow = pow(10, $this->getRoundPrecision());
                $price = number_format($price, 4);
                $roundPrice = ceil($price * $pow) / $pow;
                break;

            case self::METHOD_ROUND_DOWN_VALUE:
                $roundPrice = round($price, $this->getRoundPrecision());
                break;
        }
        return $roundPrice;
    }
}
