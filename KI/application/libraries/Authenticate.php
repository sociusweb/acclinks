<?php

class Authenticate {
    public function __construct() {
        $this->ci = &get_instance();
    
    }
    public function is_admin_login() {
       $sessionid = $this->ci->session->userdata('isloggedin_ki');
      if (!$sessionid) {
           redirect(base_url() . 'login/dashboard');
           exit();
       }
    }

    public function is_user_login(){
       $session = $this->ci->session->userdata('isUserLoggedin_ki');
       if(!$session){
        redirect(base_url() . 'login');
        exit();
       }
    }

}

