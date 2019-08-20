<?php
require('./vendor/autoload.php');

$gateway    = Omnipay::create('WechatPay_App');
$gateway->setAppId($config['app_id']);
$gateway->setMchId($config['mch_id']);
$gateway->setApiKey($config['api_key']);

$order = [
    'body'              => 'The test order',
    'out_trade_no'      => date('YmdHis').mt_rand(1000, 9999),
    'total_fee'         => 1, //=0.01
    'spbill_create_ip'  => 'ip_address',
    'fee_type'          => 'CNY'
];

/**
 * @var Omnipay\WechatPay\Message\CreateOrderRequest $request
 * @var Omnipay\WechatPay\Message\CreateOrderResponse $response
 */
$request  = $gateway->purchase($order);
$response = $request->send();
print_r($response);
//available methods
$response->isSuccessful();
$response->getData(); //For debug
$response->getAppOrderData(); //For WechatPay_App
$response->getJsOrderData(); //For WechatPay_Js
$response->getCodeUrl(); //For Native Trade Type