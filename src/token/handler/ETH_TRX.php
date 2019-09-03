<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_TRX extends ERC20
{
    const CONTRACT_ADDRESS = '0xf230b790E05390FC8295F4d3F60332c93BEd42e2';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
