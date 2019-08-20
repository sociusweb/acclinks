<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('admin');
		$this->load->model('homemodel');
		$this->load->model('api');
	}
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function user_login(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$sec=$this->admin->getuserlastlogin($username);
		$this->session->set_userdata('lastloginuser', $sec);
		$res=$this->homemodel->user_auth($username,$pass);
		if($res['id']){
			$this->api->smssend('674'.$res['mobile_no'],'You have successfully logged into Website');
			$this->session->set_userdata('isUserLoggedin', 'true');
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('userId', $res['id']);
			$this->session->set_userdata('mobnumber', $res['mobile_no']);
			$this->session->set_userdata('name', $res['name']);
			$_SESSION["count"]=0;
			redirect('/home/account', 'refresh');
		}else{
			redirect('/login?suc=2', 'refresh');
		}
	}

	public function user_logout(){
		$this->session->unset_userdata('isUserLoggedin');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('userId');
		$this->session->unset_userdata('mobnumber');
		$this->session->unset_userdata('name');
		redirect('/login', 'refresh');
	}

	public function dashboard()
	{
		$this->load->view('dashboard/login.php');
	}
	public function verify(){
		if (isset($_POST['submit'])&&$_POST['uname']!="") {
			$password = $_POST['password'];
			$username = $_POST['uname'];
			$sec=$this->admin->getlastlogin();
			$this->session->set_userdata('lastlogin', $sec);
			$res=$this->admin->login($username,$password);
			if ($res) {
				 $this->session->set_userdata('isloggedin', 'true');
				 $this->session->set_userdata('usernme', $username);
				 redirect('/dashboard', 'refresh');
			}
			else{
				redirect('/login/dashboard?suc=2', 'refresh');
			}
		}
		else{
			redirect('/login/dashboard', 'refresh');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('isloggedin');
		$this->session->unset_userdata('usernme');
		$this->session->unset_userdata('lastlogin');
		redirect('/login/dashboard', 'refresh');
	}

	function otp_gen(){
		$num=$this->input->post('number');
		$otp = rand(100000, 999999);
		$this->session->set_userdata('session_otp', $otp);
		$this->session->set_userdata('otp_number', $num);
        $message = "Your One Time Password for login is " . $otp;
        echo $this->api->sendSms('686'.$num,$message);
	}

	function verify_otp(){
		$otp = $this->session->userdata('session_otp');
		$number = $this->session->userdata('otp_number');
		if($otp == $_POST['otp'] && $number ==$_POST['number'] ){
			//removing otp and mobile number after verification
			$this->session->unset_userdata('session_otp');
			$this->session->unset_userdata('otp_number');
			//creating session of otp based user
			$this->session->set_userdata('isUserLoggedin', 'true');
			$this->session->set_userdata('mobnumber', $number);
			echo "true";
		}
		else{
			echo 'false';
		}
	}

	function otplogin(){
		if ($this->session->userdata('isUserLoggedin')) {
			$number = $this->session->userdata('mobnumber');
			$ret = $this->homemodel->checkReg($number);
			if ($ret['succ']) {
				$this->session->set_userdata('username', $ret[0]['username']);
				$this->session->set_userdata('userId', $ret[0]['id']);
				$this->session->set_userdata('userId', $ret[0]['id']);
				redirect('/home/account', 'refresh');
			}
			else{
				redirect('/home/addprofile', 'refresh');
			}
		}
		else{
		redirect('/login', 'refresh');
		}
	}

	function testotp(){
		print_r($this->session->userdata('session_otp'));
	}
}
