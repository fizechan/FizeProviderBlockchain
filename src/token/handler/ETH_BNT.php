<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_BNT extends ERC20
{
    const CONTRACT_ADDRESS = '0x1f573d6fb3f13d689ff844b4ce37794d79a7ff1c';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
