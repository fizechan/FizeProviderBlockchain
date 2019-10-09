<?php
/**
 * Created by PhpStorm.
 * User: cfz87
 * Date: 2018-04-02
 * Time: 10:30
 */

namespace app\controller;
use Web3\Web3;
use Web3\Eth;


class ControllerEthRpc
{

    public function actionIndex()
    {
        $web3 = new Web3('http://localhost:7545');
        var_dump($web3);
    }

    public function actionVersion()
    {
        $web3 = new Web3('http://localhost:7545');
        $web3->clientVersion(function ($err, $version) {
            if ($err !== null) {
                var_dump($err);
                return;
            }
            if (isset($version)) {
                echo 'Client version: ' . $version;
            }
        });
    }

    public function actionEth()
    {
        $web3 = new Web3('http://localhost:7545');
        $eth = $web3->eth;
        var_dump($eth);
        $eth = new Eth('http://localhost:7545');
        var_dump($eth);
    }

    /**
     * 测试添加新账户
     */
    public function actionPersonal()
    {
        $web3 = new Web3('http://localhost:7545');
        $personal = $web3->personal;
        $newAccount = '';
        echo 'Personal Create Account and Unlock Account' . PHP_EOL;
        // create account
        $personal->newAccount('123456', function ($err, $account) use (&$newAccount) {
            if ($err !== null) {
                echo 'Error: ' . $err->getMessage();
                return;
            }
            $newAccount = $account;
            echo 'New account: ' . $account . PHP_EOL;
        });

        $personal->unlockAccount($newAccount, '123456', function ($err, $unlocked) {
            if ($err !== null) {
                echo 'Error: ' . $err->getMessage();
                return;
            }
            if ($unlocked) {
                echo 'New account is unlocked!' . PHP_EOL;
            } else {
                echo 'New account isn\'t unlocked' . PHP_EOL;
            }
        });

        // get balance
        $old_account = '0x04E4D929c65182bB6879E66039F91EC03389579d';
        $web3->eth->getBalance($old_account, function ($err, $balance) {
            if ($err !== null) {
                echo 'Error: ' . $err->getMessage();
                return;
            }
            echo 'Balance: ' . $balance->toString() . PHP_EOL;
        });
    }

    /**
     * 测试交易
     */
    public function actionTransaction()
    {
        $web3 = new Web3('http://localhost:7545');
        $web3->batch(true);  //准备批处理

        $account_from = '0x04E4D929c65182bB6879E66039F91EC03389579d';
        $password = '3b163b342d730301a9b7ecd8ee01ddc4beb2cb3488e2c290bec58210c0c6f6a5';

        $web3->personal->unlockAccount($account_from, $password, 100);

        $account_to = '0x143851b61e7aE70fc822fdDe45E6582D80d64c3C';

        $data2 = [
            'from' => $account_from,
            'to' => $account_to,
            'value' => 1000000000000000000,
            //'gas' => 0,  //可选参数
            //'gasPrice' => 0,  //可选参数
            //'data' => '',  //可选参数
            //'nonce' => 1,  //可选参数
        ];

        $web3->eth->sendTransaction($data2);
        $web3->provider->execute(function ($err, $data) {
            if ($err !== null) {
                var_dump($err);
                return;
            }
            //var_dump($data);
            echo $data[1];  //交易地址
        });
    }

    /**
     * 测试获取钱包内账户
     */
    public function actionAccounts()
    {
        $web3 = new Web3('http://localhost:7545');
        $eth = $web3->eth;
        echo 'Eth Get Account and Balance' . PHP_EOL;
        $eth->accounts(function ($err, $accounts) use ($eth) {
            if ($err !== null) {
                echo 'Error: ' . $err->getMessage();
                return;
            }
            foreach ($accounts as $account) {
                echo 'Account: ' . $account . PHP_EOL;
                $eth->getBalance($account, function ($err, $balance) {
                    if ($err !== null) {
                        echo 'Error: ' . $err->getMessage();
                        return;
                    }
                    echo 'Balance: ' . $balance . PHP_EOL;
                });
            }
        });
    }

    public function actionGetTransaction()
    {
        $hash = '0x3178f66099868d8f05a70b1027dc4b2b2a3125e31b80538326b2a9487aca7fe4';

        $web3 = new Web3('http://localhost:7545');
        $web3->eth->getTransactionByHash($hash, function($err, $data){
            if ($err !== null) {
                var_dump($err);
                return;
            }
            //var_dump($data);
            echo $data->from;
            echo '->';
            echo $data->to;

            //echo $data[1];  //交易地址
        });
    }

    //...其他基于ETH的ERC20 token
}