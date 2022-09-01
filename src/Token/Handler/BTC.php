<?php
namespace Fize\Provider\Blockchain\Token\Handler;

use Bitcoin;
use Fize\Provider\Blockchain\Token\TokenHandler;


class BTC implements TokenHandler
{

    /**
     * @var array 配置、选项
     */
    private $options;

    /**
     * @var Bitcoin
     */
    private $coin;

    /**
     * 构造函数
     * @param array $options 初始化默认选项
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
        $this->coin = new Bitcoin($options['username'], $options['password'], $options['host'], $options['port']);
    }

    /**
     * 解锁钱包
     */
    private function unlock()
    {
        $this->coin->walletlock();
        //todo 写到配置项
        $this->coin->walletpassphrase('daowomima-4', 1000);
    }

    /**
     * 上锁钱包
     */
    private function lock()
    {
        $this->coin->walletlock();
    }

    /**
     * 创建新账户
     * @param string $private_key 账户私钥
     * @return string 账户地址
     */
    public function newAccount($private_key)
    {
        $this->unlock();
        $result = $this->coin->getnewaddress('for_rpc1');
        $this->lock();
        return $result;
    }

    /**
     * 获取账户余额
     * @param string $account 账户地址
     * @return string 返回大数据字符串
     */
    public function getBalance($account)
    {
        $this->unlock();
        $balance = $this->coin->getbalance($account);
        $this->lock();
        return $balance;
    }

    /**
     * 交易
     * @param string $from 付款账户
     * @param string $to 接收账户
     * @param mixed $value 交易量
     * @return string 交易记录地址
     */
    public function sendTransaction($from, $to, $value)
    {
        $this->unlock();

        //从默认账户发送一条交易
        //$txid = $this->coin->sendtoaddress($to, $value);

        //从指定账户发送一条交易
        $txid = $this->coin->sendfrom($from, $to, $value);

        //从指定账户发送多条交易
//        $tos = [
//            $to => $value
//        ];
//        $txid = $this->coin->sendmany($from, $tos);

        //从指定账户指定地址发送单条交易
        //createrawtransaction
        //signrawtransaction
        //sendrawtransaction

        $this->lock();
        return $txid;
    }

    /**
     * 返回所有账户
     * @return array
     */
    public function accounts()
    {
        $accounts = $this->coin->listaccounts(1, true);
        //return $accounts;
        $rows = [];
        foreach ($accounts as $account => $balance){
            $address = $this->coin->getaddressesbyaccount($account);
            var_dump($address);
            $rows[$address] = $balance;
        }
        return $rows;
    }

    /**
     * 获取交易记录详情
     * @param string $hash 交易哈希值
     * @return array
     */
    public function getTransaction($hash)
    {
        return $this->coin->gettransaction($hash);
    }

    /**
     * 获取所有交易记录
     * @param $account
     * @return array
     */
    public function listTransactions($account)
    {
        return $this->coin->listtransactions($account);
    }

}
