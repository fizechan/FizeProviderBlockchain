<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

/**
 * 基于ETH的PPT
 */
class ETH_PPT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0xd4fa1460f537bb9085d22c7bccb5dd450ef28e3a';
    }
}
