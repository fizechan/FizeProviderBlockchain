<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的ENG
 */
class ETH_ENG extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xf0ee6b27b759c9893ce4f094b49ad28fd15a23e4';
    }
}
