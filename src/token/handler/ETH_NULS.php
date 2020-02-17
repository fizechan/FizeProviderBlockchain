<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的NULS
 */
class ETH_NULS extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xb91318f35bdb262e9423bc7c7c2a3a93dd93c92c';
    }
}
