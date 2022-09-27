<?php

namespace Fize\Provider\Blockchain\Token\Handler\ETH;

use Fize\Provider\Blockchain\Token\ERC20;

/**
 * 基于ETH的HOT
 */
class HOT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress(): string
    {
        return '0x6c6ee5e31d828de241282b9606c8e98ea48526e2';
    }
}
