<?php
class User_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function save_registration($post = array()){
		if(is_array($post) && sizeof($post) > 0){
			$db_user = array(
				'name' => trim($post['name']),
				'contact_no' => trim($post['contact_no']),
				'email_address' => trim($post['email_address']),
				'user_type' => 'user'
			);
			
			$error_msg = array();
			if($db_user['name'] == ""){
				$error_msg['name'] = "Please enter your name";
			}
			
			if($db_user['contact_no'] == ""){
				$error_msg['contact_no'] = "Please enter your Contact No";
			}
			else if(!filter_phone($db_user['contact_no'])){
				$error_msg['contact_no'] = "Invalid Contact No.";
			}
			
			if($db_user['email_address'] == ""){
				$error_msg['email_address'] = "Please enter your Email Address";
			}
			else{
				if(!filter_var($db_user['email_address'], FILTER_VALIDATE_EMAIL)){
					$error_msg['email_address'] = "Invalid Email Address. Please enter the valid Email Address";
				}
				else{
					#Check email address is already exists
					$sql_chk = "SELECT * FROM `ef_user` WHERE `email_address` = " . $this->db->escape($db_user['email_address']) . " LIMIT 1";
					$query_chk = $this->db->query($sql_chk);
					if($query_chk->num_rows() > 0) {
						$error_msg['email_address'] = "Email address `" . $db_user['email_address'] . "` is already exists. Please try another email";
					}
				}
			}
			
			if($post['password'] == ""){
				$error_msg['password'] = "Please enter password";
				
				if($post['confirm_password'] == ""){
					$error_msg['confirm_password'] = "Please confirm your password";
				}
			}
			else if($post['confirm_password'] == ""){
				$error_msg['confirm_password'] = "Please confirm your password";
				
				if($post['password'] == ""){
					$error_msg['password'] = "Please enter password";
				}
			}
			else if($post['password'] !== $post['confirm_password']){
				$error_msg['password'] = "Password and Confirm Password must be the same value";
				$error_msg['confirm_password'] = "";
			}
			else if(strlen($post['password']) != 6){
				$error_msg['password'] = "Password length must be 6";
				$error_msg['confirm_password'] = "";
			}
			
			if(sizeof($error_msg) > 0){
				set_message(implode(" | ", $error_msg), "danger");
				return $error_msg;
			}
			
			$db_user['password'] = md5($post['password']);
			$this->db->insert('ef_user', $db_user);
			set_message("Registration succeed.", "success");
			return true;
		}
		
		set_message("Please try again later.", "danger");
		return false;
	}
}

?>