<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		function __construct() {
		parent::__construct();
		$this->load->library('authenticate');
		$this->load->model('homemodel');
		$this->load->model('admin');
		$this->load->model('api');
	}

	public function index()
	{	
		$data['slider']=$this->homemodel->sliderdata();
		$data['row']=$this->homemodel->rowdata();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
	
	public function product()
	{	
		$data['products']=$this->homemodel->getproduct();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('product',$data);
		$this->load->view('footer');
	}
	public function productdetail()
	{	
		$id=$this->input->get('mid');
		$data['product']=$this->homemodel->getproductdetails($id);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('productdetail',$data);
		$this->load->view('footer');
	}
	public function recharge(){
		$data['list']=json_decode($this->api->offerList(),true);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('recharge',$data);
		$this->load->view('footer');
	}
	public function setup(){
		$data['setup']=$this->admin->getsetup();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('setup',$data);
		$this->load->view('footer');
	}
	public function map(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('coverage_map');
		$this->load->view('footer');
	}
	public function support(){
		$this->load->view('header_support');
		$this->load->view('menu');
		$this->load->view('support');
		$this->load->view('footer');
	}
	public function service(){
		$data=$this->admin->get_service_detail();
		$this->load->view('header_support');
		$this->load->view('menu');
		$this->load->view('service',$data);
		$this->load->view('footer');
	}
	public function paymentoption(){
		$this->load->view('header_support');
		$this->load->view('menu');
		$this->load->view('paymentmode');
		$this->load->view('footer');
	}
	public function supportMail(){
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$subject=$this->input->post('subject');
		$message=$this->input->post('message');

		$url=base_url().'assets/email/email.html';
        // template veriables
        $variables = array();
        $variables['fname'] = $fname;
        $variables['lname'] = $lname;
        $variables['email'] = $email;
        $variables['phone'] = $phone;
        $variables['subject'] = $subject;
        $variables['message'] = $message;
        $template = file_get_contents($url);
        foreach($variables as $key => $value)
            {
                $template = str_replace('{{ '.$key.' }}', $value, $template);
            }	
           $res = $this->admin->send(mailaddress,'noreply@socius-global.com',$subject,$template);
		if ($res) {
			redirect(base_url('home/support?suc=1'), 'refresh');
		}else{
			redirect(base_url('home/support?suc=2'), 'refresh');
		}
	}

	public function about(){
		$data=$this->admin->get_about_detail();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('about',$data);
		$this->load->view('footer');
	}

	public function addprofile(){
		$this->authenticate->is_user_login();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('profile');
		$this->load->view('footer');
	}

	public function changepwd(){
		$this->authenticate->is_user_login();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('changepwd');
		$this->load->view('footer');
	}


	public function account(){
		$this->authenticate->is_user_login();
		$number = $this->session->userdata('mobnumber');
		$data['balance']=$this->api->QueryBalance($number);
		//combine total balace to remaining balance
		$totalbal = json_decode($this->api->offerList(),true);
		$plans =$this->api->QueryOfferInfo($number);
		$result = Array();
		if (!isset($plans[0]['error'])) {
					    foreach ($plans as $key_1 => &$value_1) {
		        // if($value['name'])
		        foreach ($totalbal as $key_1 => $value_2) {
		            if($value_1['OfferId'] ==  $value_2['OFR_ID']) {
		                $result[] = array_merge($value_1,$value_2);
		            }
		        }
		    }
		}
		$data['plans'] = $result;
		$data['details']=json_decode($this->api->basic_detail($number),true);
		$data['name']=$this->homemodel->getName();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('account_status',$data);
		$this->load->view('footer');
	}

	public function rates(){
		$data['list']=json_decode($this->api->offerList(),true);	
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('rates_plan',$data);
		$this->load->view('footer');
	}
	public function statementvoice(){
		$this->authenticate->is_user_login();
		$number = $this->session->userdata('mobnumber');
		$data['voicedetails']=json_decode($this->api->voice_cdr($number),true);
	
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('statement_voice', $data);
		$this->load->view('footer');
	}
	public function statementsms(){
		$this->authenticate->is_user_login();
		$number = $this->session->userdata('mobnumber');
		$data['smsdetails']=json_decode($this->api->sms_cdr($number),true);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('statement_sms', $data);
		$this->load->view('footer');
	}
	public function statementdata(){
		$this->authenticate->is_user_login();
		$number = $this->session->userdata('mobnumber');
		$data['datadetails']=json_decode($this->api->data_cdr($number),true);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('statement_data', $data);
		$this->load->view('footer');
	}

	public function statementrecharge(){
		$this->authenticate->is_user_login();
		$number = $this->session->userdata('mobnumber');
		$data['rechargedetails']=json_decode($this->api->rechargCDR($number),true);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('statement_recharge', $data);
		$this->load->view('footer');
	}
	public function statementtransfer(){
		$this->authenticate->is_user_login();
		$number = $this->session->userdata('mobnumber');
		$data['transferdetails']=json_decode($this->api->transferCDR($number),true);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('statement_transfer', $data);
		$this->load->view('footer');
	}
	

	public function profile_add(){
		$this->authenticate->is_user_login();
		$data['mobile_no'] =  $this->session->userdata('mobnumber');
		$data['username']=$this->input->post('username');
		$data['password']=password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$data['name']=$this->input->post('name');
		$data['dob']=$this->input->post('dob');
		$data['contact']=$this->input->post('contact');
		$data['email']=$this->input->post('email');
		$data['address']=$this->input->post('address');
		$data['first_login']='1';

		$config['upload_path'] = 'assets/images/profilepic';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1000000';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;

            if (isset($_FILES['pro_img'])) {
            $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['pro_img']['name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('pro_img')) {
        			echo "profile upload failed";
                } else {
                        $dat = array('upload_data' => $this->upload->data());
                        $data['	pic'] = base_url().'assets/images/profilepic/'.$dat['upload_data']['file_name'];                  
                        }
                }
        $result=$this->homemodel->update_profile($data);
        if ($result) {
				redirect(base_url('home/profile?suc=1'), 'refresh');
		  }
		      else{
		        	redirect(base_url('home/profile?suc=2'), 'refresh');
		   }

	}

	public function chk_username(){
		$username=$this->input->post('username');
		echo $this->homemodel->chk_username($username);
	}

	public function profile(){
		$this->authenticate->is_user_login();
        $result=$this->homemodel->get_profile();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('profile_edit',$result[0]);
		$this->load->view('footer');
	}

	public function profileEdit(){
		$this->authenticate->is_user_login();
		$id=$this->session->userdata('userId');
		if (!empty($this->input->post('password'))) {
		$data['password']=password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		}
		$data['name']=$this->input->post('name');
		$data['dob']=$this->input->post('dob');
		$data['contact']=$this->input->post('contact');
		$data['email']=$this->input->post('email');
		$data['address']=$this->input->post('address');

		$config['upload_path'] = 'assets/images/profilepic';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1000000';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;

            if (isset($_FILES['pro_img'])) {
            $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['pro_img']['name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('pro_img')) {
        			// echo "profile upload failed";
                } else {
                        $dat = array('upload_data' => $this->upload->data());
                        $data['	pic'] = 'assets/images/profilepic/'.$dat['upload_data']['file_name'];
                        }
                }
            $result=$this->homemodel->edit_profile($id,$data);
		        if ($result) {
					redirect(base_url('home/profile?suc=1'), 'refresh');
		        }
		        else{
		        	redirect(base_url('home/profile?suc=2'), 'refresh');
		        }
	}
	// public function basicDetails(){
	// 	$data=$this->api->basic_detail('63000242');
	// 	print_r($data);
	// }

	// public function QueryBalance(){
	// 	$data=$this->api->QueryBalance('63000242');
	// 	print_r($data);
	// }
	// public function QueryOfferInfo(){
	// 	$data=$this->api->QueryOfferInfo('63000220');
	// 	print_r($data);
	// }

	public function rechargenumber(){
		//AgentCashPay(number,amount,tax)
		//check is user loged in or not
		$this->authenticate->is_user_login();
		$number=$this->input->post('mobilenumber');
		$amount=$this->input->post('amount');

		//checking number exit or invalid number
		$result = json_decode($this->api->basic_detail($number),true);
		if (!isset($result[0]['BASIC_STATE'])) {
			redirect(base_url('home/recharge?err=1'), 'refresh');
		}
		elseif ($result[0]['BASIC_STATE'] != 'F0B') {
			redirect(base_url('home/recharge?err=2'), 'refresh');
		}
		else{
			$this->session->set_flashdata('mobilenumber', $number);
			$this->session->set_flashdata('amount', $amount);
	     	redirect(base_url('payment/pay'), 'refresh');
		}
	}
	public function activateOffer($id){
		$this->authenticate->is_user_login();
		$number=$this->session->userdata('mobnumber');
		$res=$this->api->ActivateOffer($number,$id);
		if(isset($res['success'])){
			$data['mobile'] = $number;
			$data['amount'] = '100';
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('payment_success',$data);
			$this->load->view('footer');
		}
		elseif (isset($res['error'])) {
			$res['mobile'] = $number;
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('failed_payment',$res);
			$this->load->view('footer');
		}
	}

	 public function change_pwd(){
	 $username =  $this->session->userdata('username');
	 $old = $this->input->post('e_password');
	 $new = $this->input->post('new_pwd');
	 $res=$this->homemodel->chgpwd($username,$old,$new);
	 if ($res) {
	     redirect(base_url('home/changepwd?suc=1'), 'refresh');
	 }
	 else{
	     redirect(base_url('home/changepwd?suc=2'), 'refresh');
	 }
	}

	public function test(){
		// ini_set('max_execution_time', 300);
		print_r($this->api->QueryOfferInfo('8800500'));
	}
}
