<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的HOT
 */
class ETH_HOT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x6c6ee5e31d828de241282b9606c8e98ea48526e2';
    }
}
