<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的OMG
 */
class ETH_OMG extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xd26114cd6EE289AccF82350c8d8487fedB8A0C07';
    }
}
