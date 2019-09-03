<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_GNT extends ERC20
{
    const CONTRACT_ADDRESS = '0xa74476443119A942dE498590Fe1f2454d7D4aC0d';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
