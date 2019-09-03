<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_BNB extends ERC20
{
    const CONTRACT_ADDRESS = '0xB8c77482e45F1F44dE1745F52C74426C631bDD52';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
