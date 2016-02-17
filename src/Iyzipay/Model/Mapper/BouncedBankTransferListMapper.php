<?php

namespace Iyzipay\Model\Mapper;

use Iyzipay\Model\BouncedBankTransferList;

class BouncedBankTransferListMapper extends IyzipayResourceMapper
{
    public static function create()
    {
        return new BouncedBankTransferListMapper();
    }

    public function map(BouncedBankTransferList $transferList, $jsonResult)
    {
        parent::map($transferList, $jsonResult);

        if (isset($jsonResult->bankTransfers)) {
            $transferList->setBankTransfers($jsonResult->bankTransfers);
        }

        return $transferList;
    }
}