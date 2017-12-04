<?php
class Login_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function logging_in($post = array()){
		#Validate login field
		$error_msg = array();
		if($post['email_address'] == ""){
			$error_msg['email_address'] = "Please enter your Email Address";
		}
		
		if($post['password'] == ""){
			$error_msg['password'] = "Please enter your Password";
		}
		
		#If has error occured, return the error message back to the login page
		if(sizeof($error_msg) > 0){
			set_message(implode(" | ", $error_msg), "danger");
			return $error_msg;
		}
		
		$query_user = $this->db->query("SELECT * FROM `ef_user` WHERE `email_address` = " . $this->db->escape($post['email_address']) . " AND `password` = " . $this->db->escape(md5($post['password'])) . " AND `user_type` = 'user' LIMIT 1");
		if($query_user->num_rows() > 0){
			$row_user = $query_user->row();
			$login_data = array(
				'user_id' => $row_user->user_id,
				'name' => $row_user->name,
				'email_address' => $row_user->email_address,
				'contact_no' => $row_user->contact_no,
				'user_type' => $row_user->user_type,
				'logged_in' => TRUE
			);
			$this->session->set_userdata('login_user', $login_data);
			
			return true;
		}
		
		set_message("Wrong email or password", "danger");
		return false;
	}
}

?>