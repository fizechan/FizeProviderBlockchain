<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的CTXC
 */
class ETH_CTXC extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xea11755ae41d889ceec39a63e6ff75a02bc1c00d';
    }
}
