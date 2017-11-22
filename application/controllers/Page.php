<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
	public function futsal_court(){
		$data['meta_title'] = "Futsal Counrt Information";
		$data['meta_tab_title'] = "Futsal Counrt Information";
		$data['controller'] = "page";
		$data['method'] = "futsal_court";
		
		$this->load->view('user/v2/page_court_v', $data);
	}
	
	public function contact_us(){
		$data['meta_title'] = "Contact Us Information";
		$data['meta_tab_title'] = "Contact Us Information";
		$data['controller'] = "page";
		$data['method'] = "contact_us";
		
		$this->load->view('user/v2/page_contact_us_v', $data);
	}
	
	public function events(){
		$data['meta_title'] = "Events Information";
		$data['meta_tab_title'] = "Events Information";
		$data['controller'] = "page";
		$data['method'] = "events";
		
		$this->load->view('user/v2/page_events_v', $data);
	}
}
