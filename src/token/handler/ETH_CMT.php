<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的CMT
 */
class ETH_CMT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xf85feea2fdd81d51177f6b8f35f0e6734ce45f5f';
    }
}
