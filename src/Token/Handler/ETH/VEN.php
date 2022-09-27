<?php

namespace Fize\Provider\Blockchain\Token\Handler\ETH;

use Fize\Provider\Blockchain\Token\ERC20;

/**
 * 基于ETH的VEN
 */
class VEN extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress(): string
    {
        return '0xd850942ef8811f2a866692a623011bde52a462c1';
    }
}
