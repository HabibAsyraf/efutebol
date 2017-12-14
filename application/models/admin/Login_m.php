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
		
		$query_user = $this->db->query("SELECT * FROM `ef_user` WHERE `email_address` = " . $this->db->escape($post['email_address']) . " AND `password` = " . $this->db->escape(md5($post['password'])) . " AND `user_type` IN ('admin', 'staff') LIMIT 1");
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
			$this->session->set_userdata('login_admin', $login_data);
			
			return true;
		}
		
		set_message("Wrong email or password", "danger");
		return false;
	}
	
	function forgot_password($post = array()){
		if(is_array($post) && sizeof($post) > 0 && isset($post['email_address'])){
			$error_msg = array();
			if($post['email_address'] == ""){
				$error_msg['email_address'] = "Please enter your email address";
			}
			if(sizeof($error_msg) > 0){
				set_message(implode(" | ", $error_msg), "danger");
				return $error_msg;
			}
			
			$query_chk = $this->db->query("SELECT * FROM `ef_user` WHERE `email_address` = " . $this->db->escape($post['email_address']) . " AND `user_type` != 'user'");
			if($query_chk->num_rows() > 0){
				$row_chk = $query_chk->row();
				
				//Generate random password
				$plain_pwd = uniqid();
				$this->db->where('user_id', $row_chk->user_id);
				$this->db->update('ef_user', array('password' => md5($plain_pwd)));
				set_message("Password has been reset. Please check your email inbox to continue.", "success");
				
				//Sending email to admin/staff
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