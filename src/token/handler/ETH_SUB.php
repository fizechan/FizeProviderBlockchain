<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的SUB
 */
class ETH_SUB extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x12480e24eb5bec1a9d4369cab6a80cad3c0a377a';
    }
}
