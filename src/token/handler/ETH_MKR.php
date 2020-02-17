<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的MKR
 */
class ETH_MKR extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x9f8f72aa9304c8b593d555f12ef6589cc3a579a2';
    }
}
