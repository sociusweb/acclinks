<?php
class Alipay{
	public function payment($trade,$amt){
		require_once("alipay/alipay.config.php");
		require_once("alipay/lib/alipay_submit.class.php");

/**************************请求参数**************************/
/**************************request parameter**************************/
        //商户订单号，商户网站订单系统中唯一订单号，必填
		//merchant order no,the unique transaction ID specified in merchant system ,not null
        $out_trade_no = $trade;

	    //order name  ,not null
        $subject = 'Recharge';

	    //The settlement currency code the merchant specifies in the contract. ,not null 
        $currency = 'USD';
		
		//payment amount in foreign currency ,not null
        $total_fee = $amt;

		//product description ,nullable
        $body = 'Recharge';
	    //product_code could not be nullable for new_cross_border payment
	    $product_code = 'NEW_OVERSEAS_SELLER';
	    //split_fund_info could be nullable if the merchant does not need split fund to domerstic account; in JSON format
        //$split_fund_info = $_POST['WIDsplit_fund_info'];

         //trade_information : Information about the trade industry.
	    $trade_information = '{"business_type":"1"}';
          //************************************************************/

	//package the request parameters
	$parameter = array(
		"service"       => $alipay_config['service'],
		"partner"       => $alipay_config['partner'],
		"notify_url"	=> $alipay_config['notify_url'],
		"return_url"	=> $alipay_config['return_url'],
		"refer_url"	=> $alipay_config['refer_url'],
		"out_trade_no"	=> $out_trade_no,
		"subject"	=> $subject,
		"total_fee"	=> $total_fee,
		"body"	=> $body,
		"currency" => $currency,
		"product_code" => $product_code,
		//$split_fund_info => str_replace("\"", "'",'split_fund_info'),
		//"split_fund_info"=>$split_fund_info,	
			
		$trade_information => str_replace("\"", "'",'trade_information'),
		"trade_information"=>$trade_information,	


		"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))



		//To add other parameters,please refer to development documents.Document address:https://global.alipay.com/service
		//eg"parameter name"=>"parameter value"
		
	);

	//build request
	$alipaySubmit = new AlipaySubmit($alipay_config);
	$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "OK");
	echo $html_text;
	}
public function verify(){
	require_once("alipay/alipay.config.php");
	require_once("alipay/lib/alipay_notify.class.php");
	$alipayNotify = new AlipayNotify($alipay_config);
	$verify_result = $alipayNotify->verifyReturn();
	return $verify_result;
}
		
}