<?php

namespace Fize\Provider\Blockchain\Token\Handler\ETH;

use Fize\Provider\Blockchain\Token\ERC20;

/**
 * 基于ETH的GTO
 */
class GTO extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress(): string
    {
        return '0xc5bbae50781be1669306b9e001eff57a2957b09d';
    }
}
