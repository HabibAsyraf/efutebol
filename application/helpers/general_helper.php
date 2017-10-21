<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
function js_version($to_echo = false){
	$version = date("YmdHis");
	if($to_echo){
		echo $version;
		return;
	}
	
	return $version;
}
//AD = Array Debug. 
function ad($data, $write = false){
	if($write) {
		ob_start();
		print_r($data);
		$output = ob_get_contents();
		ob_end_clean();
		
		$myFile = "C:/testFile.txt";
		$fh = fopen($myFile, 'a') or die("can't open file");
		
		$date = date("d-m-Y H:i:s") . "\n";
		fwrite($fh, $date);
		fwrite($fh, $output);
		fclose($fh);
	}
	else {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
}

/**
 * Set message for display to browser. Useful for confirming certain process.
 *
 * @access	public
 * @param	string
 * @return	string
 */
function set_message($feedback, $type = 'danger')
{
	#save notice.
	#Message Type: error, info
	
	$obj =& get_instance();
	$obj->session->set_userdata('system-message', $feedback);
	$obj->session->set_userdata('message-type', $type);
}

/**
 * Display message to browser.
 *
 * @access	public
 * @param	string
 * @return	string
 */
function get_message($show = true, $alert_form = true){
	$obj =& get_instance();
	//Display notice.
	if($obj->session->userdata('system-message') != ''){
		$msg = $obj->session->userdata('system-message');
		// $alert_message =  '<div class="alert blink_me alert-' . $obj->session->userdata('message-type') . ' alert-dismissable">' . $msg . ' <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button></div>';
		if($obj->session->userdata('message-type') == "success")
			$alert_message =  '<div style="color: green; font-weight: bold;" class="alert blink_me alert-' . $obj->session->userdata('message-type') . ' alert-dismissable">' . $msg . '</div>';
		else if($obj->session->userdata('message-type') == "danger")
			$alert_message =  '<div style="color: red; font-weight: bold;" class="alert blink_me alert-' . $obj->session->userdata('message-type') . ' alert-dismissable">' . $msg . '</div>';
		
		$obj->session->unset_userdata('system-message');
		$obj->session->unset_userdata('message-type');
		
		if($show && $alert_form){
			echo $alert_message;
		}else if(!$show && $alert_form){
			return $alert_message;
		}else if($show && !$alert_form){
			echo $msg;
		}else if(!$show && !$alert_form){
			return $msg;
		}
	}
}

function get_message_fontend(){
	$obj =& get_instance();
	//Display notice.
	$msg = array(
		'message' => "",
		'type' => "danger"
	);
	
	if($obj->session->userdata('system-message') != ''){
		$msg['message'] = $obj->session->userdata('system-message');
		$msg['type'] = $obj->session->userdata('message-type');
		
		$obj->session->unset_userdata('system-message');
		$obj->session->unset_userdata('message-type');
	}
	
	return $msg;
}

// Admin login verification 
function admin_verified($req_type = ""){
	$CI =& get_instance();
	$CI->load->model("admin/admin_account_m");
	if($CI->session->has_userdata("login_admin_id") && $CI->session->userdata("admin_logged_in") == true){
		if(!$CI->admin_account_m->status_verification($CI->session->userdata("login_admin_id"))){
			set_message("Access has been revoked. Please contact the administrator.");
		}
		else
			return true;
	}
	
	if($req_type == "html"){
		echo "session_expired"; exit();
	}
	else if($req_type == "json"){
		echo json_encode(array("result" => "session_expired")); exit();
	}
	else{
		redirect('admin/login/errorLogout');
	}
}
function admin_unverified() {
	$CI =& get_instance();
	if($CI->session->has_userdata("login_admin_id") && $CI->session->userdata("admin_logged_in") == true && $CI->uri->segment(3) != "errorLogout"){
		redirect('admin/dashboard');
	}
	
	return true;
}

// Merchant login verification
function merchant_verified($req_type = ""){
	$CI =& get_instance();
	$CI->load->model("merchant/merchant_admin_m");
	if($CI->session->has_userdata("login_merchant_admin_id") && $CI->session->userdata("merchant_logged_in") == true){
		if(!$CI->merchant_admin_m->status_verification($CI->session->userdata("login_merchant_admin_id"))){
			set_message("Access has been revoked. Please contact the administrator.");
		}
		else
			return true;
	}
	
	if($req_type == "html"){
		echo "session_expired"; exit();
	}
	else if($req_type == "json"){
		echo json_encode(array("result" => "session_expired")); exit();
	}
	else{
		redirect('merchant/login/errorLogout');
	}
}
function merchant_unverified() {
	$CI =& get_instance();
	if($CI->session->has_userdata("login_merchant_admin_id") && $CI->session->userdata("merchant_logged_in") == true && $CI->uri->segment(3) != "errorLogout"){
		redirect('merchant/dashboard');
	}
	
	return true;
}

/**
 * Use for Audit Trail
 */
function audit_trail($sql = null, $filename = null, $function = null, $comment = null){
	$CI =& get_instance();
	
	$sql = $CI->db->escape($sql);
	$filename = $CI->db->escape($filename);
	$function = $CI->db->escape($function);
	$comment = $CI->db->escape($comment);
	$ip_address = $CI->db->escape($_SERVER['REMOTE_ADDR']);
	$username = $CI->db->escape($CI->session->userdata('username'));
	
	$sql = "INSERT INTO wsa_audit_trail SET `sql_str` = $sql, `filename` = $filename, `function` = $function, `comment` = $comment, `ip_address` = $ip_address, `username` = $username, insert_date = NOW()";
	$query = $CI->db->query($sql);
	
	return false;
}

function datepicker2mysql($js_date = ""){
	$CI =& get_instance();
	
	$tmp_date = explode("/", $js_date);
	if(sizeof($tmp_date) != 3){
		return "0000-00-00";
	}
	$sql_date = $tmp_date[2] . "-" . $tmp_date[1] . "-" . $tmp_date[0];
	
	return $sql_date;
}

function queue_email($to, $subject, $body, $login_type = "login_admin_id", $attachment_link = array(), $name = array(), $attachment_type = array()){
	$CI =& get_instance();
	$db_queue_email = array(
		'email_to' => $to,
		'subject' => $subject,
		'body' => $body,
		'status' => '1',
		'create_date' => date("Y-m-d H:i:s"),
		'login_type' => $login_type,
	);
	if(in_array($db_queue_email['login_type'], array("login_admin_id", "login_merchant_id", "login_user_id"))){
		$db_queue_email['create_by'] = $CI->session->has_userdata($db_queue_email['login_type']) ? $CI->session->userdata($db_queue_email['login_type']) : "";
	}
	$CI->db->insert('wsa_email_queue', $db_queue_email);
	$insert_id = $CI->db->insert_id();
	
	foreach($attachment_link as $key => $val){
		$sql = 	"INSERT INTO `wsa_email_queue_attachment` SET `email_id` = " . $CI->db->escape($insert_id) . ", " .
				"`name` = " . $CI->db->escape($name[$key]) . ", " .
				"`attachment_link` = " . $CI->db->escape($val) . ", " .
				"`attachment_type` = " . $CI->db->escape($attachment_type[$key]) . ", " .
				"`create_date` = " .  $CI->db->escape(date("Y-m-d H:i:s")) . "," .
				"`create_by` = " .  $CI->db->escape($CI->session->has_userdata('login_admin_id') ? $CI->session->userdata('login_admin_id') : "");
		
		$CI->db->query($sql);
	}
	
	#Trigger to send email right away
	if (substr(php_uname(), 0, 7) == "Windows") { 
		// $path = str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']);
		// $cmd = $path . "/assets/curl.exe " . base_url() . "mvd/spooler/process_import";
		// pclose(popen("start /B ". $cmd, "r"));
	} 
	else{ 
		$cmd = "curl " . base_url() . "email_manager/send";
		exec($cmd . " > /dev/null &");
	}
}

function sendmail(){
	require 'phpmailer/PHPMailerAutoload.php';
	
	$CI =& get_instance();
	$sql = "SELECT * FROM `wsa_email_queue` WHERE `status` = '1'";
	$query = $CI->db->query($sql);
	
	if($query->num_rows() > 0){
		foreach ($query->result() as $row){
			$id = $row->id;
			$to = $row->email_to;
			$subject = $row->subject;
			$addr = explode(',',$to);
			$mail = new PHPMailer();
			
			foreach ($addr as $ad){
				$mail->AddAddress(trim($ad));
			}
			
			//$mail->SMTPDebug = 4;
			$mail->IsSMTP();
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
			
			$mail->Username   = "hello@westyleasia.com";  // GMAIL username
			$mail->Password   = "hellowsa2017";            // GMAIL password
			
			$mail->From       = "hello@westyleasia.com";
			$mail->FromName   = "We Style Asia";
			
			$mail->Subject    = $subject;
			
			// $mail->Body       = "<div style=\"color: black\">THIS IS A SYSTEM GENERATED NOTIFICATION. PLEASE <b>DO NOT REPLY</b>. <br /><br />" . $row->body . "</div>"; //HTML Body
			$mail->Body       = "<div style=\"color: black\">" . $row->body . "</div>"; //HTML Body
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			$mail->WordWrap   = 50; // set word wrap
			$mail->CharSet    = "UTF-8";
			$mail->MsgHTML($mail->Body);
			
			# Send Attachment
			$sql = "SELECT * FROM `wsa_email_queue_attachment` WHERE `email_id` = " . $CI->db->escape($id);
			$query = $CI->db->query($sql);
			foreach($query->result() as $row_attachment){
				if(file_exists($row_attachment->attachment_link)){
					$file = $row_attachment->attachment_link;
					$binary_content = file_get_contents($file);
					$mail->AddStringAttachment($binary_content, $row_attachment->name . ($row_attachment->attachment_type == "" ? ".pdf" : ""), $encoding = 'base64', $type = $row_attachment->attachment_type != "" ? $row_attachment->attachment_type : 'application/pdf');
				}
			}
			
			$mail->IsHTML(true); // send as HTML
			$result = $mail->Send();
			if(!$result){
				// $mail->ErrorInfo;
			}
			else{
				$sql = "UPDATE `wsa_email_queue` SET status = '0' WHERE `id` = " . $CI->db->escape($id) . " ";
				$query = $CI->db->query($sql);
			}
		}
	}
}

/**
* Dynamically save history record
*
* @access		public
* @param		string
* @return		nothings
*
* Variable:
* event			Changes event
* ref_table		Tables name
* ref_table_id	ID of table name
**/
function set_history($data = array('column' => '', 'from' => '', 'to' => '', 'login_type' => false, 'table' => false, 'value' => false)){
	$CI =& get_instance();
	if(is_array($data) && sizeof($data) > 0){
		if($data['table'] != false && $data['value'] != false && $data['login_type'] != false){
			$table_info = array(
				'wsa_admin_account' 			=> 	array(
														'table' => 'wsa_admin_account_history',
														'ref_column' => 'admin_id'
													),
				'wsa_merchant_account' 			=> 	array(
														'table' => 'wsa_merchant_account_history',
														'ref_column' => 'merchant_id'
													),
				'wsa_merchant_admin_account'	=> 	array(
														'table' => 'wsa_merchant_admin_account_history',
														'ref_column' => 'merchant_admin_id'
													),
				'wsa_merchant_service'			=> 	array(
														'table' => 'wsa_merchant_service_history',
														'ref_column' => 'service_id'
													),
				'wsa_promo_code'				=> 	array(
														'table' => 'wsa_promo_code_history',
														'ref_column' => 'promo_id'
													)
			);
			
			$table = $table_info[$data['table']]['table'];
			$column = $table_info[$data['table']]['ref_column'];
			
			$db_history = array(
				'changed_id' => $data['value'],
				'changed_id_column' => $column,
				'changed_table' => $data['table'],
				'changed_column' => $data['column'],
				'changed_from' => $data['from'],
				'changed_to' => $data['to'],
				'login_type' => $data['login_type'],
				'created_by' => $CI->session->has_userdata($data['login_type']) && $data['login_type'] != "System" ? $CI->session->userdata($data['login_type']) : '0',
				'created_date' => date("Y-m-d H:i:s")
			);
			
			$CI->db->insert($table, $db_history);
		 }
	}
}

/**
* Get readable filesize
*
* @access		public
* @param		long int: $bytes
* @param		int: $decimals
* 
* @return		file saze with size unit
**/
function human_filesize($bytes, $decimals = 2) {
	$CI =& get_instance();
	$size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
	$factor = floor((strlen($bytes) - 1) / 3);
	
	return sprintf("%.{$decimals}f ", $bytes / pow(1024, $factor)) . @$size[$factor];
}

/**
* Description: To check filter phone number format
*/
function filter_phone($phone) {
	$phone = trim(preg_replace('/\s\s+/', ' ', $phone));
	if($phone == ""){
		return false;
	}
	else{
		$tmp_contact = trim(str_replace(array("+", "-"), "", preg_replace('/\s\s+/', '', $phone)));
		if(!is_numeric(str_replace(" ", "", $tmp_contact))){
			return false;
		}
		
		if(strpos($phone, "+") !== false){
			if(substr_count($phone, "+") > 1){
				return false;
			}
			else if(strpos($phone, "+") > 0){
				return false;
			}
		}
		
		if(strpos($phone, "-") !== false){
			if(strpos($phone, "-") == 0){
				return false;
			}
			else if(substr($phone, -1) == "-"){
				return false;
			}
		}
	}
	
	return $phone;
}

/**
* Description: To check browser compatibality
*/
function browser_checking() {
	$obj =& get_instance();
	
	$obj->load->library('user_agent');
	if($obj->agent->is_browser()){
		$browser = $obj->agent->browser();
		$version = $obj->agent->version();
		$agent_string = $obj->agent->agent_string();
		
		if($browser == 'Internet Explorer'){
			redirect('error/compatibality');
		}
		else if($browser == 'Firefox' && (int)$version < 40){
			redirect('error/compatibality');
		}
		
		return true;
	}
}

function trim_data($data = array()){
	if(is_array($data) && sizeof($data) > 0){
		$tmp_data = array();
		foreach($data as $k => $v){
			$tmp_data[$k] = trim($v);
		}
		
		return $tmp_data;
	}
	
	return trim($data);
}

//For anyone interested in the 'base64url' variant encoding, you can use this pair of functions (base64url_encode(), base64url_decode()): 
function base64url_encode($data) { 
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
} 

function base64url_decode($data) { 
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
}

function get_youtube_id($youtube_link){
	$arr_link = explode("?", $youtube_link);
	
	if(isset($arr_link[1])){
		$end_point = strpos(strtolower($arr_link[1]), '&');
		if($end_point === false){
			$tmp_id_parameter = $arr_link[1];
		}
		else{
			$tmp_id_parameter = substr($arr_link[1], 0, $end_point);
		}
		
		$id_parameter = $tmp_id_parameter;
		if(strpos($tmp_id_parameter, 'v=') !== false){
			$id_parameter = str_replace("v=", "", $tmp_id_parameter);
		}
	}
	else{
		$id_parameter = $youtube_link;
	}
	
	return $id_parameter;
}
?>
