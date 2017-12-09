<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function index(){
		$data['meta_title'] = "Home"; // Tajuk Tab
		$data['controller'] = "home"; // So in nav menu akan menyala (view/user/v2/home_v.php)
		$data['method'] = "index";  // Saje letak. Kalau kalau ade sub menu (Dropdown)
		
		$this->load->view('user/v2/home_v', $data); // home_v.php sebenarnya
	}
}
