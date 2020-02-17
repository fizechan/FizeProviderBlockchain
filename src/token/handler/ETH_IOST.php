<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的IOST
 */
class ETH_IOST extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xfa1a856cfa3409cfa145fa4e20eb270df3eb21ab';
    }
}
