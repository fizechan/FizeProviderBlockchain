<?php

namespace Fize\Provider\Blockchain\Token\Handler;

use Fize\Provider\Blockchain\Token\TokenHandler;

/**
 * ETC公链
 */
class ETC implements TokenHandler
{

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * @param string $private_key
     * @return string
     */
    public function newAccount(string $private_key): string
    {
        // TODO: Implement newAccount() method.
    }

    /**
     * @param string $account
     * @return string
     */
    public function getBalance(string $account): string
    {
        // TODO: Implement getBalance() method.
    }

    /**
     * @param string $from
     * @param string $to
     * @param        $value
     * @return string
     */
    public function sendTransaction(string $from, string $to, $value): string
    {
        // TODO: Implement sendTransaction() method.
    }

    /**
     * @return array
     */
    public function accounts(): array
    {
        // TODO: Implement accounts() method.
    }

    /**
     * @param string $hash
     * @return array
     */
    public function getTransaction(string $hash): array
    {
        // TODO: Implement getTransaction() method.
    }
}
