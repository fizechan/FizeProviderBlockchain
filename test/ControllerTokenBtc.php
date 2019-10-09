<?php
/**
 * Created by PhpStorm.
 * User: cfz87
 * Date: 2018-04-02
 * Time: 17:38
 */

namespace app\controller;

use fize\blockchain\token\handler\BTC;


class ControllerTokenBtc
{
    /**
     * @var BTC
     */
    private $btc;

    public function __construct()
    {
        $this->btc = new BTC();
    }

    public function actionNewAccount()
    {
        $address = $this->btc->newAccount('123456');
        echo $address;
    }

    public function actionGetBalance()
    {
        $address = 'n3gEqZmxgHctJe3aS9L6kD3xBKpaCkgc37';
        $balance = $this->btc->getBalance($address);

        $account = '';
        $balance = $this->btc->getBalance($account);
        var_dump($balance);
    }

    public function actionSendTransaction()
    {
        $from = 'test001';  //账户
        $to = 'n3gEqZmxgHctJe3aS9L6kD3xBKpaCkgc37';  //地址
        $value = 0.1;
        $address = $this->btc->sendTransaction($from, $to, $value);
        echo $address;
    }

    public function actionAccounts()
    {
        $accounts = $this->btc->accounts();
        var_dump($accounts);
    }

    public function actionGetTransaction()
    {
        $hash = '10d0b5cd54269243d7b2c3d178e3c96823fe8333af5ead5e92209d987a2e9ab0';
        $transaction = $this->btc->getTransaction($hash);
        var_dump($transaction);
    }

    public function actionListTransactions()
    {
        $account = 'test001';  //账户
        $rows = $this->btc->listTransactions($account);
        var_dump($rows);
    }
}