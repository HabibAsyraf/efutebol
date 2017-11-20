<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function index(){
		$data['meta_title'] = "Home";
		$data['meta_tab_title'] = "Home";
		$data['controller'] = "home";
		$data['method'] = "index";
		
		$this->load->view('user/v2/home_v', $data);
		// $this->load->view('user/homepage_v', $data);
	}
}
