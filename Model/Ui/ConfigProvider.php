<?php
/******************************************************
 * @package Magento 2 MoMo Payment Gateway Integration
 * @author http://www.magefox.com
 * @copyright (C) 2019 - Magefox.Com
 * @license MIT
 *******************************************************/

namespace Magefox\MoMo\Model\Ui;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magefox\MoMo\Gateway\Http\Client\ClientMock;

class ConfigProvider implements ConfigProviderInterface
{
    const CODE = 'momo';

    /**
     * Retrieve assoc array of checkout configuration
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'payment' => [
                'transactionResults' => [
                    ClientMock::SUCCESS => __('Success'),
                    ClientMock::FAILURE => __('Fraud')
                ]
            ]
        ];
    }
}
