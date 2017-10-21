<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
	public function futsal_court(){
		$data['meta_title'] = "Futsal Court";
		$data['tile'] = "ABC";
		
		$this->load->view('user/futsal_court_v', $data);
	}
}
