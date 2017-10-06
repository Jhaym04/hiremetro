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
			
		}
	}	
		public function logout(){
			session_destroy();
			
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
				$username = $this->hiremetrodbase->get_username($id);
				
				$info = array(
					'employee_id' => $r['employee_id'],
					'lname' => $r['lname'],
					'fname' => $r['fname'],
					'mname' => $r['mname'],
					'address' => $r['address'],
					'sex' => $r['sex'],
					'birthday' => $r['birthday'],
					'description' => ($description),
					'username' => ($username)
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
	
	public function employee_profile(){
		$data['title'] = "Ads: Hiremetro";
		
		if( $_GET['username'])
		{
			$username = $_GET['username'];
			$result = $this->hiremetrodbase->get_id($username);
			
			$employees = null;
			
			foreach($result as $r){
				$id = $r['employee_id'];
			}
			
			foreach($result as $r){
				
				$allinfo = $this->hiremetrodbase->get_all($id);
				$alldetails = $this->hiremetrodbase->get_details($id);
				$languages = $this->hiremetrodbase->get_languages($id);
				
				$info = array(
					'employee_id' => $id,
					'lname' => $allinfo[0]['lname'],
					'fname' => $allinfo[0]['fname'],
					'mname' => $allinfo[0]['mname'],
					'address' => $allinfo[0]['address'],
					'sex' => $allinfo[0]['sex'],
					'birthday' => $allinfo[0]['birthday'],
					'contact' => $allinfo[0]['contact'],
					'email' => $allinfo[0]['email'],
					'work_title' => $alldetails[0]['work_title'],
					'work_description' => $alldetails[0]['work_description'],
					'worker_location' => $alldetails[0]['worker_location'],
					'languages' => $languages
						);
				$employees[] = $info;
			}
			$data['employees'] = $employees;	
		}
		
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/ads', $data);		
	}

}
?>