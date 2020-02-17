<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的SALT
 */
class ETH_SALT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x4156D3342D5c385a87D264F90653733592000581';
    }
}
