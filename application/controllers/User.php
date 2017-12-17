<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!in_array(strtolower($this->uri->segment(2)), array('logout', 'check_login', 'change_password')) && isset($this->session->userdata('login_user')['logged_in']) && $this->session->userdata('login_user')['logged_in'] == TRUE){
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
	//login
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
	
	public function forgot_password(){
		if($_POST){
			$result = $this->user_m->reset_password($this->input->post());
			if($result === true){
				redirect('user/forgot_password');
			}
			
			$data['user_reg'] = (object)$_POST;
			$data['error_field'] = $result;
		}
		
		$data['meta_title'] = "Forgot Password";
		$data['meta_tab_title'] = "Forgot Password";
		$data['controller'] = "user";
		$data['method'] = "forgot_password";
		
		$this->load->view('user/v2/reset_password_form_v', $data);
	}
	
	public function change_password(){
		if($_POST){
			$result = $this->user_m->change_password($this->input->post());
			if($result === true){
				redirect('user/change_password');
			}
			
			$data['user_reg'] = (object)$_POST;
			$data['error_field'] = $result;
		}
		
		$data['meta_title'] = "Change Password";
		$data['meta_tab_title'] = "Change Password";
		$data['controller'] = "user";
		$data['method'] = "change_password";
		
		$this->load->view('user/v2/change_password_form_v', $data);
	}
	
	public function logout(){
		$this->session->unset_userdata('login_user');
		
		redirect('home');
	}
	
	//ni background process
	public function check_login(){
		if(!$this->input->is_ajax_request()){ //1) check request ni daripada ajax ke tak
			exit("Please no direct access."); //nak prevent dari orang direct access
		}
		
		$data = array('result' => 'success'); // data yang di encode dalam bentuk json
		if(!isset($this->session->userdata('login_user')['logged_in']) || $this->session->userdata('login_user')['logged_in'] == FALSE){  //check session login ke tak
			set_message("Please login first before making any reservation.");
			$data = array(
				'result' => 'failed',
				'back_to' => base64url_encode('reservation/reservation_form')
			);
		}
		
		echo json_encode($data); 
		return; //pergi view/v2/reservation/reservation_form
	}
}
