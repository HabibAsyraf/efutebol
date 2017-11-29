<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($this->session->userdata('login_admin')['logged_in']) || !$this->session->userdata('login_admin')['logged_in']){
			redirect('admin/login/logout');
		}
	}
	
	public function index(){
		$data['meta_title'] = "Admin Dashboard";
		$data['meta_tab_title'] = "Admin Dashboard";
		$data['controller'] = "dashboard";
		$data['method'] = "index";
		
		$this->load->view('admin/dashboard_v', $data);
	}
}
