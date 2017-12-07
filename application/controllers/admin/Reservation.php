<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller{
	public $status_desc = array('B' => 'Booked', 'D' => 'Done', 'C' => 'Cancelled'); 
	public $status_color = array('B' => 'font-blue', 'D' => 'font-green-jungle', 'C' => 'font-red-thunderbird'); 
	function __construct(){
		parent::__construct();
		if(!isset($this->session->userdata('login_admin')['logged_in']) || !$this->session->userdata('login_admin')['logged_in']){
			redirect('admin/login/logout');
		}
		
		$this->load->model('admin/reservation_m');
		$this->load->model('user/court_m');
		
		if(strtolower($this->uri->segment(3)) == "listing" && $_POST){
			$encrypted_data = base64url_encode(serialize($this->input->post()));
			redirect('admin/reservation/listing/'.$encrypted_data);
		}
	}
	
	public function index(){
		redirect('admin/reservation/listing');
	}
	
	public function listing($encrypted_data = ""){
		$where = "";
		$search_data = array();
		if($encrypted_data == ""){
			$encrypted_data = base64url_encode(serialize(array()));
			redirect('admin/reservation/listing/'.$encrypted_data);
		}
		else{
			$search_data = unserialize(base64url_decode($encrypted_data));
			// ad($search_data); exit();
			if(is_array($search_data)){
				$where = $this->reservation_m->search($search_data);
			}
			else{
				$encrypted_data = base64url_encode(serialize(array()));
				redirect('admin/reservation/listing/'.$encrypted_data);
			}
		}
		
		$data['query_booking'] = $this->reservation_m->listing($where);
		$data['pagination'] = $this->pagination->create_links();
		$data['search_data'] = $search_data;
		$data['status_desc'] = $this->status_desc;
		$data['status_color'] = $this->status_color;
		
		$data['meta_title'] = "Manage Reservation | Reservation List";
		$data['meta_tab_title'] = "Manage Reservation | Reservation List";
		$data['controller'] = "reservation";
		$data['method'] = "listing";
		
		$this->load->view('admin/reservation_listing_v', $data);
	}
	
	public function cancel($encrypted_data = ""){
		if(trim($encrypted_data) != ""){
			$delete_data = unserialize(base64url_decode($encrypted_data));
			$delete_data = gettype($delete_data) == "object" ? (array)$delete_data : array();
			
			$this->reservation_m->cancel_reservation($delete_data);
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		set_message("Please No Direct Access", "danger");
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function complete_reservation($encrypted_data = ""){
		if(trim($encrypted_data) != ""){
			$delete_data = unserialize(base64url_decode($encrypted_data));
			$delete_data = gettype($delete_data) == "object" ? (array)$delete_data : array();
			
			$this->reservation_m->complete_reservation($delete_data);
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		set_message("Please No Direct Access", "danger");
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function form(){
		$data['query_court'] = $this->court_m->get_all();
		$data['meta_title'] = "Reservation Form";
		$data['meta_tab_title'] = "Reservation Form";
		$data['controller'] = "reservation";
		$data['method'] = "form";
		
		$this->load->view('admin/reservation_form_v', $data);
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
}
