<?php
class Login_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function logging_in($post = array()){
		$query_user = $this->db->query("SELECT * FROM `ef_user` WHERE `email_address` = " . $this->db->escape($post['email_address']) . " AND `password` = " . $this->db->escape(md5($post['password'])) . " LIMIT 1");
		if($query_user->num_rows() > 0){
			$row_user = $query_user->row();
			$login_data = array(
				'name' => $row_user->name,
				'email_address' => $row_user->email_address,
				'contact_no' => $row_user->contact_no,
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