<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller{
	public function reservation_form(){
		$data['meta_title'] = "Reservation Form";
		
		$this->load->view('user/reservation_form_v', $data);
	}
}
