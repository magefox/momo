<?php
/******************************************************
 * @package Magento 2 MoMo Payment Gateway Integration
 * @author http://www.magefox.com
 * @copyright (C) 2019 - Magefox.Com
 * @license MIT
 *******************************************************/

namespace Magefox\MoMo\Model;

class Gateway extends \Magento\Payment\Model\Method\AbstractMethod
{
    const CODE = 'momo';

    /**
     * @var string
     */
    // @codingStandardsIgnoreLine
    protected $_code = self::CODE;

    public function capture(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        //todo add functionality later
    }

    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        //todo add functionality later
    }
}
