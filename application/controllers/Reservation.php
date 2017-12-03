<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('user/booking_m');
		$this->load->model('user/court_m');
		$this->load->model('user/reservation_m');
	}
	
	public function reservation_form(){
		if($_POST){
			if(isset($this->session->userdata('login_user')['logged_in']) && $this->session->userdata('login_user')['logged_in'] == TRUE){
				$reservation_data = encrypt_data($_POST);
				redirect('reservation/booking_form/' . $reservation_data);
			}
			else{
				set_message("Please log in first");
				redirect('user/login_form');
			}
		}
		
		$data['query_court'] = $this->court_m->get_all();
		
		$data['meta_title'] = "Reservation Form";
		$data['meta_tab_title'] = "Reservation Form";
		$data['controller'] = "reservation";
		$data['method'] = "reservation_form";
		
		$this->load->view('user/v2/reservation_form_v', $data);
	}
	
	public function check_availability(){
		if($this->input->is_ajax_request()){
			$result = $this->reservation_m->check_availability($this->input->post());
			
			echo json_encode($result);
			return;
		}
		
		exit("Please no direct access.");
	}
	
	public function confirm(){
		if($this->input->is_ajax_request()){
			$result = $this->reservation_m->confirm_reservation($this->input->post());
			
			echo json_encode($result);
			return;
		}
		
		exit("Please no direct access.");
	}
	
	public function receipt($info = ""){
		$booking_id = base64url_decode($info);
		$data['row_booking'] = $this->reservation_m->get_single($booking_id);
		
		$data['meta_title'] = "Reservation Receipt";
		$data['meta_tab_title'] = "Reservation Receipt";
		$data['controller'] = "reservation";
		$data['method'] = "receipt";
		
		$this->load->view('user/v2/reservation_receipt_v', $data);
	}
}
