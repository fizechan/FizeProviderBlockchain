<?php
/**
 * 基于ETH的EOS
 */
namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\ERC20;

class ETH_MKR extends ERC20
{
    const CONTRACT_ADDRESS = '0x9f8f72aa9304c8b593d555f12ef6589cc3a579a2';

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return self::CONTRACT_ADDRESS;
    }
}
