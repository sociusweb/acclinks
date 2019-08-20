<?php
Class Homemodel extends CI_Model
{

 function user_auth($username,$password){
   $this -> db -> select('password,id,mobile_no,name');
   $this -> db -> from('tbl_user_profile');
   $this -> db -> where('username', $username)->or_where("mobile_no",$username);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   //echo $query -> num_rows();
   if ($query -> num_rows()>0 && password_verify($password, $result[0]['password']))
   {
     $date = time();
     $data=array('lastlogin'=>$date);
     $this->db->where('username', $username);
     $this->db->update('tbl_user_profile', $data);
     return $result[0];
   }
   else
   {
     return false;
   }
 }
 function getName(){
  $id=$this->session->userdata('userId');
  $this -> db -> select('name');
  $this -> db -> from('tbl_user_profile');
  $this->db->where('id',$id);
  $query = $this -> db -> get();
  $result=$query->result_array();
  return $result[0]['name'];
 }

 function sliderdata(){
   $this -> db -> select('*');
   $this -> db -> from('tbl_slider');
   $this->db->where('sdr_status',1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }
 
 function rowdata(){
   $this -> db -> select('*');
   $this -> db -> from('tbl_block');
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }
 function getproduct(){
   $this -> db -> select('id,pro_name,pro_brand,pro_price,pro_img1');
   $this -> db -> from('tbl_product');
   $this->db->where('pro_status',1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }
 function getproductdetails($id){
   $this -> db -> select('*');
   $this -> db -> from('tbl_product');
   $this->db->where('id',$id);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }
 function update_profile($data){
    $result = $this->db->insert('tbl_user_profile', $data);
    return $result;
 }
 function chk_username($username){
   $this -> db -> select('*');
   $this -> db -> from('tbl_user_profile');
   $this->db->where('username',$username);
   $query = $this -> db -> get();
   if ($query->num_rows()>0) {
      return 1;
   }
   else{
      return 2;
   }
 }

 function get_profile(){
   $id=$this->session->userdata('userId');
   $this -> db -> select('*');
   $this -> db -> from('tbl_user_profile');
   $this->db->where('id',$id);
   $query = $this -> db -> get();
   $result=$query->result_array();
   return $result;
 }

 function checkReg($number){
   $this -> db -> select('id,username,name');
   $this -> db -> from('tbl_user_profile');
   $this->db->where('mobile_no',$number);
   $query = $this -> db -> get();
   if ($query->num_rows()>0) {
      $return=$query->result_array();
      $return['succ'] = true;
      return $return;
   }
   else{
      $return['succ'] = false;
      return $return;
   }
 }

 function edit_profile($id,$data){
   $this->db->where('id', $id);
   $result = $this->db->update('tbl_user_profile', $data);
   return $result;
 }

function chgpwd($username, $oldpassword, $newpassword){
   $this -> db -> select('password');
   $this -> db -> from('tbl_user_profile');
   $this -> db -> where('username', $username);
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   $result=$query->result_array();
   if (password_verify($oldpassword, $result[0]['password']))
   {
     $pwd = password_hash($newpassword, PASSWORD_DEFAULT);
     $data=array('password'=>$pwd);
     $this->db->where('username', $username);
     $result = $this->db->update('tbl_user_profile', $data);
     return true;
   }
   else
   {
     return false;
   }
 }

}
?>
