<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_Dentacoin extends ERC20
{
    const CONTRACT_ADDRESS = '0x08d32b0da63e2C3bcF8019c9c5d849d7a9d791e6';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
