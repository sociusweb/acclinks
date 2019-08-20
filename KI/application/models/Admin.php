<?php
Class Admin extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('password');
   $this -> db -> from('tbl_admin');
   $this -> db -> where('username', $username);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   //echo $query -> num_rows();
   if ($query -> num_rows()>0 && password_verify($password, $result[0]['password']))
   {
     $date = time();
     $data=array('lastlogin'=>$date);
     $this->db->where('username', $username);
     $result = $this->db->update('tbl_admin', $data);
     return true;
   }
   else
   {
     return false;
   }
 }
 function chgpwd($username, $oldpassword, $newpassword){
   $this -> db -> select('password');
   $this -> db -> from('tbl_admin');
   $this -> db -> where('username', $username);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   //echo $query -> num_rows();
   if (password_verify($oldpassword, $result[0]['password']))
   {
     $pwd = password_hash($newpassword, PASSWORD_DEFAULT);
     $data=array('password'=>$pwd);
     $this->db->where('username', $username);
     $result = $this->db->update('tbl_admin', $data);
     echo 1;
   }
   else
   {
     echo 0;
   }
 }
 function getlastlogin(){
   $this -> db -> select('lastlogin');
   $this -> db -> from('tbl_admin');
   $this -> db -> where('id', 1);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result[0]['lastlogin'];
 }

  function viewpayment(){
  $this -> db -> select('*');
  $this -> db -> from('tbl_paypal_payment');
  $query = $this -> db -> get();
  $result=$query->result_array();
  return $result;
}

function detailpay($id){
  $this -> db -> select('*');
  $this -> db -> from('tbl_paypal_payment');
  $this->db->where('id',$id);
  $query = $this -> db -> get();
  $result=$query->result_array();
  return $result;
}


  function getuserlastlogin($username){
   $this -> db -> select('lastlogin');
   $this -> db -> from('tbl_user_profile');
   $this -> db -> where('username', $username)->or_where("mobile_no",$username);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result[0]['lastlogin'];
 }

 function addpro($data){
  $result = $this->db->insert('tbl_product', $data);
  return $result;
 }
 function viewproduct(){
   $this -> db -> select('id,pro_name,pro_img1,pro_price,pro_status');
   $this -> db -> from('tbl_product');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }
 function updateprostatus($id,$val){
   $data=array('pro_status'=>$val);
   $this->db->where('id', $id);
   $result = $this->db->update('tbl_product', $data);
   return $result;
 }
//delete product
 function deleteproduct($id){
   $this->db->where('id', $id);
   $result = $this->db->delete('tbl_product');
   return $result;
 }
//edit products
 function editpro($id){
   $this -> db -> select('*');
   $this -> db -> from('tbl_product');
   $this->db->where('id', $id);
   $query = $this -> db -> get();
   $result['product']=$query->result_array();
   return $result;
 }
 function proupdate($data,$id){
  $this->db->where('id', $id);
  $result = $this->db->update('tbl_product', $data);
  return $result;
 }

 function addblockdata($data){
    $result = $this->db->insert('tbl_block', $data);
  return $result;
 }
 function getblock(){
   $this -> db -> select('*');
   $this -> db -> from('tbl_block');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

 function getblockdata($id){
   $this -> db -> select('*');
   $this -> db -> from('tbl_block');
   $this->db->where('id', $id);
   $query = $this -> db -> get();
   $result['block']=$query->result_array();
   return $result;
 }

 function updateblock($data,$id){
   $this->db->where('id', $id);
   $result = $this->db->update('tbl_block', $data);
   return $result;
 }

 function updateslider($data)
 {
  $result = $this->db->insert('tbl_slider', $data);
  return $result;
 }

 function getslider(){
   $this -> db -> select('*');
   $this -> db -> from('tbl_slider');
   $query = $this -> db -> get();
   $result['slider']=$query->result_array();
   return $result;
 }

  function deleteslide($id){
   $this->db->where('id', $id);
   $result = $this->db->delete('tbl_slider');
   return $this->db->affected_rows();;
 }

  function updatesliderstatus($id,$val){
   $data=array('sdr_status'=>$val);
   $this->db->where('id', $id);
   $result = $this->db->update('tbl_slider', $data);
   return $result;
 }

 function getslidedata($id){
   $this -> db -> select('*');
   $this -> db -> from('tbl_slider');
   $this->db->where('id', $id);
   $query = $this -> db -> get();
   $result['slide']=$query->result_array();
   return $result;
 }

  function sdrupdate($data,$id){
  $this->db->where('id', $id);
  $result = $this->db->update('tbl_slider', $data);
  return $result;
 }

 function deleterow($id){
   $this->db->where('id', $id);
   $result = $this->db->delete('tbl_block');
   return $result;
 }
 function getSmtp(){
   $this -> db -> select('*');
   $this -> db -> from('tbl_smtp');
   $this->db->where('smtp_id', 1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

 function setSmtp($data){
  $res=$this->db->replace('tbl_smtp', $data);
  return $res;
 }

 function send($to,$from,$subject,$message){
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        $smtp_data=$this->getSmtp();
        // print_r($smtp_data);
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = $smtp_data[0]['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_data[0]['smtp_username'];
        $mail->Password = $smtp_data[0]['smtp_password'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = $smtp_data[0]['smtp_port'];
        
        $mail->setFrom($from, 'Acclinks');
        
        // Add a recipient
        $mail->addAddress($to);
        
        // Email subject
        $mail->Subject = $subject;
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mail->Body = $message;
        
        // Send email
        if(!$mail->send()){
            return false;
        }else{
            return true;
        }
    }

 function get_about_detail(){//
   $this -> db -> select('*');
   $this -> db -> from('tbl_about_static');
   $this->db->where('id', 1);
   $query = $this -> db -> get();
   $result['about']=$query->result_array();
   return $result;
 }

function about_update($data){//
  $this->db->where('id', 1);
  $result = $this->db->update('tbl_about_static', $data);
  return $result;
 }

function get_service_detail(){//
   $this -> db -> select('*');
   $this -> db -> from('tb_service');
   $this->db->where('id', 1);
   $query = $this -> db -> get();
   $result['service']=$query->result_array();
   return $result;
 }

function service_update($data){//
  $this->db->where('id', 1);
  $result = $this->db->update('tb_service', $data);
  return $result;
 }

function add_setup($data)
 {
   $result = $this->db->insert('tb_set_up', $data);
  return $result;
 }
 function getsetup(){
   $this -> db -> select('*');
   $this -> db -> from('tb_set_up');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }
 function setup_data($id){
   $this -> db -> select('*');
   $this -> db -> from('tb_set_up');
   $this->db->where('id', $id);
   $query = $this -> db -> get();
   $result['blk']=$query->result_array();
   return $result;
 }

function  update_setup($data,$id){
  $this->db->where('id', $id);
  $result = $this->db->update('tb_set_up', $data);
  return $result;
}
 function deleterows($id){
   $this->db->where('id', $id);
   $result = $this->db->delete('tb_set_up');
   return $result;
 }
}
?>
