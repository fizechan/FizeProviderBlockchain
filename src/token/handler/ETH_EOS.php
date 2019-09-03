<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_EOS extends ERC20
{
    const CONTRACT_ADDRESS = '0x86Fa049857E0209aa7D9e616F7eb3b3B78ECfdb0';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
