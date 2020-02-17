<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的ZIL
 */
class ETH_ZIL extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x05f4a42e251f2d52b8ed15e9fedaacfcef1fad27';
    }
}
