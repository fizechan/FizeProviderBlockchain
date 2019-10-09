<?php
/**
 * 测试GMD代币
 */

namespace app\controller;

use fize\blockchain\token\handler\ETHGMD;


class ControllerTokenGmd
{
    /**
     * @var ETHGMD
     */
    private $gmd;

    public function __construct()
    {
        $this->gmd = new ETHGMD();
    }

    public function actionTest()
    {
        $this->gmd->test();
        echo "\r\n<br/>";
        var_dump(PHP_INT_MAX);
    }

    public function actionNewAccount()
    {
        $address = $this->gmd->newAccount('123456');
        echo $address;
    }

    public function actionGetBalance()
    {
        $address = '0x143851b61e7aE70fc822fdDe45E6582D80d64c3C';
        //$address = '0x04E4D929c65182bB6879E66039F91EC03389579d';
        $balance = $this->gmd->getBalance($address);
        var_dump($balance);
    }

    public function actionSendTransaction()
    {
        $from = '0x04E4D929c65182bB6879E66039F91EC03389579d';
        $to = '0x143851b61e7aE70fc822fdDe45E6582D80d64c3C';
        $value = 1000000000000000000;
        $address = $this->gmd->sendTransaction($from, $to, $value);
        echo $address;
    }

    public function actionAccounts()
    {
        $accounts = $this->gmd->accounts();
        var_dump($accounts);
    }

    public function actionGetTransaction()
    {
        $hash = '0x49ba824c12b4f8c3a0dc853e6cc17e1e7feb348e5b195be3c3907a631acf08ae';
        $transaction = $this->gmd->getTransaction($hash);
        var_dump($transaction);
    }
}