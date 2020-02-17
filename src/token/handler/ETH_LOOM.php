<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的LOOM
 */
class ETH_LOOM extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xa4e8c3ec456107ea67d3075bf9e3df3a75823db0';
    }
}
