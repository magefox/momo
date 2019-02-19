<?php
/******************************************************
 * @package Magento 2 MoMo Payment Gateway Integration
 * @author http://www.magefox.com
 * @copyright (C) 2019 - Magefox.Com
 * @license MIT
 *******************************************************/

namespace Magefox\MoMo\Gateway\Response;

use Magento\Payment\Gateway\Data\PaymentDataObjectInterface;
use Magento\Payment\Gateway\Response\HandlerInterface;

class TransIdHandler implements HandlerInterface
{
    const TRANS_ID = 'TXN_ID';

    /**
     * Handles transaction id
     *
     * @param array $handlingSubject
     * @param array $response
     * @return void
     */
    public function handle(array $handlingSubject, array $response)
    {
        if (!isset($handlingSubject['payment'])
            || !$handlingSubject['payment'] instanceof PaymentDataObjectInterface
        ) {
            throw new \InvalidArgumentException('Payment data object should be provided');
        }
        /**
         * @var PaymentDataObjectInterface $paymentDO
         */
        $paymentDO = $handlingSubject['payment'];
        $payment = $paymentDO->getPayment();

        /**
         * @var $payment \Magento\Sales\Model\Order\Payment
         */
        $payment->setTransactionId($response[self::TRANS_ID]);
        $payment->setIsTransactionClosed(false);
    }
}