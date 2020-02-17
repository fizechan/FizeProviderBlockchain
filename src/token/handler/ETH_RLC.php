<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的RLC
 */
class ETH_RLC extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x607F4C5BB672230e8672085532f7e901544a7375';
    }
}
