<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!in_array(strtolower($this->uri->segment(3)), array('logout')) && isset($this->session->userdata('login_admin')['logged_in']) && $this->session->userdata('login_admin')['logged_in'] == TRUE){
			redirect('admin/dashboard');
		}
		
		$this->load->model('admin/login_m');
	}
	
	public function index(){
		if($_POST){
			$result = $this->login_m->logging_in($this->input->post());
			if($result === true){
				redirect('admin/dashboard');
			}
			
			$data['user_log'] = (object)$_POST;
			$data['error_field'] = $result;
		}
		
		$data['meta_title'] = "Administrator Login";
		$data['meta_tab_title'] = "Administrator Login";
		$data['controller'] = "login";
		$data['method'] = "index";
		
		$this->load->view('admin/login_form_v', $data);
	}
	
	public function forgot_password(){
		if($_POST){
			$result = $this->login_m->forgot_password($this->input->post());
			if($result === true){
				redirect('admin/login/forgot_password');
			}
			
			$data['user_log'] = (object)$_POST;
			$data['error_field'] = $result;
		}
		
		$data['meta_title'] = "Administrator Forgot Password";
		$data['meta_tab_title'] = "Administrator Forgot Password";
		$data['controller'] = "login";
		$data['method'] = "forgot_password";
		
		$this->load->view('admin/forgot_password_form_v', $data);
	}
	
	public function logout(){
		$this->session->unset_userdata('login_admin');
		
		redirect('admin');
	}
}
