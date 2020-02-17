<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的STORM
 */
class ETH_STORM extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xd0a4b8946cb52f0661273bfbc6fd0e0c75fc6433';
    }
}
