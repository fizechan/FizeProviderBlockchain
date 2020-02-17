<?php

namespace token\handler;

use fize\provider\blockchain\token\handler\BTC;
use PHPUnit\Framework\TestCase;

class TestBTC extends TestCase
{

    public function test__construct()
    {
        $btc = new BTC();
    }

    public function testNewAccount()
    {
        $btc = new BTC();
        $address = $btc->newAccount('123456');
        echo $address;
    }

    public function testGetBalance()
    {
        $btc = new BTC();

        $address = 'n3gEqZmxgHctJe3aS9L6kD3xBKpaCkgc37';
        $balance = $btc->getBalance($address);
        var_dump($balance);

        $account = '';
        $balance = $btc->getBalance($account);
        var_dump($balance);
    }

    public function testSendTransaction()
    {
        $btc = new BTC();
        $from = 'test001';  //账户
        $to = 'n3gEqZmxgHctJe3aS9L6kD3xBKpaCkgc37';  //地址
        $value = 0.1;
        $address = $btc->sendTransaction($from, $to, $value);
        echo $address;
    }

    public function testAccounts()
    {
        $btc = new BTC();
        $accounts = $btc->accounts();
        var_dump($accounts);
    }

    public function testGetTransaction()
    {
        $btc = new BTC();
        $hash = '10d0b5cd54269243d7b2c3d178e3c96823fe8333af5ead5e92209d987a2e9ab0';
        $transaction = $btc->getTransaction($hash);
        var_dump($transaction);
    }

    public function testListTransactions()
    {
        $btc = new BTC();
        $account = 'test001';  //账户
        $rows = $btc->listTransactions($account);
        var_dump($rows);
    }
}
