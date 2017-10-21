<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->uri->segment(2) != 'logout' && isset($this->session->userdata('login_user')['logged_in']) && $this->session->userdata('login_user')['logged_in'] == TRUE){
			redirect('');
		}
		
		$this->load->model('user/user_m');
		$this->load->model('user/login_m');
	}
	
	public function register_form(){
		if($_POST){
			$result = $this->user_m->save_registration($this->input->post());
			if($result !== false){
				redirect('user/register_form');
			}
			
			$data = $_POST;
		}
		
		$data['meta_title'] = "Sign Up";
		
		$this->load->view('user/register_form_v', $data);
	}
	
	public function login_form(){
		if($_POST){
			$result = $this->login_m->logging_in($this->input->post());
			if($result !== false){
				redirect('home');
			}
			
			$data = $_POST;
		}
		
		$data['meta_title'] = "Login";
		
		$this->load->view('user/login_form_v', $data);
	}
	
	public function logout(){
		$this->session->sess_destroy();
		
		redirect('home');
	}
}
