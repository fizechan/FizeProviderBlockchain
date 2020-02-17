<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的ZRX
 */
class ETH_ZRX extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xe41d2489571d322189246dafa5ebde1f4699f498';
    }
}
