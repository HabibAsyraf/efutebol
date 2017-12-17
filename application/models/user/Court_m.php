<?php
class Court_m extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	//sini ambik senarai court yang ada dalam database
	function get_all($return_type = "query"){
		$query_court = $this->db->query("SELECT * FROM `ef_court` ORDER BY `court_name` ASC");
		if($return_type == "array_list"){
			$arr_court = array();
			if($query_court->num_rows() > 0){
				foreach($query_court->result() as $row_court){
					$arr_court[$row_court->court_id] = $row_court->court_name;
				}
			}
			
			return $arr_court;
		}
		else
			return $query_court;
	}
	
	function get_single($court_id = 0, $return_type = "row"){
		$query_court = $this->db->query("SELECT * FROM `ef_court` WHERE `court_id` = " . $this->db->escape($court_id));
		if($query_court->num_rows() > 0){
			if($return_type == "row_array")
				return $query_court->row_array();
			else
				return $query_court->row();
		}
		
		return false;
	}
}

?>