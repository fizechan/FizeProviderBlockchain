<?php

namespace fize\provider\blockchain\token;

use Exception;
use Web3\Web3;
use kornrunner\Keccak;
use fize\math\Bc;

/**
 * 基于ETH的ERC20标准TOKEN
 * ABI编译规则请在如下URL查看
 * @see https://github.com/ethereum/wiki/wiki/Ethereum-Contract-ABI
 */
abstract class ERC20 implements TokenHandler
{
    /**
     * @var array 配置、选项
     */
    private $options;

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
        $this->options = $options;
        $this->web3 = new Web3($this->options['provider']);
    }

    /**
     * 获取合约地址
     * @return string
     */
    abstract protected function getContractAddress();

    /**
     * 字符串左补齐
     * @param string $str 待补零字符串
     * @param int $digit 需补齐到该位数
     * @param string $placeholder 使用的补齐字符，默认为0
     * @return string
     */
    private function padLeft($str, $digit, $placeholder = "0")
    {
        return sprintf("%{$placeholder}{$digit}s", $str);
    }

    /**
     * 字符串右补齐
     * @param string $str 待补零字符串
     * @param int $digit 需补齐到该位数
     * @param string $placeholder 使用的补齐字符，默认为0
     * @return string
     */
    private function padRight($str, $digit, $placeholder = "0")
    {
        return sprintf("%-{$placeholder}{$digit}s", $str);
    }

    /**
     * 将以0x开头的长地址转化成短地址
     * @param $address
     * @return string
     */
    private function addressLongToShort($address)
    {
        return substr($address, 2);
    }

    /**
     * 将值乘以1e-18，并转化成16进制
     * @param $amount
     * @return string
     */
    private function dechex18($amount)
    {
        //不能使用dechex，因为dechex精度大小不够
        //return dechex(bcmul((string)$amount, '1000000000000000000'));
        return base_convert(Bc::mul((string)$amount, '1000000000000000000'), 10, 16);
    }

    /**
     * @todo ETH是否支持分组？
     * @param string $private_key 账户私钥
     * @return string 账户地址
     */
    public function newAccount($private_key)
    {
        $account = null;
        $this->web3->personal->newAccount($private_key, function ($err, $data) use (&$account) {
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
     * @return string 大数据字符串
     */
    public function getBalance($account)
    {
        $this->web3->batch(true);  //准备批处理

        $fun_params = [
            ['address', $account]
        ];
        $data = $this->abiEncode($fun_params, "balanceOf(address)");
        //var_dump($data);

        $param = [
            'from' => $account,
            'to' => $this->getContractAddress(),
            //'value' => 0,
            'data' => $data,
            //'gas' => 0,  //可选参数
            //'gasPrice' => 0,  //可选参数
            //'nonce' => 1,  //可选参数
        ];
        $this->web3->eth->call($param);
        $balance = '0';
        $this->web3->provider->execute(function ($err, $data) use(&$balance){
            //var_dump($data);
            if ($err !== null) {
                throw $err;
            }
            $balance = base_convert((string)$data[0], 16, 10);
        });
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
        $this->web3->batch(true);  //准备批处理

        //todo 需要$from的密钥，考虑保存到DB
        $password = 'daowomima-4';

        $fun_params = [
            ['address', $to],
            ['uint', (string)$value]
        ];
        $data = $this->abiEncode($fun_params, "transfer(address,uint256)");

        $this->web3->personal->unlockAccount($from, $password, 100);
        $param = [
            'from' => $from,
            'to' => $this->getContractAddress(),
            'value' => 0,
            'data' => $data,
            //'gas' => 0,  //可选参数
            //'gasPrice' => 0,  //可选参数
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
        $this->web3->eth->accounts(function ($err, $data) use (&$accounts) {
            if ($err !== null) {
                throw $err;
            }
            $accounts = $data;
        });
        return $accounts;
    }

    /**
     * 获取交易记录
     * @todo 当前API无法提供，请外部实现记录
     * @param string $hash 交易哈希值
     * @return array
     */
    public function getTransaction($hash)
    {
        return [];
    }

    /**
     * 对提供的参数和函数名进行ABI编码
     * @param array $params 型如[[$type, $value], ...]的数组
     * @param string $fun 提供的函数签名，默认无
     * @return string
     */
    private function abiEncode(array $params, $fun = null)
    {
        $placeholders = [];
        $extenders = [];
        $count_params = count($params);
        foreach ($params as list($type, $value)) {
            switch ($type) {
                case 'address':
                    //地址类型
                    //转短地址并补齐64位
                    $placeholders[] = strtolower($this->padLeft($this->addressLongToShort($value), 64));
                    break;
                case 'uint':
                case 'uint8':
                case 'uint32':
                case 'uint128':
                case 'uint256':
                    //uint类型转16进制并补齐64位
                    $placeholders[] = $this->padLeft(base_convert((string)$value, 10, 16), 64);
                    break;
                case 'bool':
                    //bool类型
                    //true为1，false为0，转uint处理
                    $bool = 0;
                    if ($value) {
                        $bool = 1;
                    }
                    $placeholders[] = $this->padLeft(base_convert((string)$bool, 10, 16), 64);
                    break;
                case 'string':
                    //字符串类型
                    //字符串类型也是动态类型
                    $placeholders[] = $this->padLeft(base_convert((string)(($count_params + count($extenders)) * 32), 10, 16), 64);  //查询位置
                    $extenders[] = $this->padLeft(base_convert((string)strlen($value), 10, 16), 64);  //编码位置
                    $extenders[] = $this->padRight(bin2hex($value), 64);  //编码字符
                    break;
                case 'address[]':
                    throw new Exception('暂不支持address[]类型参数', 500);
                case 'uint[]':
                case 'uint8[]':
                case 'uint32[]':
                case 'uint128[]':
                case 'uint256[]':
                    throw new Exception("暂不支持{$type}类型参数", 500);
                case 'bytes':
                case 'bytes4':
                case 'bytes32':
                    throw new Exception("暂不支持{$type}类型参数", 500);
                default:
                    throw new Exception("错误的类型参数{$type}", 500);
            }
        }
        //var_dump($extenders);
        if ($fun) {
            $all_params = array_merge(['0x' . substr(Keccak::hash($fun, 256), 0, 8)], $placeholders, $extenders);
        } else {
            $all_params = array_merge($placeholders, $extenders);
        }
        //var_dump($all_params);
        return implode('', $all_params);
    }
}
