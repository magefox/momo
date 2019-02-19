<?php
/******************************************************
 * @package Magento 2 MoMo Payment Gateway Integration
 * @author http://www.magefox.com
 * @copyright (C) 2019 - Magefox.Com
 * @license MIT
 *******************************************************/

namespace Magefox\MoMo\Gateway\Request;

use Magento\Payment\Gateway\Data\PaymentDataObjectInterface;
use Magento\Payment\Gateway\Request\BuilderInterface;
use Magefox\MoMo\Gateway\Http\Client\ClientMock;

class MockDataRequest implements BuilderInterface
{
    const FORCE_RESULT = 'FORCE_RESULT';
    /**
     * Builds ENV request
     *
     * @param array $buildSubject
     * @return array
     */
    public function build(array $buildSubject)
    {
        if (!isset($buildSubject['payment'])
            || !$buildSubject['payment'] instanceof PaymentDataObjectInterface
        ) {
            throw new \InvalidArgumentException('Payment data object should be provided');
        }
        /** @var PaymentDataObjectInterface $paymentDO */
        $paymentDO = $buildSubject['payment'];
        $payment = $paymentDO->getPayment();
        $transactionResult = $payment->getAdditionalInformation('transaction_result');
        return [
            self::FORCE_RESULT => $transactionResult === null
                ? ClientMock::SUCCESS
                : $transactionResult
        ];
    }
}
