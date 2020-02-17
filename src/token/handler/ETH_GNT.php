<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的GNT
 */
class ETH_GNT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xa74476443119A942dE498590Fe1f2454d7D4aC0d';
    }
}
