<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_VERI extends ERC20
{
    const CONTRACT_ADDRESS = '0x8f3470A7388c05eE4e7AF3d01D8C722b0FF52374';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
