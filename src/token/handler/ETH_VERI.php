<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的VERI
 */
class ETH_VERI extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x8f3470A7388c05eE4e7AF3d01D8C722b0FF52374';
    }
}
