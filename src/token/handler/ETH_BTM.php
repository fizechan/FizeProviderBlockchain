<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的BTM
 */
class ETH_BTM extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xcb97e65f07da24d46bcdd078ebebd7c6e6e3d750';
    }
}
