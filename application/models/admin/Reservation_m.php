<?php
class Reservation_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function listing($where = ""){
		$order_by = "ORDER BY `booking_id` DESC";
		
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
}

?>