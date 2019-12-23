<?php
/**
 * Copyright (c) 2019. All rights reserved.
 * @author: Sviatoslav Lashkiv
 * @mail:   ss.lashkiv@gmail.com
 * @github: https://github.com/sviatoslav-lashkiv
 */

class MageCloud_RoundPrice_Model_Store extends Mage_Core_Model_Store
{
    public function roundPrice($price)
    {
        $helper = Mage::helper('roundprice');
        if($helper->isEnabled()) {
            return $helper->getRoundPrice($price);
        }

        return Mage_Core_Model_Store::roundPrice($price);
    }
}