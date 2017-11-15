<?php
class Booking_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function save_booking($post = array()){
		$db_booking = array(
			'name' => $this->session->userdata('login_user')['name'],
			'contact_no' => $this->session->userdata('login_user')['contact_no'],
			'booking_time' => $post['booking_time'],
			'booking_date' => datepicker2mysql($post['booking_date']),
			'court_no' => $post['court_no'],
			'payment_method' => $post['payment_method']
		);
		$this->db->insert('ef_booking', $db_booking);
		
		$receipt_data = $db_booking;
		$receipt_data['booking_id'] = $this->db->insert_id();
		
		return $receipt_data;
	}
}

?>