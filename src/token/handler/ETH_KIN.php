<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的KIN
 */
class ETH_KIN extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x818fc6c2ec5986bc6e2cbf00939d90556ab12ce5';
    }
}
