<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的POWR
 */
class ETH_POWR extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x595832f8fc6bf59c85c527fec3740a1b7a361269';
    }
}
