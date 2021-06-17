<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
	}

	//get input request method from client
	public function getRequest() {
		if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	        response(200, true, "API Ok");
		}else{
			$req = json_decode(file_get_contents('php://input'), true);

			if(isset($req) && is_array($req) && count($req) > 0) {
				$req = $req;
			} else{
				$req = $this->input->raw_input_stream;
			}
			#echo '<pre>'; print_r($req);exit;
			if(is_array($req)){
				$req = $req;
			}else{
				parse_str($req, $jsonStr);
				$req = $jsonStr;
			}
			return json_encode($req);
		}
	}

	//check authentication method
	public function checkAuth($headers) {
		if(isset($headers) && is_array($headers) && count($headers) > 0) {
			$token = "";
			if(isset($headers['Authorization'])){
				$token  = $headers['Authorization'];
				//check token is valid
				if($token) {
					try {
						$decoded_token = JWT::decode($token, KEY, array('HS256'));
						$user_code = $decoded_token->data->user_code;
						//check the same token is rerturned of the user
						$t = $this->custom_db->get_records("user_token", ['user_code' => $user_code], 'user_code, token');
						$result = $t['data'];

						if(isset($result) && is_array($result) && count($result) > 0) {
							#print_r($result);exit;
							$response['status'] = true;
							$response['user_code'] = $result[0]['user_code'];
							return $response;
						}else{
							return false;
						}
					} catch (Exception $e) {
						return false;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	//Activity Log manager method
	public function activityLog($user_code, $status, $transaction_response) {
		$loginfo['user_code'] = $user_code;
		$loginfo['ip'] = $_SERVER['REMOTE_ADDR'];
		$loginfo['status'] = $status;
		$loginfo['transaction'] = $transaction_response;
		$loginfo['created_on'] = date('Y-m-d H:i:s', time());

		try {
			if($this->custom_db->insert_record("admin.log_manager", $loginfo)) {
				return true;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
		}	
	}

	//method to convert image into base64 encode string
	public function base64Encode() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers)){
			if($res = $this->checkAuth($headers)) {
				$req = json_decode($this->getRequest());
				$img_file = strip_tags(trim($req->image));
				try {
					$img = file_get_contents($img_file); 	  
					$base64_string = base64_encode($img); 
					$response['base64_string'] = $base64_string;
					response(200, true, "Image Converted", $response);
				} catch (Exception $e) {
					throwError(200, false, 'Error: '. $e->getMessage());
				}	
			}else{
				throwError(200, false, "Access Denied");
			}
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}

}