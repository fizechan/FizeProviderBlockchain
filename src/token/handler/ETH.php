<?php

namespace fize\provider\blockchain\token\handler;

use fize\provider\blockchain\token\TokenHandler;
use Web3\Web3;

/**
 * ETH公有链
 */
class ETH implements TokenHandler
{

    /**
     * @var Web3
     */
    private $web3;

    /**
     * 构造函数
     * @param array $options 初始化默认选项
     */
    public function __construct(array $options = [])
    {
        //todo url写到配置项
        $this->web3 = new Web3('http://localhost:7545');

        //测试链
        //$this->web3 = new Web3('http://localhost:8545');
    }

    /**
     * 创建新账户
     * @param string $private_key 账户私钥
     * @return string 账户地址
     */
    public function newAccount($private_key)
    {
        $account = null;
        $this->web3->personal->newAccount($private_key, function ($err, $data) use (&$account){
            if ($err !== null) {
                throw $err;
            }
            $account = $data;
        });
        return $account;
    }

    /**
     * 获取账户余额
     * @param string $account 账户地址
     * @return string 返回大数据字符串
     */
    public function getBalance($account)
    {
        $balance = null;
        $this->web3->eth->getBalance($account, function ($err, $data) use (&$balance){
            if ($err !== null) {
                throw $err;
            }
            $balance = $data->toString();
        });
        return $balance;
    }

    /**
     * 交易
     * @param string $from 付款账户
     * @param string $to 接收账户
     * @param int $value 交易量
     * @return string 交易记录地址
     */
    public function sendTransaction($from, $to, $value)
    {
        //todo 需要$from的密钥，考虑保存到DB
        $password = 'daowomima-42';

        //$password = '29f66cfc740a479cf292bb68d8f58022d311072e22d3ebc2c32828db57b4104e';

        $this->web3->batch(true);  //准备批处理

        $this->web3->personal->unlockAccount($from, $password, 10);
        $param = [
            'from' => $from,
            'to' => $to,
            'value' => $value,
            //'gas' => 0,  //可选参数
            //'gasPrice' => 0,  //可选参数
            //'data' => '',  //可选参数
            //'nonce' => 1,  //可选参数
        ];

        $this->web3->eth->sendTransaction($param);

        $address = null;
        $this->web3->provider->execute(function ($err, $data) use(&$address){
            if ($err !== null) {
                throw $err;
            }
            //var_dump($data);
            //todo 是否需要考虑$data[0]的不同情况
            $address = $data[1];  //交易地址
            //return $data[1];  //交易地址
        });
        return $address;
    }

    /**
     * 返回所有账户
     * @todo ETH是否支持分组？
     * @return array
     */
    public function accounts()
    {
        $accounts = [];
        $this->web3->eth->accounts(function ($err, $data) use (&$accounts){
            if ($err !== null) {
                throw $err;
            }
            $accounts = $data;
        });
        return $accounts;
    }

    /**
     * 获取交易记录
     * @param string $hash 交易哈希值
     * @return array
     */
    public function getTransaction($hash)
    {
        $result = [];
        $this->web3->eth->getTransactionByHash($hash, function($err, $data) use (&$result){
            if ($err !== null) {
                var_dump($err);
                return;
            }
            //var_dump($data);
            //echo $data->from;
            //echo '->';
            //echo $data->to;
            $result = get_object_vars($data);
            //return get_object_vars($data);
        });
        return $result;
    }

    /**
     * 获取所有交易记录
     * @param $account
     * @return array
     */
    public function listTransactions($account)
    {
        return [];
    }
}
