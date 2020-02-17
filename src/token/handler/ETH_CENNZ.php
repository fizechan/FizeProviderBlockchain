<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的CENNZ
 */
class ETH_CENNZ extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x1122b6a0e00dce0563082b6e2953f3a943855c1f';
    }
}
