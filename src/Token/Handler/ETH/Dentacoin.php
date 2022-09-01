<?php

namespace Fize\Provider\Blockchain\Token\Handler\ETH;

use Fize\Provider\Blockchain\Token\ERC20;

/**
 * 基于ETH的Dentacoin
 */
class Dentacoin extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress()
    {
        return '0x08d32b0da63e2C3bcF8019c9c5d849d7a9d791e6';
    }
}
