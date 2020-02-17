<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的BNT
 */
class ETH_BNT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x1f573d6fb3f13d689ff844b4ce37794d79a7ff1c';
    }
}
