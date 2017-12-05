<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($this->session->userdata('login_admin')['logged_in']) || !$this->session->userdata('login_admin')['logged_in']){
			if(!$this->input->is_ajax_request())
				redirect('admin/login/logout');
		}
		
		if(!in_array(strtolower($this->uri->segment(3)), array("check_login", "change_password")) && $this->session->userdata('login_admin')['user_type'] == 'staff'){
			redirect('admin');
		}
		
		$this->load->model('admin/user_m');
		
		if(strtolower($this->uri->segment(3)) == "listing" && $_POST){
			$encrypted_data = base64url_encode(serialize($this->input->post()));
			redirect('admin/user/listing/'.$encrypted_data);
		}
	}
	
	public function index(){
		redirect('admin/user/listing');
	}
	
	public function listing($encrypted_data = ""){
		$where = "";
		$search_data = array();
		if($encrypted_data == ""){
			$encrypted_data = base64url_encode(serialize(array()));
			redirect('admin/user/listing/'.$encrypted_data);
		}
		else{
			$search_data = unserialize(base64url_decode($encrypted_data));
			// ad($search_data); exit();
			if(is_array($search_data)){
				$where = $this->user_m->search($search_data);
			}
			else{
				$encrypted_data = base64url_encode(serialize(array()));
				redirect('admin/user/listing/'.$encrypted_data);
			}
		}
		
		$data['query_user'] = $this->user_m->listing($where);
		$data['pagination'] = $this->pagination->create_links();
		$data['search_data'] = $search_data;
		
		$data['meta_title'] = "Manage User | User List";
		$data['meta_tab_title'] = "Manage User | User List";
		$data['controller'] = "user";
		$data['method'] = "listing";
		
		$this->load->view('admin/user_listing_v', $data);
	}
	
	public function delete_user($encrypted_data = ""){
		if(trim($encrypted_data) != ""){
			$delete_data = unserialize(base64url_decode($encrypted_data));
			$delete_data = gettype($delete_data) == "object" ? (array)$delete_data : array();
			
			$this->user_m->delete_user($delete_data);
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		set_message("Please No Direct Access", "danger");
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function form($info = ""){
		$user_id = base64url_decode($info);
		if($info != "" && is_numeric($user_id) && $user_id > 0){
			$data['row_user'] = $this->user_m->get_single_user($user_id);
		}
		else if($info != ""){
			set_message("Invalid request. Please try again later.", "danger");
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		if($_POST){
			$result = $this->user_m->save_user($this->input->post());
			$data['row_user'] = (object)$_POST;
			$data['error_field'] = $result;
		}
		// ad($data['row_user']); exit();
		$data['meta_title'] = "User Form";
		$data['meta_tab_title'] = "User Form";
		$data['controller'] = "user";
		$data['method'] = "form";
		
		$this->load->view('admin/user_form_v', $data);
	}
	
	public function check_login(){
		if(!$this->input->is_ajax_request()){
			exit("Please no direct access.");
		}
		
		$data = array('result' => 'success');
		if(!isset($this->session->userdata('login_admin')['logged_in']) || $this->session->userdata('login_admin')['logged_in'] == FALSE){
			set_message("Seesion has been expired", "danger");
			$data = array('result' => 'failed');
		}
		
		echo json_encode($data);
		return;
	}
	
	public function change_password(){
		if($_POST){
			$result = $this->user_m->change_password($this->input->post());
			if($result === true){
				redirect('admin/user/change_password');
			}
			
			$data['user_reg'] = (object)$_POST;
			$data['error_field'] = $result;
		}
		
		$data['meta_title'] = "Change Password";
		$data['meta_tab_title'] = "Change Password";
		$data['controller'] = "user";
		$data['method'] = "change_password";
		
		$this->load->view('admin/change_password_form_v', $data);
	}
}
