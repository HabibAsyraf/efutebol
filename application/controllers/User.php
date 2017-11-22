<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!in_array(strtolower($this->uri->segment(2)), array('logout', 'check_login')) && isset($this->session->userdata('login_user')['logged_in']) && $this->session->userdata('login_user')['logged_in'] == TRUE){
			redirect('');
		}
		
		$this->load->model('user/user_m');
		$this->load->model('user/login_m');
	}
	
	public function registration_form(){
		if($_POST){
			$result = $this->user_m->save_registration($this->input->post());
			if($result === true){
				redirect('user/registration_form', 'refresh');
			}
			
			$data['user_reg'] = (object)$_POST;
			$data['error_field'] = $result;
		}
		
		$data['meta_title'] = "Sign Up";
		$data['meta_tab_title'] = "Sign Up";
		$data['controller'] = "user";
		$data['method'] = "registration_form";
		
		$this->load->view('user/v2/registration_form_v', $data);
	}
	
	public function login_form($info = ""){
		if($_POST){
			$result = $this->login_m->logging_in($this->input->post());
			if($result === true){
				$back_info = base64url_decode($info);
				redirect($back_info);
			}
			
			$data['user_log'] = (object)$_POST;
			$data['error_field'] = $result;
		}
		
		$data['meta_title'] = "Log In";
		$data['meta_tab_title'] = "Log In";
		$data['controller'] = "user";
		$data['method'] = "login_form";
		
		$this->load->view('user/v2/login_form_v', $data);
	}
	
	public function logout(){
		$this->session->sess_destroy();
		
		redirect('home');
	}
	
	public function check_login(){
		if(!$this->input->is_ajax_request()){
			exit("Please no direct access.");
		}
		
		$data = array('result' => 'success');
		if(!isset($this->session->userdata('login_user')['logged_in']) || $this->session->userdata('login_user')['logged_in'] == FALSE){
			set_message("Please login first before making any reservation.");
			$data = array(
				'result' => 'failed',
				'back_to' => base64url_encode('reservation/reservation_form')
			);
		}
		
		echo json_encode($data);
		return;
	}
}
