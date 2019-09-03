<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_ZIL extends ERC20
{
    const CONTRACT_ADDRESS = '0x05f4a42e251f2d52b8ed15e9fedaacfcef1fad27';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
