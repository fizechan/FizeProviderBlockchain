<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的DGD
 */
class ETH_DGD extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xe0b7927c4af23765cb51314a0e0521a9645f0e2a';
    }
}
