<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		session_start();
		$this->load->model('v1/Api_model', 'model');
		$this->load->model('custom_db');
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('user/login');
	}
	public function jobseeker()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('user/jobseeker');
	}
	public function recruiter()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('user/recruiter');
	}
	//Jobseeker Section
	public function jobseeker_profile()
	{
		//echo "<pre>"; print_r($_SESSION);die;
		$this->load->view('jobseeker/header');
		$this->load->view('templates/footer');
		$data['data'] =  $this->model->getjobseekerProfile($_SESSION['user_code']);
		$data['skills'] =  $this->model->skill_name($_SESSION['user_code']);
		 $data['content']=$data['data'];
		if($data['content'][0]['ph_ch'] == 1){
			$data['ph_ch'] = 'Yes';
		}
		else{
			$data['ph_ch'] = 'No';
		}
		//print_r($data['content'][0]['ph_ch']);die;
		$this->load->view('jobseeker/jobseeker_profile',$data);
	}
	public function job_search()
	{
		$this->load->view('jobseeker/header');
		$this->load->view('templates/footer');
		$this->load->view('jobseeker/job_search');
	}
	public function job_applied()
	{
		$this->load->view('jobseeker/header');
		$this->load->view('templates/footer');
		$this->load->view('jobseeker/job_applied');
	}
	// Recruiter Section 
	public function recruiter_profile()
	{
		$this->load->view('recruiter/header');
		$this->load->view('templates/footer');
		$data['data'] =  $this->model->getrecruiterProfile($_SESSION['user_code']);;
		 $data['content']=$data['data'];
		$this->load->view('recruiter/recruiter_profile',$data);
	}
	public function job_post()
	{
		$this->load->view('recruiter/header');
		$this->load->view('templates/footer');
		$this->load->view('recruiter/job_post');
	}
	public function applicant_list()
	{
		$this->load->view('recruiter/header');
		$this->load->view('templates/footer');
		$this->load->view('recruiter/applicant_list');
	}
	

}
