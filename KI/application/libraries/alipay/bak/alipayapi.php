<?php
require_once("alipay.config.php");
require_once("lib/alipay_submit.class.php");

/**************************请求参数**************************/
/**************************request parameter**************************/
		//merchant order no,the unique transaction ID specified in merchant system ,not null
        $out_trade_no = $_POST['WIDout_trade_no'];

	    //order name  ,not null
        $subject = $_POST['WIDsubject'];

	    //The settlement currency code the merchant specifies in the contract. ,not null 
        $currency = $_POST['currency'];
		
		//payment amount in foreign currency ,not null
        $total_fee = $_POST['WIDtotal_fee'];

		//product description ,nullable
        $body = $_POST['WIDbody'];
	    //product_code could not be nullable for new_cross_border payment
	    $product_code = $_POST['WIDproduct_code'];
	    //split_fund_info could be nullable if the merchant does not need split fund to domerstic account; in JSON format
        //$split_fund_info = $_POST['WIDsplit_fund_info'];

         //trade_information : Information about the trade industry.
	    $trade_information = $_POST['WIDtrade_information'];
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

		//其他业务参数根据在线开发文档，添加参数.文档地址:https://global.alipay.com/service
		//To add other parameters,please refer to development documents.Document address:https://global.alipay.com/service
        //如"参数名"=>"参数值"
		//eg"parameter name"=>"parameter value"
);

//build request
$alipaySubmit = new AlipaySubmit($alipay_config);
$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "OK");
echo $html_text;

?>
</body>
</html>