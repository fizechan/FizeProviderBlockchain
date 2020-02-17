<?php

namespace token\handler;

use fize\provider\blockchain\token\handler\ETH_GMD;
use PHPUnit\Framework\TestCase;

class TestETH_GMD extends TestCase
{

    public function test__construct()
    {
        $gmd = new ETH_GMD();
    }

    public function testNewAccount()
    {
        $gmd = new ETH_GMD();
        $address = $gmd->newAccount('123456');
        echo $address;
    }

    public function testGetBalance()
    {
        $gmd = new ETH_GMD();
        $address = '0x143851b61e7aE70fc822fdDe45E6582D80d64c3C';
        //$address = '0x04E4D929c65182bB6879E66039F91EC03389579d';
        $balance = $gmd->getBalance($address);
        var_dump($balance);
    }

    public function testSendTransaction()
    {
        $gmd = new ETH_GMD();
        $from = '0x04E4D929c65182bB6879E66039F91EC03389579d';
        $to = '0x143851b61e7aE70fc822fdDe45E6582D80d64c3C';
        $value = 1000000000000000000;
        $address = $gmd->sendTransaction($from, $to, $value);
        echo $address;
    }

    public function testAccounts()
    {
        $gmd = new ETH_GMD();
        $accounts = $gmd->accounts();
        var_dump($accounts);
    }

    public function testGetTransaction()
    {
        $gmd = new ETH_GMD();
        $hash = '0x49ba824c12b4f8c3a0dc853e6cc17e1e7feb348e5b195be3c3907a631acf08ae';
        $transaction = $gmd->getTransaction($hash);
        var_dump($transaction);
    }
}
