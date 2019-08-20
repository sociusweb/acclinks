<?php
	require(dirname(__FILE__) .'/vendor/autoload.php');
	use Omnipay\Omnipay;

class Wechat{
	public function __construct()
        {

        }
	public function payment($out_trade_no,$amt){
		$gateway    = Omnipay::create('WechatPay_Native');
		$gateway->setAppId('wx635dbc613f314510');
		$gateway->setMchId('1542328091');
		$gateway->setApiKey('jidoepiji9898GYYYK9koFREWESlkm75');
		$gateway->setNotifyUrl('http://localhost/acclink');
		
		$order = [
		    'body'              => 'The test order',
		    'out_trade_no'      => $out_trade_no,
		    'total_fee'         => $amt*100, //=0.01
		    'spbill_create_ip'  => '192.168.0.21',
		    'fee_type'          => 'AUD'
		];

		/**
		 * @var Omnipay\WechatPay\Message\CreateOrderRequest $request
		 * @var Omnipay\WechatPay\Message\CreateOrderResponse $response
		 */
		$request  = $gateway->purchase($order);
		$response = $request->send();
		if ($response->isSuccessful()) {
			$data['succ'] = true;
			$data['url'] = $response->getCodeUrl();
			return $data;
		}else{
			$data['succ'] = false;
			$data['url'] = '';
		}
	}

	public function verify($out_trade_no){
		$gateway    = Omnipay::create('WechatPay_Native');
		$gateway->setAppId('wx635dbc613f314510');
		$gateway->setMchId('1542328091');
		$gateway->setApiKey('jidoepiji9898GYYYK9koFREWESlkm75');
		$gateway->setNotifyUrl('http://localhost/acclink');
		$response = $gateway->query([
		    'Out_trade_no' => $out_trade_no, //The wechat trade no
		])->send();

		$data['succ'] = false;
		if($response->isSuccessful()){
			$data['succ'] = true;
		}
		$data['data'] = $response->getData();
		return $data;
	}

	public function close($out_trade_no){
		$gateway    = Omnipay::create('WechatPay_Native');
		$gateway->setAppId('wx635dbc613f314510');
		$gateway->setMchId('1542328091');
		$gateway->setApiKey('jidoepiji9898GYYYK9koFREWESlkm75');
		$gateway->setNotifyUrl('http://localhost/acclink');

		$response = $gateway->close([
		    'out_trade_no' => $out_trade_no, //The merchant trade no
		])->send();

		$data['succ'] = false;
		if($response->isSuccessful()){
			$data['succ'] = true;
		}
		$data['data'] = $response->getData();
		return $data;
	}
		
}