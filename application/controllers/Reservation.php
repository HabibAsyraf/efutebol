<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user/booking_m');
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
		
		$data['meta_title'] = "Reservation Form";
		$data['meta_tab_title'] = "Reservation Form";
		$data['controller'] = "reservation";
		$data['method'] = "reservation_form";
		
		$this->load->view('user/v2/reservation_form_v', $data);
	}
	
	public function booking_form($booking_data = ""){
		if(!isset($this->session->userdata('login_user')['logged_in']) || $this->session->userdata('login_user')['logged_in'] == FALSE){
			set_message("Please log in first");
			redirect('user/login_form');
		}
		
		$booking_data = decrypt_data($booking_data);
		if($booking_data == ""){
			redirect($_SERVER['HTTP_REFERRER']);
		}
		
		if($_POST){
			$receipt_data = $this->booking_m->save_booking($this->input->post());
			redirect('reservation/booking_receipt/' . encrypt_data($receipt_data));
		}
		
		$data['meta_title'] = "Booking Form";
		$data['booking_data'] = $booking_data;
		$this->load->view('user/booking_form_v', $data);
	}
	
	public function booking_receipt($receipt_data = ""){
		if(!isset($this->session->userdata('login_user')['logged_in']) || $this->session->userdata('login_user')['logged_in'] == FALSE){
			set_message("Please log in first");
			redirect('user/login_form');
		}
		
		$receipt_data = decrypt_data($receipt_data);
		if($receipt_data == ""){
			redirect($_SERVER['HTTP_REFERRER']);
		}
		
		$data['meta_title'] = "Booking Receipt";
		$data['receipt_data'] = $receipt_data;
		$this->load->view('user/booking_receipt_v', $data);
	}
}
