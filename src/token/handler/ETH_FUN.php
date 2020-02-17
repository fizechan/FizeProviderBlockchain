<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的FUN
 */
class ETH_FUN extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x419d0d8bdd9af5e606ae2232ed285aff190e711b';
    }
}
