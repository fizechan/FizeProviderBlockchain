<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的DRGN
 */
class ETH_DRGN extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x419c4db4b9e25d6db2ad9691ccb832c8d9fda05e';
    }
}
