<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_CENNZ extends ERC20
{
    const CONTRACT_ADDRESS = '0x1122b6a0e00dce0563082b6e2953f3a943855c1f';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
