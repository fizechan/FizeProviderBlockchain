<?php

namespace token\handler;

use fize\provider\blockchain\token\handler\ETH;
use PHPUnit\Framework\TestCase;

class TestETH extends TestCase
{

    public function test__construct()
    {
        $eth = new ETH();
    }

    public function testNewAccount()
    {
        $eth = new ETH();
        $address = $eth->newAccount('123456');
        echo $address;
    }

    public function testGetBalance()
    {
        $eth = new ETH();
        $address = '0x1ffa8e2d4b2187013F49a8FEB56d76dD3C10C087';
        $address = '0x04E4D929c65182bB6879E66039F91EC03389579d';
        $balance = $eth->getBalance($address);
        var_dump($balance);
    }

    public function testSendTransaction()
    {
        $eth = new ETH();

        $from = '0x1ffa8e2d4b2187013F49a8FEB56d76dD3C10C087';
        $to = '0x643D635Ba380eF92a90900B86508F8f48afFCa14';

        //
        $from = '0x04E4D929c65182bB6879E66039F91EC03389579d';
        $to = '0x143851b61e7aE70fc822fdDe45E6582D80d64c3C';

        $value = 8000000000000000000;
        $address = $eth->sendTransaction($from, $to, $value);
        echo $address;
    }

    public function testAccounts()
    {
        $eth = new ETH();
        $accounts = $eth->accounts();
        var_dump($accounts);
    }

    public function testGetTransaction()
    {
        $eth = new ETH();
        $hash = '0x49ba824c12b4f8c3a0dc853e6cc17e1e7feb348e5b195be3c3907a631acf08ae';
        $transaction = $eth->getTransaction($hash);
        var_dump($transaction);
    }

    public function testListTransactions()
    {

    }
}
