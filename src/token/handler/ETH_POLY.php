<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的POLY
 */
class ETH_POLY extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x9992ec3cf6a55b00978cddf2b27bc6882d88d1ec';
    }
}
