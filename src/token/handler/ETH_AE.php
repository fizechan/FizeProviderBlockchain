<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的AE
 */
class ETH_AE extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x5ca9a71b1d01849c0a95490cc00559717fcf0d1d';
    }
}
