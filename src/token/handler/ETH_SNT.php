<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的SNT
 */
class ETH_SNT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x744d70fdbe2ba4cf95131626614a1763df805b9e';
    }
}
