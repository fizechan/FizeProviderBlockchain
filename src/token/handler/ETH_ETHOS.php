<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的ETHOS
 */
class ETH_ETHOS extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x5af2be193a6abca9c8817001f45744777db30756';
    }
}
