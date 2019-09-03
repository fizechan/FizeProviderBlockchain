<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_NULS extends ERC20
{
    const CONTRACT_ADDRESS = '0xb91318f35bdb262e9423bc7c7c2a3a93dd93c92c';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
