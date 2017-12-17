<?php
class User_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	//kalau dia post something, masuk dalam database
	function save_registration($post = array()){
		if(is_array($post) && sizeof($post) > 0){
			$db_user = array(
				'name' => trim($post['name']),
				'contact_no' => trim($post['contact_no']),
				'email_address' => trim($post['email_address']),
				'user_type' => 'user' //dah auto set
			);
			
			$error_msg = array();
			if($db_user['name'] == ""){
				$error_msg['name'] = "Please enter your name";
			}
			
			if($db_user['contact_no'] == ""){
				$error_msg['contact_no'] = "Please enter your Contact No";
			}
			//ni untuk check phone number valid ke tak
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
			//check password ngan confirm password tally ke tak
			else if($post['password'] !== $post['confirm_password']){
				$error_msg['password'] = "Password and Confirm Password must be the same value";
				$error_msg['confirm_password'] = "";
			}
			//condition password character
			else if(strlen($post['password']) != 6){
				$error_msg['password'] = "Password length must be 6";
				$error_msg['confirm_password'] = "";
			}
			
			if(sizeof($error_msg) > 0){
				set_message(implode(" | ", $error_msg), "danger");
				return $error_msg;
			}
			//information masuk dalam db
			$db_user['password'] = md5($post['password']);
			$this->db->insert('ef_user', $db_user);
			set_message("Registration succeed.", "success");
			
			//Sending email to user
			$email_data['email_address'] = $db_user['email_address'];
			$email_data['subject'] = 'Welcome To eFutebol';
			$email_data['body'] = 'Dear ' . $db_user['name'] . ',<br/><br/>'.
								  'Thanks for becoming a members of eFutebol.<br/><br/>'.
								  'Hope you has a wonderful day ahead.<br/><br/><br/>'.
								  'eFutebol.';
			sendmail($email_data);
			
			return true;
		}
		
		set_message("Please try again later.", "danger");
		return false;
	}
	
	function change_password($post = array()){
		if(is_array($post) && sizeof($post) > 0){
			$error_msg = array();
			if($post['current_password'] == ""){
				$error_msg['current_password'] = "Please enter your current password";
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
			
			$query_chk = $this->db->query("SELECT * FROM `ef_user` WHERE `user_id` = " . $this->db->escape($this->session->userdata('login_user')['user_id']) . " AND `password` = " . $this->db->escape(md5($post['current_password'])));
			if($query_chk->num_rows() > 0){
				$row_chk = $query_chk->row();
				
				$this->db->where('user_id', $row_chk->user_id);
				$this->db->update('ef_user', array('password' => md5($post['password'])));
				set_message("Password has been updated.", "success");
				
				return true;
			}
			else{
				set_message("Current password is incorrect.", "danger");
				$error_msg['current_password'] = "Current password is incorrect.";
				
				return $error_msg;
			}
		}
		
		set_message("Please try again later.", "danger");
		return false;
	}
	
	function reset_password($post = array()){
		if(is_array($post) && sizeof($post) > 0 && isset($post['email_address'])){
			$error_msg = array();
			if($post['email_address'] == ""){
				$error_msg['email_address'] = "Please enter your email address";
			}
			//function untuk mutiple error
			//array size lebih dari kosong ada error
			if(sizeof($error_msg) > 0){
				set_message(implode(" | ", $error_msg), "danger"); //gabung error message dalam array utk jadi satu message guna function php implode
				return $error_msg;
			}
			
			$query_chk = $this->db->query("SELECT * FROM `ef_user` WHERE `email_address` = " . $this->db->escape($post['email_address']) . " AND `user_type` = 'user'");
			if($query_chk->num_rows() > 0){
				$row_chk = $query_chk->row();
				
				//Generate random password
				$plain_pwd = uniqid();
				$this->db->where('user_id', $row_chk->user_id);
				$this->db->update('ef_user', array('password' => md5($plain_pwd)));
				set_message("Password has been reset. Please check your email inbox to continue.", "success");
				
				//Sending email to user
				$email_data['email_address'] = $row_chk->email_address;
				$email_data['subject'] = 'eFutebol Account Reset Password';
				$email_data['body'] = 'Dear ' . $row_chk->name . ',<br/><br/>'.
									  'Here is your new password : ' . $plain_pwd . '<br/><br/>'.
									  'Hope you has a wonderful day ahead.<br/><br/><br/>'.
									  'eFutebol.';
				sendmail($email_data);
				
				return true;
			}
			else{
				set_message("Email address doesn't exists.", "danger");
				$error_msg['email_address'] = "Email address doesn't exists.";
				
				return $error_msg;
			}
		}
		
		set_message("Please try again later.", "danger");
		return false;
	}
}

?>