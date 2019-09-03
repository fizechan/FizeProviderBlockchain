<?php
/**
 * GMD代币
 */

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;


class ETH_GMD extends ERC20
{
    const CONTRACT_ADDRESS = '0xa71ba8cf51805143b3b0b3143bb1cd1f1544252f';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
