<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function index(){
		$data['meta_title'] = "home";
		
		$this->load->view('user/homepage_v', $data);
	}
}
