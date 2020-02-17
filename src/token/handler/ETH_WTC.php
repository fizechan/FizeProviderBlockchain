<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的WTC
 */
class ETH_WTC extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xb7cb1c96db6b22b0d3d9536e0108d062bd488f74';
    }
}
