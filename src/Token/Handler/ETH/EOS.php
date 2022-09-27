<?php

namespace Fize\Provider\Blockchain\Token\Handler\ETH;

use Fize\Provider\Blockchain\Token\ERC20;

/**
 * 基于ETH的EOS
 */
class EOS extends ERC20
{

    /**
     * 获取合约地址
     * @return string
     */
    protected function getContractAddress(): string
    {
        return '0x86Fa049857E0209aa7D9e616F7eb3b3B78ECfdb0';
    }
}
