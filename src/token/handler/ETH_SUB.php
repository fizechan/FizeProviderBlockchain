<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_SUB extends ERC20
{
    const CONTRACT_ADDRESS = '0x12480e24eb5bec1a9d4369cab6a80cad3c0a377a';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
