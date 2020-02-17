<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的Dentacoin
 */
class ETH_Dentacoin extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x08d32b0da63e2C3bcF8019c9c5d849d7a9d791e6';
    }
}
