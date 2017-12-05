<?php
class Reservation_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function listing($where = ""){
		$order_by = "ORDER BY `booking_date_time` DESC";
		
		$pag["base_url"] = base_url() . "admin/reservation/listing/".$this->uri->segment(4);
		$pag["per_page"] = 15;
		$pag["uri_segment"] = 5;
		$start_form  = $this->uri->segment(5);
		$limit = " LIMIT " . $pag["per_page"];
		if(is_numeric($start_form) && $start_form > 1) 
			$limit = " LIMIT " . $start_form . ", " . $pag["per_page"];
		
		$sql_count = "SELECT COUNT(`booking_id`) AS total FROM `ef_booking` " . $where;
		$pag["total_rows"] = $this->db->query($sql_count)->row()->total;
		$this->pagination->initialize($pag);
		
		$query = $this->db->query("SELECT * FROM `ef_booking` " . $where . " " . $order_by . " " . $limit);
		return $query;
	}
	
	function search($search_data = array()){
		$where = "";
		if(is_array($search_data) && sizeof($search_data) > 0){
			if($search_data['search_booking'] != ""){
				$where .= ($where == "" ? " WHERE " : " AND ") . " `name` LIKE " . $this->db->escape("%".$search_data['search_booking']."%") . " OR `booking_id` = " . $this->db->escape($search_data['search_booking']);
			}
		}
		
		return $where;
	}
	
	function cancel_reservation($delete_data = array()){
		if(is_array($delete_data) && sizeof($delete_data) > 0 && isset($delete_data['booking_id'])){
			$this->db->where('booking_id', $delete_data['booking_id']);
			$this->db->update('ef_booking', array('status' => 'C', 'action_by' => $this->session->userdata('login_admin')['user_id']));
			
			set_message("Reservation has been cancelled.", "success");
			return true;
		}
		
		set_message("Invalid request. Please try again later.", "danger");
		return false;
	}
	
	function complete_reservation($delete_data = array()){
		if(is_array($delete_data) && sizeof($delete_data) > 0 && isset($delete_data['booking_id'])){
			$this->db->where('booking_id', $delete_data['booking_id']);
			$this->db->update('ef_booking', array('status' => 'D', 'action_by' => $this->session->userdata('login_admin')['user_id']));
			
			set_message("Reservation has been set as done.", "success");
			return true;
		}
		
		set_message("Invalid request. Please try again later.", "danger");
		return false;
	}
	
	function check_availability($post = array()){
		$result = array('result' => "failed", 'message' => 'Error has been occured. Please try again later.');
		if(is_array($post) && sizeof($post) > 0){
			$end_time = date("H:i", strtotime($post['booking_time'] . ' +'.$post['duration'] . ' hour'));
			$booking_date_time = date("Y-m-d", strtotime(datepicker2mysql($post['booking_date']))) . ' ' . $post['booking_time'].':00';
			$booking_date_time_end = date("Y-m-d H:i:s", strtotime($booking_date_time . ' +'.$post['duration'] . ' hour'));
			
			if((strtotime($post['booking_time']) >= strtotime("03:00") && strtotime($post['booking_time']) < strtotime("08:00")) || 
			(strtotime($end_time) > strtotime("03:00") && strtotime($end_time) < strtotime("08:00"))){
				$result['message'] = "Court is unavailable. Operation hour is from 8:00 AM until 3:00 AM";
			}
			else if(strtotime($booking_date_time) < strtotime(date("Y-m-d H:i:s"))){
				$result['message'] = "The time is already passed. Please choose another time.";
			}
			else{
				$query_chk = $this->db->query("SELECT * FROM `ef_booking` "
											. "WHERE `court_id` = " . $this->db->escape($post['court_id']) . " "
											. "AND ((`booking_date_time` <= " . $this->db->escape($booking_date_time) . " AND `booking_date_time_end` > " . $this->db->escape($booking_date_time) . ") "
											. "OR (`booking_date_time` < " . $this->db->escape($booking_date_time_end) . " AND `booking_date_time_end` >= " . $this->db->escape($booking_date_time_end) . ")) "
											. "AND `status` IN ('D','B')");
				if($query_chk->num_rows() > 0){
					$result['message'] = "We're sorry, court is unavailable (Already reserved). Please check on another court/date/time.";
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
				'name' => trim($post['customer_name']),
				'contact_no' => trim($post['contact_no']),
				'payment_method' => $post['payment_method'],
				'status' => 'B',
				'booking_method' => 'Walk In',
				'created_by' => $this->session->userdata('login_admin')['user_id'],
				'created_date' => date("Y-m-d H:i:s")
			);
			
			#Begin Validate Customer name and Contact No
			$error_msg = array();
			if($db_reservation['name'] == ""){
				$error_msg['name'] = "Please enter your customer name";
			}
			
			if($db_reservation['contact_no'] == ""){
				$error_msg['contact_no'] = "Please enter Contact No";
			}
			else if(!filter_phone($db_reservation['contact_no'])){
				$error_msg['contact_no'] = "Invalid Contact No.";
			}
			
			if(sizeof($error_msg) > 0){
				$result['message'] = implode(" | ", $error_msg);
				return $result;
			}
			#End Validation
			
			$this->db->insert('ef_booking', $db_reservation);
			$result['booking_id'] = $this->db->insert_id();
			$result['result'] = "success";
			$result['message'] = "Reservation has been confirmed";
			
			#Sending email to admin
			$email_data['email_address'] = 'helloefutebol@gmail.com';
			$email_data['subject'] = 'Reservation (Walk In) has been made (Reservation ID: ' . str_pad($result['booking_id'], 4, "0", STR_PAD_LEFT) . ')';
			$email_data['body'] = 'Dear eFutebol,<br/><br/>'.
								  'Walk In Reservation has been made by ' . $db_reservation['name'] . '.<br/><br/>'.
								  'See Details: <a href="'.base_url().'admin/reservation">'.base_url().'admin/reservation</a>';
			sendmail($email_data);
			
			set_message("Booking has been confirmed (ID: " . str_pad($result['booking_id'], 4, "0", STR_PAD_LEFT) . ").", "success");
		}
		
		return $result;
	}
}

?>