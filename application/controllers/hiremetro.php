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
		
		if($result == TRUE){
			
			$data['title'] = "Welcome: Hiremetro";
			
			$newdata = array(
                   'username'  => $_POST['username'],
                   'logged_in' => TRUE,
				   'id' => $result
               );
			
			$this->session->set_userdata($newdata);
			
			$this->load->view('include/header', $data);
			$this->load->view('hiremetro/profile');
			
		}elseif($result == FALSE){
			$this->session->set_userdata('login_FALSE', TRUE);
			$this->index();
		}
		
		
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
			
			$newdata = array(
                   'username'  => $_POST['username'],
                   'logged_in' => TRUE,
				   'id' => $id
               );
			
			$this->session->set_userdata($newdata);
			
			$this->load->view('include/header');
			$this->load->view('hiremetro/profile');
			
		}
	}	
		public function logout(){
			session_destroy();
			$_SESSION = "";
			
			$data['title'] = "Hiremetro";
			
			$this->load->view('include/header', $data);
			$this->load->view('hiremetro/home', $data);
			
		}
	
	
	public function search(){
		$data['title']= "hiremetro";
		
		if(isset($_POST['search'])){
			$valueToSearch = $_POST['valueToSearch'];
			
			$result = $this->hiremetrodbase->search_employees($valueToSearch);
			
			$employees = null;
			
			foreach($result as $r){
				$id = $r['employee_id'];
				
			}
			
			foreach($result as $r){
				
				$id = $r['employee_id'];
				$description = $this->hiremetrodbase->get_description($id);
				
				$info = array(
					'lname' => $r['lname'],
					'fname' => $r['fname'],
					'mname' => $r['mname'],
					'address' => $r['address'],
					'sex' => $r['sex'],
					'birthday' => $r['birthday'],
					'description' => ($description)
				);
				$employees[] = $info;
			}
			$data['employees'] = $employees;
		}
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/search', $data);
	}
	
	public function view_about(){
		
		$data['title'] = "About: Hiremetro";
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/about');
	}
	
	public function search_category(){
		
		$category = $_GET['category'];
		
		$result = $this->hiremetrodbase->search_category($category);
		
		foreach($result as $r){
			$id = array(
				'employee_id' => $r['employee_id'],
				'work_description' => $r['work_description']
			);
			
			$work[] = $id;
		}
		
		$c = count($work);
		
		for($a=0;$a<$c;$a++){
			
			$result = $this->hiremetrodbase->search_by_id($work[$a]['employee_id']);
			
			$details = array(
				'fname' => $result[0]['fname'],
				'lname' => $result[0]['lname'],
				'mname' => $result[0]['mname'],
				'address' => $result[0]['address'],
				'birthday' => $result[0]['birthday'],
				'description' => $work[$a]['work_description'],
				'sex' => $result[0]['sex']
			);
			
			$employee[] = $details;
		}
		
		$data['employees'] = $employee;
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/search' ,$data);
		
	}
	
	public function view_profile(){
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/profile');
		
	}
}
