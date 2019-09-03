<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_DRGN extends ERC20
{
    const CONTRACT_ADDRESS = '0x419c4db4b9e25d6db2ad9691ccb832c8d9fda05e';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
