<?php
class Reservation_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function check_availability($post = array()){
		$result = array('result' => "failed", 'message' => 'Error has been occured. Please try again later.');
		if(is_array($post) && sizeof($post) > 0){
			$end_time = date("H:i", strtotime($post['booking_time'] . ' +'.$post['duration'] . ' hour'));
			if((strtotime($post['booking_time']) >= strtotime("03:00") && strtotime($post['booking_time']) < strtotime("08:00")) || 
			(strtotime($end_time) > strtotime("03:00") && strtotime($end_time) < strtotime("08:00"))){
				$result['message'] = "Court is unavailable. Operation hour is from 8:00 AM until 3:00 AM";
			}
			else{
				$booking_date_time = date("Y-m-d", strtotime(datepicker2mysql($post['booking_date']))) . ' ' . $post['booking_time'].':00';
				$booking_date_time_end = date("Y-m-d H:i:s", strtotime($booking_date_time . ' +'.$post['duration'] . ' hour'));
				
				$query_chk = $this->db->query("SELECT * FROM `ef_booking` "
											. "WHERE `court_id` = " . $this->db->escape($post['court_id']) . " "
											. "AND ((`booking_date_time` <= " . $this->db->escape($booking_date_time) . " AND `booking_date_time_end` > " . $this->db->escape($booking_date_time) . ") "
											. "OR (`booking_date_time` < " . $this->db->escape($booking_date_time_end) . " AND `booking_date_time_end` >= " . $this->db->escape($booking_date_time_end) . ")) "
											. "AND `status` IN ('D','B')");
				if($query_chk->num_rows() > 0){
					$result['message'] = "We're sorry, court is unavailable (Already reserved). Please check on another court.";
				}
				else{
					$row_court = $this->court_m->get_single($post['court_id']);
					$rate_per_hour = 80.00;
					$result['booking_details'] =  array(
						'booking_date_time_view' => date("d/m/Y g:i A", strtotime($booking_date_time)),
						'booking_date_time_end_view' => date("d/m/Y g:i A", strtotime($booking_date_time . ' +'.$post['duration'] . ' hour')),
						'booking_date_time' => date("Y-m-d H:i:s", strtotime($booking_date_time)),
						'booking_date_time_end' => date("Y-m-d H:i:s", strtotime($booking_date_time . ' +'.$post['duration'] . ' hour')),
						'date' => date("l, jS F Y", strtotime($booking_date_time)),
						'start_end' => date("g:i A", strtotime($booking_date_time)) . ' - ' . date("g:i A", strtotime($booking_date_time_end)),
						'duration_view' => $post['duration'] . ' ' . ($post['duration'] > 1 ? 'Hours' : 'Hour'),
						'duration' => $post['duration'],
						'amount' => number_format($rate_per_hour * $post['duration'], 2, ".", ""),
						'court_id' => $post['court_id'],
						'court_name' => isset($row_court) !== false ? $row_court->court_name : $post['court_id']
					);
					$result['encrypted_booking'] = encrypt_data($result['booking_details']);
					$result['result'] =  "success";
				}
			}
		}
		
		return $result;
	}
	
	function confirm_reservation($post = array()){
		$result = array('result' => "failed", 'message' => 'Error has been occured. Please try again later.');
		if(is_array($post) && sizeof($post) > 0){
			$booking_data = decrypt_data($post['booking_data']);
			$db_reservation = array(
				'booking_date' => $booking_data['date'],
				'booking_time' => $booking_data['start_end'],
				'booking_date_time' => $booking_data['booking_date_time'],
				'booking_date_time_end' => $booking_data['booking_date_time_end'],
				'duration' => $booking_data['duration'],
				'amount' => $booking_data['amount'],
				'court_id' => $booking_data['court_id'],
				'court_name' => $booking_data['court_name'],
				'payment_method' => $post['payment_method'],
				'name' => $this->session->userdata('login_user')['name'],
				'email_address' => $this->session->userdata('login_user')['email_address'],
				'contact_no' => $this->session->userdata('login_user')['contact_no'],
				'status' => 'B',
				'created_by' => $this->session->userdata('login_user')['user_id'],
				'created_date' => date("Y-m-d H:i:s")
			);
			$this->db->insert('ef_booking', $db_reservation);
			$result['booking_id'] = base64url_encode($this->db->insert_id());
			$result['result'] = "success";
			$result['message'] = "Reservation has been confirmed";
			
			set_message("Booking has been confirmed. Please show this receipt at the counter. See you soon.", "success");
		}
		
		return $result;
	}
	
	function get_single($booking_id = 0){
		if(is_numeric($booking_id) && $booking_id > 0){
			$query_booking = $this->db->query("SELECT * FROM `ef_booking` WHERE `booking_id` = " . $this->db->escape($booking_id));
			return $query_booking->num_rows() > 0 ? $query_booking->row() : false;
		}
		
		return false;
	}
}

?>