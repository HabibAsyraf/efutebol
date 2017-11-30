<?php
class User_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function listing($where = ""){
		$order_by = "ORDER BY `user_id` DESC";
		
		$pag["base_url"] = base_url() . "admin/user/listing/".$this->uri->segment(4);
		$pag["per_page"] = 15;
		$pag["uri_segment"] = 5;
		$start_form  = $this->uri->segment(5);
		$limit = " LIMIT " . $pag["per_page"];
		if(is_numeric($start_form) && $start_form > 1) 
			$limit = " LIMIT " . $start_form . ", " . $pag["per_page"];
		
		$sql_count = "SELECT COUNT(`user_id`) AS total FROM `ef_user` " . $where;
		$pag["total_rows"] = $this->db->query($sql_count)->row()->total;
		$this->pagination->initialize($pag);
		
		$query = $this->db->query("SELECT * FROM `ef_user` " . $where . " " . $order_by . " " . $limit);
		return $query;
	}
	
	function search($search_data = array()){
		$where = "";
		if(is_array($search_data) && sizeof($search_data) > 0){
			if($search_data['search_user'] != ""){
				$where .= ($where == "" ? " WHERE " : " AND ") . " `name` = " . $this->db->escape($search_data['search_user']);
			}
		}
		
		return $where;
	}
	
	function delete_user($delete_data = array()){
		if(is_array($delete_data) && sizeof($delete_data) > 0 && isset($delete_data['user_id'])){
			
			if($this->session->userdata('login_admin')['user_id'] == $delete_data['user_id']){
				set_message("Cannot delete our own account.", "danger");
				return false;
			}
			else{
				$this->db->query("DELETE FROM `ef_user` WHERE `user_id` = " . $this->db->escape($delete_data['user_id']));
				
				set_message("Record has been deleted.", "success");
				return true;
			}
		}
		
		set_message("Invalid request. Please try again later.", "danger");
		return false;
	}
	
	function get_single_user($user_id = 0){
		$query_user = $this->db->query("SELECT * FROM `ef_user` WHERE `user_id` = " . $this->db->escape($user_id));
		if($query_user->num_rows() > 0){
			return $query_user->row();
		}
		
		return false;
	}
	
	function save_user($post = array()){
		if(is_array($post) && sizeof($post) > 0){
			$db_user = array(
				'name' => trim($post['name']),
				'contact_no' => trim($post['contact_no']),
				'email_address' => trim($post['email_address']),
				'user_type' => trim($post['user_type'])
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
					$sql_chk = "SELECT * FROM `ef_user` WHERE `email_address` = " . $this->db->escape($db_user['email_address']) . ($post['user_id'] != "" ? " AND `user_id` != " . $this->db->escape($post['user_id']) : "") . " LIMIT 1";
					$query_chk = $this->db->query($sql_chk);
					if($query_chk->num_rows() > 0) {
						$error_msg['email_address'] = "Email address `" . $db_user['email_address'] . "` is already exists. Please try another email";
					}
				}
			}
			
			if($db_user['user_type'] == ""){
				$error_msg['user_type'] = "Please choose User Type";
			}
			
			if(sizeof($error_msg) > 0){
				set_message(implode(" | ", $error_msg), "danger");
				return $error_msg;
			}
			
			if($post['user_id'] == ""){
				$db_user['password'] = md5($post['email_address']);
				$this->db->insert('ef_user', $db_user);
				$user_id = $this->db->insert_id();
			}
			else{
				$this->db->where('user_id', $post['user_id']);
				$this->db->update('ef_user', $db_user);
				$user_id = $post['user_id'];
			}
			
			set_message("Record has been saved.", "success");
			redirect('admin/user/form/' . base64url_encode($user_id));
			return true;
		}
		
		set_message("Please try again later.", "danger");
		return false;
	}
}

?>