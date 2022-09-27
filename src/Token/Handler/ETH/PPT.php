<?php

namespace Fize\Provider\Blockchain\Token\Handler\ETH;

use Fize\Provider\Blockchain\Token\ERC20;

/**
 * 基于ETH的PPT
 */
class PPT extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress(): string
    {
        return '0xd4fa1460f537bb9085d22c7bccb5dd450ef28e3a';
    }
}
