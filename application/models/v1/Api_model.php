
<?php
class Api_model extends CI_Model
{
	//Get Gender
	public function get_gender() {
		$sql = $this->db->query("SELECT id,description
			FROM gen_code_desc
			WHERE group_name = 'GENDER' 
			AND record_status = 1");
    	//print_r($this->db->lastget_transation_list_query());
		return $sql->result_array();
	}
	//Get Skills
	public function get_skills() {
		$sql = $this->db->query("SELECT *
			FROM skill_master
			WHERE record_status = 1");
		return $sql->result_array();
	}
	//Get Category
	public function get_category() {
    	$sql = $this->db->query("SELECT id,description
			FROM gen_code_desc
			WHERE group_name = 'CATEGORY' 
			AND record_status = 1");
    	//print_r($this->db->lastget_transation_list_query());
		return $sql->result_array();
	}
	//Get Document
	public function get_document() {
    	$sql = $this->db->query("SELECT id,description
			FROM gen_code_desc
			WHERE group_name = 'DOCUMENT' 
			AND record_status = 1");
    	//print_r($this->db->lastget_transation_list_query());
		return $sql->result_array();
	}
	public function get_institute() {
    	$sql = $this->db->query("SELECT inst_code,inst_name
    		FROM institute_master
			WHERE record_status = 1");
    	//print_r($this->db->lastget_transation_list_query());
		return $sql->result_array();
	}
	public function get_qualification() {
    	$sql = $this->db->query("SELECT qual_code,qual_name
    		FROM qualification_master
			WHERE record_status = 1");
    	//print_r($this->db->lastget_transation_list_query());
		return $sql->result_array();
	}
	//Get Sector
	public function get_sector() {
    	$sql = $this->db->query("SELECT id,description
			FROM gen_code_desc
			WHERE group_name = 'SECTOR' 
			AND record_status = 1 order by description");
    	//print_r($this->db->lastget_transation_list_query());
		return $sql->result_array();
	}
	public function get_job_post($user_code) {
    	$sql = $this->db->query("SELECT job_name,job_type,vacanices,location,qual_name,
    	publish_date,deadline_date,salary,
		CASE WHEN CURRENT_DATE BETWEEN publish_date AND deadline_date THEN 1 ELSE 0 END job_status,job_code
		FROM  job_post A
		LEFT JOIN qualification_master B ON A.qualification = B.qual_code
		WHERE a.created_by = $user_code
		ORDER BY job_status");
    	return $sql->result_array();
	}
	public function get_job_post_id($job_code) {
    	$sql = $this->db->query("SELECT job_name,job_type,vacanices,location,qualification,
    	publish_date,deadline_date,salary,min_exp,max_exp,job_profile,job_code
		FROM  job_post 
		WHERE job_code = $job_code");
		//print_r($this->db->last_query());
    	return $sql->result_array();
	}
	public function search_job_post() {
    	$sql = $this->db->query("SELECT name,job_name,job_type,vacanices,A.location,qual_name,salary,
		CASE WHEN CURRENT_DATE BETWEEN publish_date AND deadline_date THEN 1 ELSE 0 END job_status,job_code,skill_name
		FROM  job_post A
		LEFT JOIN qualification_master B ON A.qualification = B.qual_code
		LEFT JOIN comp_reg C ON A.created_by = C.company_code
		LEFT JOIN skill_master D ON A.skils = D.skill_code
		ORDER BY job_status");
    	
    	return $sql->result_array();
	}
	public function job_applied($user_code) {
    	$sql = $this->db->query("SELECT name,job_name,job_type,vacanices,B.location,qual_name,salary,B.job_code,apply_status
		FROM  job_applied  A
		LEFT JOIN job_post B ON A.job_code = B.job_code
		LEFT JOIN qualification_master D ON B.qualification = D.qual_code
		LEFT JOIN comp_reg C ON B.created_by = C.company_code
		where appl_code = $user_code
		");
    	return $sql->result_array();
	}
	public function applied_jobseeker($user_code) {
    	$sql = $this->db->query("SELECT job_name,CONCAT(f_name, ' ',m_name,' ', l_name) AS full_name,email_id,contact_no,gender,dob,qual_name,pass_yr,apply_status,C.job_code,B.appl_code
		FROM  job_applied  A
		LEFT JOIN  app_reg B ON A.appl_code = B.appl_code
		LEFT JOIN job_post C ON A.job_code = C.job_code
		LEFT JOIN qualification_master D ON B.qual = D.qual_code
		WHERE c.created_by = $user_code");
		return $sql->result_array();
	}
	public function getjobseekerProfile($user_code) {
    	$sql = $this->db->query("SELECT DISTINCT CONCAT(f_name, ' ',m_name,' ', l_name) AS full_name,email_id,contact_no, C.DESCRIPTION AS gender,dob,
		qual_name,pass_yr,F.description AS category,ph_ch,inst_name
		FROM app_reg A LEFT JOIN qualification_master B ON A.qual = B.qual_code 
		LEFT JOIN gen_code_desc C ON A.gender = C.id 
		LEFT JOIN appl_skill D ON A.appl_code = D.appl_code 
		LEFT JOIN skill_master E ON D.skill_code = E.skill_code
		 LEFT JOIN gen_code_desc F ON A.gender = F.id 
		 LEFT JOIN institute_master G ON A.inst = G.inst_code
		WHERE A.appl_code = $user_code");
		// print_r($this->db->last_query());
    	return $sql->result_array();
	}
	public function skill_name($user_code) {
    	$sql = $this->db->query("SELECT skill_name
		FROM appl_skill A
		LEFT JOIN skill_master B ON A.skill_code = B.skill_code
		WHERE appl_code = $user_code");
		// print_r($this->db->last_query());
    	return $sql->result_array();
	}
	public function getrecruiterProfile($user_code) {
    	$sql = $this->db->query("SELECT name,url,location,email_id,contact_no,C.DESCRIPTION AS sector,B.description AS document_type,document_no 
		FROM comp_reg A  
		LEFT JOIN gen_code_desc B ON A.document_type = B.id
		LEFT JOIN gen_code_desc C ON A.sector = C.id
		WHERE A.company_code = $user_code");
		// print_r($this->db->last_query());
    	return $sql->result_array();
	}
}

?>


