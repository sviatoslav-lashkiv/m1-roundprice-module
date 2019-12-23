<?php
/**
 * Copyright (c) 2019. All rights reserved.
 * @author: Sviatoslav Lashkiv
 * @mail:   ss.lashkiv@gmail.com
 * @github: https://github.com/sviatoslav-lashkiv
 */

class MageCloud_RoundPrice_Model_System_Config_Source_Methods
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => MageCloud_RoundPrice_Helper_Data::METHOD_ROUND_UP_VALUE,
                'label' => Mage::helper('roundprice')->__('Round Up')
            ),
            array(
                'value' => MageCloud_RoundPrice_Helper_Data::METHOD_ROUND_DOWN_VALUE,
                'label' => Mage::helper('roundprice')->__('Round Down')
            )
        );
    }
}