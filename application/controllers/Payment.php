<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('path');
		$this->load->library('paypal');
		$this->load->library('alipay');
		$this->load->library('wechat');
		$this->load->model('payment_model');
		$this->load->model('api');
	}
	function pay(){
		$number = $this->session->flashdata('mobilenumber');
		$amount = $this->session->flashdata('amount');
		if (!(isset($number)&&isset($amount))) {
			redirect(base_url('home/recharge'), 'refresh');
		}
		$pay = $this->paypal->makepayment($amount);
		if (empty($pay['err'])) {
			$data['status'] = 'initial';
			$data['paymentID'] = $pay['paymentID'];
			$data['token'] = $pay['token'];
			$data['amount'] = $pay['amount'];
			$data['currency'] = $pay['currency'];
			$data['create_date'] = date('m/d/Y h:i:s a', time());
			$data['mobile_number'] = $number;
			$res = $this->payment_model->paypal_setPayment($data);
		}else{
			$data['create_date'] = date('m/d/Y h:i:s a', time());
			$data['mobile_number'] = $number;
			$data['amount'] = $amount;
			$data['status'] = 'initial';
			$data['token'] = uniqid();
			$res = $this->payment_model->paypal_setPayment($data);
		}
		$response = $this->wechat->payment($data['token'],$amount);
		$pay['qrcode'] = $response['url'];
		$pay['qrcode_err'] = $response['succ'];
		$pay['out_trade_no'] = $data['token'];
		$this->session->set_flashdata('out_trade_no', $data['token']);
		$this->session->set_flashdata('amount', $amount);

		$this->session->set_userdata('wepay_out_trade_no',  $data['token']);
		$this->session->set_userdata('wepayamount', $amount);

		$this->load->view('header_support');
		$this->load->view('menu');
		$this->load->view('paymentmode',$pay);
		$this->load->view('footer');
	}

	function success(){
		$paymentId=$this->input->get('paymentId');
		$token=$this->input->get('token');
		$PayerID=$this->input->get('PayerID');
		if (isset($paymentId) && isset($token)) {
			$payment = $this->paypal->paypalCheck($paymentId,$PayerID,$token);
			$res = $this->payment_model->paypal_getPayment($token);
			if (!(isset($payment['id']) && isset($res[0]['token']) && isset($res[0]['paymentID']))) {
				$data['mobile'] = $res[0]['mobile_number'];
				$data['error']= 'Payment not completed! please try again.';
				$this->load->view('header');
				$this->load->view('menu');
				$this->load->view('failed_recharge',$data);
				$this->load->view('footer');
				}
			else{
					if ( isset($res[0]['status']) && $res[0]['status'] != 'success' ) {
						if ($token == $res[0]['token'] && $payment['id'] == $res[0]['paymentID'] && $res[0]['amount'] == $payment['transactions'][0]['amount']['total'] && $res[0]['currency'] == $payment['transactions'][0]['amount']['currency'] && isset($payment['payer'])) 
								{
										$rechargedata=$this->api->AgentCashPay($res[0]['mobile_number'],($res[0]['amount'] * 100),'0');
										if(isset($rechargedata[0]['PayAmount'])){
												$updateData['status']='success';
												$updateData['payer_first_name']=$payment['payer']['payer_info']['first_name'];
												$updateData['payer_last_name']=$payment['payer']['payer_info']['last_name'];
												$updateData['payer_paypal_id']=$payment['payer']['payer_info']['payer_id'];
												if (isset($payment['payer']['payer_info']['shipping_address'])) {
													$updateData['address']= json_encode($payment['payer']['payer_info']['shipping_address']);
												}
												$this->payment_model->paypal_updatePayment($token,$updateData);
												$data['mobile'] = $res[0]['mobile_number'];
												$data['amount'] = ($res[0]['amount']);
												$this->load->view('header');
												$this->load->view('menu');
												$this->load->view('recharge_success',$data);
												$this->load->view('footer');
										}
										else{
											$data['mobile'] = $res[0]['mobile_number'];
											$data['error']= 'Rechage not successful. please contact support if money debited.';
											$this->load->view('header');
											$this->load->view('menu');
											$this->load->view('failed_recharge',$data);
											$this->load->view('footer');
											}
								}
								else{
									$data['mobile'] = $res[0]['mobile_number'];
									$data['error']= 'Payment not completed! please try again.';
									$this->load->view('header');
									$this->load->view('menu');
									$this->load->view('failed_recharge',$data);
									$this->load->view('footer');
								}
			}
			else{
					$data['mobile'] = $res[0]['mobile_number'];
					$data['error']= 'Rechage was already done.';
					$this->load->view('header');
					$this->load->view('menu');
					$this->load->view('failed_recharge',$data);
					$this->load->view('footer');
				}
			}
			
		}
			else{
				$data['mobile'] = '';
				$data['error']= 'Invalid parameters in url';
				$this->load->view('header');
				$this->load->view('menu');
				$this->load->view('failed_recharge',$data);
				$this->load->view('footer');
			}
	}

	function failed(){
				$token=$this->input->get('token');
				$res = $this->payment_model->paypal_getPayment($token);
				$data['mobile'] = $res[0]['mobile_number'];
				$data['error']= 'Payment Incomplete';
				$this->load->view('header');
				$this->load->view('menu');
				$this->load->view('failed_recharge',$data);
				$this->load->view('footer');
	}

	function alipay(){
		$trade_no = $this->session->flashdata('out_trade_no');
		$amount = $this->session->flashdata('amount');
		$this->alipay->payment($trade_no,$amount);
	}
	function alisuccess(){
		if ($this->alipay->verify()) {
			$token = $this->input->get('out_trade_no');
			$trade_status = $this->input->get('trade_status');
			$res = $this->payment_model->paypal_getPayment($token);
			// print_r($res);
			if ($trade_status == 'TRADE_FINISHED') {
				if ($res[0]['status']=='success') {
					$data['error']= 'Rechage already done';
					$data['mobile'] = $res[0]['mobile_number'];
					$this->load->view('header');
					$this->load->view('menu');
					$this->load->view('failed_recharge',$data);
					$this->load->view('footer');
				}else{
					$rechargedata=$this->api->AgentCashPay($res[0]['mobile_number'],($res[0]['amount'] * 100),'0');
							if(isset($rechargedata[0]['PayAmount'])){
								$updateData['status']='success';
								$updateData['payer_first_name']='';
								$updateData['payer_last_name']='';
								$updateData['payer_paypal_id']='';
								$this->payment_model->paypal_updatePayment($token,$updateData);
								$data['mobile'] = $res[0]['mobile_number'];
								$data['amount'] = ($res[0]['amount']);
								$this->load->view('header');
								$this->load->view('menu');
								$this->load->view('recharge_success',$data);
								$this->load->view('footer');
								}
								else{
									$data['mobile'] = $res[0]['mobile_number'];
									$data['error']= 'Rechage not successful. please contact support if money debited.';
									$this->load->view('header');
									$this->load->view('menu');
									$this->load->view('failed_recharge',$data);
									$this->load->view('footer');
								}
				}
			}
			else{
				$data['error']= 'Payment not Successful';
				$data['mobile']= $res[0]['mobile_number'];
				$this->load->view('header');
				$this->load->view('menu');
				$this->load->view('failed_recharge',$data);
				$this->load->view('footer');
			}
			
		}else{
			$data['error']= 'Invalid parameters in url';
			$data['mobile']= '';
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('failed_recharge',$data);
			$this->load->view('footer');
		}
	}
	// wechat pay
	function pay_verify($out_trade_no){
		// $out_trade_no = $this->input->post('out_trade_no');
		$res = $this->wechat->verify($out_trade_no);
		// print_r($res);
		if($res['data']['return_code']== 'SUCCESS' && $res['data']['result_code']== 'SUCCESS' && $res['data']['trade_state']== 'SUCCESS'){
			echo 'true';
		}
		else{
			echo 'false';
		}
	}

	function pay_verify_page($out_trade_no){
		// $out_trade_no = $this->input->post('out_trade_no');
		$res = $this->wechat->verify($out_trade_no);
		// print_r($res);
		if($res['data']['return_code']== 'SUCCESS' && $res['data']['result_code']== 'SUCCESS' && $res['data']['trade_state']== 'SUCCESS'){
			return true;
		}
		else{
			return false;
		}
	}

	function pay_close($out_trade_no){
		// $out_trade_no = $this->input->post('out_trade_no');
		$res = $this->wechat->close($out_trade_no);
		if($res['data']['return_code']== 'SUCCESS' && $res['data']['result_code']== 'SUCCESS'){
			echo 'true';
		}
		else{
			echo 'false';
		}
	}

	function wechatverify(){

		$trade_no = $this->session->userdata('wepay_out_trade_no');
		$amount = $this->session->userdata('wepayamount');

		if(isset($trade_no) && isset($amount)){
			$res = $this->payment_model->paypal_getPayment($trade_no);
			if (isset($res) && $res[0]['amount'] == $amount) {
			  if ($this->pay_verify_page($trade_no)) {
					if ($res[0]['status']=='success') {
						$data['error']= 'Rechage already done';
						$data['mobile'] = $res[0]['mobile_number'];
						$this->load->view('header');
						$this->load->view('menu');
						$this->load->view('failed_recharge',$data);
						$this->load->view('footer');
					}else{
						$rechargedata=$this->api->AgentCashPay($res[0]['mobile_number'],($res[0]['amount'] * 100),'0');
						if(isset($rechargedata[0]['PayAmount'])){
									$trade_no = $this->session->unset_userdata('wepay_out_trade_no');
									$amount = $this->session->unset_userdata('wepayamount');
									$updateData['status']='success';
									$updateData['payer_first_name']='';
									$updateData['payer_last_name']='';
									$updateData['payer_paypal_id']='';
									$this->payment_model->paypal_updatePayment($token,$updateData);
									$data['mobile'] = $res[0]['mobile_number'];
									$data['amount'] = ($res[0]['amount']);
									$this->load->view('header');
									$this->load->view('menu');
									$this->load->view('recharge_success',$data);
									$this->load->view('footer');
									}
									else{

										$data['mobile'] = $res[0]['mobile_number'];
										$data['error']= 'Rechage not successful. please contact support if money debited.';
										$this->load->view('header');
										$this->load->view('menu');
										$this->load->view('failed_recharge',$data);
										$this->load->view('footer');
									}
					}
			}
				else{
					$data['error']= 'Payment not Successful';
					$data['mobile']= $res[0]['mobile_number'];
					$this->load->view('header');
					$this->load->view('menu');
					$this->load->view('failed_recharge',$data);
					$this->load->view('footer');
				}
			}else{
				$data['error']= 'Payment Details not found on Database';
				$data['mobile']= $res[0]['mobile_number'];
				$this->load->view('header');
				$this->load->view('menu');
				$this->load->view('failed_recharge',$data);
				$this->load->view('footer');
			}

		}else{

			$data['mobile'] = '';
			$data['error']= 'Rechage request is not vaild';
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('failed_recharge',$data);
			$this->load->view('footer');
		}
	}
}