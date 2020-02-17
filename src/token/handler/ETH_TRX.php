<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的TRX
 */
class ETH_TRX extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xf230b790E05390FC8295F4d3F60332c93BEd42e2';
    }
}
