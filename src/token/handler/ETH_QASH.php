<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的QASH
 */
class ETH_QASH extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x618e75ac90b12c6049ba3b27f5d5f8651b0037f6';
    }
}
