<?php

namespace fize\provider\blockchain\token;

/**
 * 所有token需要支持的接口
 */
interface TokenHandler
{
    /**
     * 构造函数
     * @param array $options 初始化默认选项
     */
    public function __construct(array $options = []);

    /**
     * 创建新账户
     * @param string $private_key 账户私钥
     * @return string 账户地址
     */
    public function newAccount($private_key);

    /**
     * 获取账户余额
     * @param string $account 账户地址
     * @return string 大数据字符串
     */
    public function getBalance($account);

    /**
     * 交易
     * @param string $from 付款账户
     * @param string $to 接收账户
     * @param mixed $value 交易量
     * @return string 交易记录地址
     * @todo 如何支持可选参数？
     */
    public function sendTransaction($from, $to, $value);

    /**
     * 返回所有账户
     * @return array
     */
    public function accounts();

    /**
     * 获取交易记录
     * @param string $hash 交易哈希值
     * @return array
     */
    public function getTransaction($hash);
}
