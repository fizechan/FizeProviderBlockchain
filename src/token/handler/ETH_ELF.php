<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的ELF
 */
class ETH_ELF extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xbf2179859fc6d5bee9bf9158632dc51678a4100e';
    }
}
