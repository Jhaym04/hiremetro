<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hiremetro extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		//model name & nickname
		$this->load->model('hiremetro_model','hiremetrodbase');
		$this->load->library('session');
	}
	
	public function index()
	{
		$data['title'] = "Hiremetro";		
		$this->session->set_userdata('logged_in', FALSE);
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/home', $data);
		$this->load->view('include/footer', $data);
		
	}
	
	public function login(){
		$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);
		
		$result = $this->hiremetrodbase->login($data);
		
		
	}
	
	public function signup1(){
		// Sessions
		$newdata = array(
			'fname' => $_POST['firstname'],
			'mname' => $_POST['middlename'],
			'lname' => $_POST['lastname'],
			'address' => $_POST['address'],
			'contact' => $_POST['contact_number'],
			'email' => $_POST['email'],
			'birthday' => $_POST['birthday'],
			'birthday' => $_POST['birthday'],
			'sex' => $_POST['sex'],
			'signup1' => TRUE
		);
		
		$this->session->set_userdata($newdata);
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/home');
		
		// set table
		// $table = "login_credentials";
		// get id
		// $id = $this->hiremetrodbase->getid($table);
		
		// $id = $id+1;
		
		// $data = array(
		// 'employee_id' => ($id),
		// 'username' => $this->input->post('username'),
		// 'password' => $this->input->post('password'),
		// 'email' => $this->input->post('email')
		// );
		
		// $this->hiremetrodbase->signup($data, $table);
		
		// $table="employee_information";
		
		// $data = array(
		// 'employee_id' => ($id),
		// 'fname' => $this->input->post('firstname'),
		// 'lname' => $this->input->post('lastname'),
		// 'contact_number' => $this->input->post('contact_number'),
		// 'email' => $this->input->post('email'),
		// 'birthday' => $this->input->post('birthday'),
		// 'gender' => $this->input->post('gender')
		// );
		
		// $this->hiremetrodbase->signup($data, $table);
		
	}
	
	public function signup2(){
		
		$this->session->set_userdata('signup1', FALSE);
		
		if($_POST['back'] == 1){
			$this->session->set_userdata('back', TRUE);
			$this->load->view('include/header');
			$this->load->view('hiremetro/home');
		}else{
			
			$table = "employee_information";
			
			$id = $this->hiremetrodbase->getid($table);
			
			$id = $id+1;
			
			$data = array(
				'employee_id' => ($id),
				'fname' => $this->session->userdata('fname'),
				'mname' => $this->session->userdata('mname'),
				'lname' => $this->session->userdata('lname'),
				'address' => $this->session->userdata('address'),
				'birthday' => $this->session->userdata('birthday'),
				'sex' => $this->session->userdata('sex'),
				'contact' => $this->session->userdata('contact'),
				'email' => $this->session->userdata('email')
			);
			
			$this->hiremetrodbase->signup($data, $table);
			
			$table = "work_details";
			
			$data = array(
				'employee_id' => ($id),
				'work_title' => $this->input->post('work_title'),
				'work_description' => $this->input->post('work_description'),
				'work_pay' => $this->input->post('work_pay'),
				'worker_location' => $this->input->post('work_location'),
				'date_posted' => (date("Y-m-d"))
			);
			
			$this->hiremetrodbase->signup($data, $table);
			
			$table = "login_credentials";
			
			$data = array(
				'employee_id' => ($id),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'email' => $this->session->userdata('email')
			);
			
			$this->hiremetrodbase->signup($data, $table);
			
		}
	}
	
	public function delete_student(){
	}
}
