
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
//set headers
header("Access-Control-Allow-Origin: *");
#header("Access-Control-Allow-Credentials : true");
header("Access-Control-Allow-Methods: POST, GET, DELETE");
header("Access-Control-Max-Age: 328600");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

class Api extends MY_Controller
{
	protected $limit = 0;
	public function __construct() {
		parent::__construct();
		session_start();
		$this->load->model('v1/Api_model', 'model');
		$this->load->helper('app_helper');
		$this->load->model('custom_db');
		
	}
	//Get Gender
	public function get_gender() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->get_gender();
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Gender Lists", $data);
				}else{
					throwEcvrror(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	//Get Category
	public function get_category() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->get_category();
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Category Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	
	public function get_institute() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->get_institute();
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Document Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function get_qualification() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->get_qualification();
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Document Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function register_jobSeeker() {
		
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("POST")) {
			$post = $this->input->post();
			$fname = validateParameter("First Name", strip_tags(trim($post['fname'])));
			$mname = strip_tags(trim($post['mname']));
			$lname = validateParameter("Last Name", strip_tags(trim($post['lname'])));
			$email_id = validateParameter("Email Id", strip_tags(trim($post['email_id'])));
			$cont_no = validateParameter("Contact Number", strip_tags(trim($post['cont_no'])));
			$dob = validateParameter("Date Of Birth", strip_tags(trim($post['dob'])));
			$gender = validateParameter("Gender", strip_tags(trim($post['gender'])));
			$category = validateParameter("Category", strip_tags(trim($post['category'])));
			$ph_chall = validateParameter("Physically challenged", strip_tags(trim($post['ph_chall'])));
			$institute = validateParameter("Institute", strip_tags(trim($post['institute'])));
			$qualification = validateParameter("Qualification", strip_tags(trim($post['qualification'])));
			$pass_yr = validateParameter("Year of Passing", strip_tags(trim($post['pass_yr'])));
			$unique_no = time();
			$data['appl_code']  = $unique_no;
			$data['password']  =md5('password');
			$data['f_name']  = $fname;
			$data['m_name']  = $mname;
			$data['l_name']  = $lname;
			$data['email_id']  = $email_id;
			$data['contact_no']  = $cont_no;
			$data['dob']  = date('Y-m-d', strtotime($dob));
			$data['gender']  = $gender;
			$data['category']  =  $category;
			$data['ph_ch']  =  $ph_chall;
			$data['inst']  = $institute;
			$data['qual']  = $qualification;
			$data['pass_yr']  = $pass_yr;
			$data['record_status'] = 1;

			try {
				$rs = $this->custom_db->insert_record('app_reg', $data);
				if(isset($rs) && $rs['insert_id'] > 0) {
					$t = $this->custom_db->get_records('app_reg', ['id' => $rs['insert_id']], 'appl_code');
					$data = $t['data'];
					if(is_array($post['skills']) && count($post['skills']) > 0){
						for($i = 0; $i < count($post['skills']); $i++){
							$skill_data['appl_code'] = $data[0]['appl_code'];
							$skill_data['skill_code'] = $post['skills'][$i];
							$rs = $this->custom_db->insert_record('appl_skill', $skill_data);
						}
					}
					response(200, true, "Register Successfully", null);
				}else{
					throwError(200, false, "Failed to submit data");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}

	//Get Dodument
	public function get_document() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->get_document();
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Document Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}

	//Get Sector
	public function get_sector() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->get_sector();
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Sector Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	//Get Skills
	public function get_skills() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->get_skills();
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Sector Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}

	//recruiter register
	public function register_recruiter() {
		
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("POST")) {
			$post = $this->input->post();
			$txtCompanyName = validateParameter("Company Name", strip_tags(trim($post['txtCompanyName'])));
			$txtUrl = validateParameter("Office URL", strip_tags(trim($post['txtUrl'])));
			$txtLocation = validateParameter("Location", strip_tags(trim($post['txtLocation'])));
			$email_id = validateParameter("Company Email-Id", strip_tags(trim($post['txtEmailId'])));
			$cont_no = validateParameter("Contact Number", strip_tags(trim($post['txtMobileNo'])));
			$cmbSector = validateParameter("Sector", strip_tags(trim($post['cmbSector'])));
			$cmbDocType = validateParameter("Document Type", strip_tags(trim($post['cmbDocType'])));
			$txtDocNo = validateParameter("Document Number", strip_tags(trim($post['txtDocNo'])));

			$unique_no = time();
			$data['company_code']  = $unique_no;
			$data['password']  =md5('password');
			$data['name']  = $txtCompanyName;
			$data['url']  = $txtUrl;
			$data['location']  = $txtLocation;
			$data['email_id']  = $email_id;
			$data['contact_no']  = $cont_no;
			$data['sector']  = $cmbSector;
			$data['document_type']  = $cmbDocType;
			$data['document_no']  = $txtDocNo;
			$data['record_status'] = 1;
			
			try {
				$rs = $this->custom_db->insert_record('comp_reg', $data);
				if(isset($rs) && $rs['insert_id'] > 0) {
					response(200, true, "Register Successfully", null);
				}else{
					throwError(200, false, "Failed to submit data");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function login() {
		
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("POST")) {
			$post = $this->input->post();
			$type = validateParameter("User", strip_tags(trim($post['type'])));
			$email_id = validateParameter("Email Id", strip_tags(trim($post['email_id'])));
			$password = validateParameter("Password", strip_tags(trim($post['password'])));
			$has_pass =md5($password);
			try {
				if($type === 'JOBSEEKER'){
					$sql = $this->custom_db->get_records('app_reg', ['email_id' => $email_id], 'email_id,password,appl_code');
					$result = $sql['data'];	
					if(count($result) > 0){
						$_SESSION['user_code'] = $sql['data'][0]['appl_code'];
						$res_email_id = $sql['data'][0]['email_id'];
						$res_password = $sql['data'][0]['password'];
						$false_email = 1;
					}
					else{
						$false_email = 0;
					}
				}
				else{
					$sql1 = $this->custom_db->get_records('comp_reg', ['email_id' => $email_id], 'email_id,password,company_code');
					$result = $sql1['data'];
					if(count($result) > 0){
						$_SESSION['user_code'] = $sql1['data'][0]['company_code'];
						$res_email_id 	= $sql1['data'][0]['email_id'];
						$res_password 	= $sql1['data'][0]['password'];
						$false_email 	= 1;
					}
					else{
						$false_email = 0;
					}
				}
				if($false_email == 0){
					throwError(200, false, "Email Id Does Not Exit !!");
				}
				else if($res_password != $has_pass){
					throwError(200, false, "Password Does Not Match ");
				}
				if(count($result) > 0){
					response(200, true, "Login Successfully !!",$type);
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function get_job_post($job_code=null) {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {
				if(!empty($job_code) || $job_code != ''){
					$t['data'] = $this->model->get_job_post_id($job_code);
					$data = $t['data'];
				}
				else{
					$t['data'] = $this->model->get_job_post($_SESSION['user_code']);
					$data = $t['data'];
				}
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Job Post Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function job_create() {
		
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("POST")) {
			$post = $this->input->post();
			$job_name = validateParameter("Job Name", strip_tags(trim($post['job_name'])));
			$job_type = validateParameter("Job Type", strip_tags(trim($post['job_type'])));
			$vacancies = validateParameter("No. Of Vacancies", strip_tags(trim($post['vacancies'])));
			$location = validateParameter("Job Location", strip_tags(trim($post['location'])));
			$job_qualification = validateParameter("Qualification", strip_tags(trim($post['job_qualification'])));
			$salary = validateParameter("Salary", strip_tags(trim($post['salary'])));
			$start_date = validateParameter("Publish Date", strip_tags(trim($post['start_date'])));
			$end_date = validateParameter("Deadline Date", strip_tags(trim($post['end_date'])));
			$min_exp = validateParameter("Minimum Experence", strip_tags(trim($post['min_exp'])));
			$max_exp = validateParameter("Maxmimum Experence", strip_tags(trim($post['max_exp'])));
			$description = validateParameter("Job Description", strip_tags(trim($post['description'])));
			$data['job_code']  = time();
			$data['job_name']  = $job_name;
			$data['job_type']  = $job_type;
			$data['vacanices']  = $vacancies;
			$data['location']  = $location;
			$data['qualification']  = $job_qualification;
			$data['min_exp']  = $min_exp;
			$data['max_exp']  = $max_exp;
			$data['salary']  = $salary;
			$data['publish_date']  = date('Y-m-d', strtotime($start_date));
			$data['deadline_date']  = date('Y-m-d', strtotime($end_date));
			$data['job_profile']  = $description;
			
			$data['record_status'] = 1;
			$get_skills = '';
			if(is_array($post['skills']) && count($post['skills']) > 0){
				for($i = 0; $i < count($post['skills']); $i++){
					$get_skills .= ','. $post['skills'][$i];
				}
			}
			$get_skills = ltrim($get_skills, ',');
			$data['skils'] = $get_skills;
			try {
				if(isset($post['edit_id']) && !empty($post['edit_id']))
				{
					$job_code = $post['edit_id'];
					$data['modified_by'] = $_SESSION['user_code'];
					$cond['job_code'] = $job_code;

					$update = $this->custom_db->update_record('job_post', $data, $cond);
					if($update == true || $update == 1) {
						response(200, true, "Update Success", null);
					} else{
						throwError(200, false, "Failed to update data, try again");
					}
				}else{
					$data['created_by'] = $_SESSION['user_code'];
					$rs = $this->custom_db->insert_record('job_post', $data);
					if(isset($rs) && $rs['insert_id'] > 0) {
						response(200, true, "Job Created Successfully", null);
					}else{
						throwError(200, false, "Failed to submit data");
					}
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function search_job_post() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->search_job_post();
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Job Post Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function job_applied() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->job_applied($_SESSION['user_code']);
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Job Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function applied_jobseeker() {
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("GET")) {
			try {

				$t['data'] = $this->model->applied_jobseeker($_SESSION['user_code']);
				$data = $t['data'];
				if(isset($data) && is_array($data) && count($data) > 0) {
					response(200, true, "Jobseeker Lists", $data);
				}else{
					throwError(200, false, "Data Not Found");
				}
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
			
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function approve_jobseeker($job_code,$appl_code,$param) {
		//print_r($this->input->post());die;
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("POST")) {
			$post = $this->input->post();
			try {
					if($param == 'approve'){
						$data['apply_status'] =  2;
					}
					else{
						$data['apply_status'] =  3;
					}
					$cond['job_code'] = $job_code;
					$cond['appl_code'] = $appl_code;

					$update = $this->custom_db->update_record('job_applied', $data, $cond);
					if($update == true || $update == 1) {
						response(200, true, "Update Success", null);
					} else{
						throwError(200, false, "Failed to update data, try again");
					}

			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function apply_job($job_code) {
		//print_r($_SESSION);die;
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("POST")) {
			$post = $this->input->post();
			try {
				//check for edit id 
					$data['job_code'] = $job_code ;
					$data['appl_code'] = $_SESSION['user_code'];
					$data['apply_status'] = 1;
					
					$rs = $this->custom_db->insert_record('job_applied', $data);
					if(isset($rs) && $rs['insert_id'] > 0) {
						response(200, true, "Apply Successfully", null);
					}else{
						throwError(200, false, "Failed to submit data");
					}

			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
	public function logout() {
		//print_r($_SESSION);die;
		$headers = $this->input->request_headers();
		if(checkContentType($headers) && checkRequestMethod("POST")) {
			$post = $this->input->post();
			try {
				unset($_SESSION['user_code']);
				session_destroy();
				response(200, true, "Logout Successfully", null);
			} catch (Exception $e) {
				throwError(200, false, "Error: ". $e->getMessage());
			}
		}else{
			throwError(200, false, "Error: Invalid Content Type");
		}
	}
}
