<?php
Class Payment_model extends CI_Model
{
	function paypal_setPayment($data){
		$result = $this->db->insert('tbl_paypal_payment', $data);
  		return $result;
	}

	function paypal_getPayment($token){
		$this -> db -> select('*');
	   	$this -> db -> from('tbl_paypal_payment');
	   	$this->db->where('token', $token);
	   	$query = $this -> db -> get();
	   	$result=$query->result_array();
	   	return $result;
	}

	function paypal_updatePayment($token,$data){
		$this->db->where('token', $token);
   		$result = $this->db->update('tbl_paypal_payment', $data);
   		return $result;
	}
}
?>