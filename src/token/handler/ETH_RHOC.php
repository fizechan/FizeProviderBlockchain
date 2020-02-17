<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的RHOC
 */
class ETH_RHOC extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x168296bb09e24a88805cb9c33356536b980d3fc5';
    }
}
