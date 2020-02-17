<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的AION
 */
class ETH_AION extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x4CEdA7906a5Ed2179785Cd3A40A69ee8bc99C466';
    }
}
