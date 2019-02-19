<?php
/******************************************************
 * @package Magento 2 MoMo Payment Gateway Integration
 * @author http://www.magefox.com
 * @copyright (C) 2019 - Magefox.Com
 * @license MIT
 *******************************************************/

namespace Magefox\MoMo\Gateway\Http;

use Magento\Payment\Gateway\Http\TransferBuilder;
use Magento\Payment\Gateway\Http\TransferFactoryInterface;
use Magento\Payment\Gateway\Http\TransferInterface;
use Magefox\MoMo\Gateway\Request\MockDataRequest;

class TransferFactory implements TransferFactoryInterface
{
    protected $transferBuilder;

    public function __construct(
        TransferBuilder $transferBuilder
    ) {
        $this->transferBuilder = $transferBuilder;
    }

    /**
     * Builds gateway transfer object
     *
     * @param array $request
     * @return TransferInterface
     */
    public function create(array $request)
    {
        return $this->transferBuilder
            ->setBody($request)
            ->setMethod('POST')
            ->setHeaders(
                [
                    'force_result' => isset($request[MockDataRequest::FORCE_RESULT])
                        ? $request[MockDataRequest::FORCE_RESULT]
                        : null
                ]
            )
            ->build();
    }
}
