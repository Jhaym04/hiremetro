<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hiremetro extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		//model name & nickname
		$this->load->model('hiremetro_model','hiremetrodbase');
		$this->load->library('session');
	}
	
	public function index(){
		
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
		
		$infos = array(
			'employee_id' => $result[0]['employee_id']
		);
		
		$id = $infos['employee_id'];
		
		if($result != FALSE){
			
			$data['title'] = "Welcome: Hiremetro";
			
			$result = $id;
			
			$newdata = array(
                   'username'  => $_POST['username'],
                   'logged_in' => TRUE,
				   'id' => $result
               );
			
			$this->session->set_userdata($newdata);
			
			$table = "employee_information";
			
		$ei = $this->hiremetrodbase->get_employee_information($result,$table);
			
		$table = "login_credentials";
			
		$lc = $this->hiremetrodbase->get_employee_information($result,$table);
		
		$table = "work_details";
		
		$wd = $this->hiremetrodbase->get_employee_information($result,$table);
		
		$infos = array(
				'work_title' => $wd[0]['work_title'],
				'work_description' => $wd[0]['work_description'],
				'worker_location' => $wd[0]['worker_location'],
				'work_pay' => $wd[0]['work_pay'],
				'work_language' => $wd[0]['work_language'],
				'status' => $wd[0]['status'],
				'fname' => $ei[0]['fname'],
				'mname' => $ei[0]['mname'],
				'lname' => $ei[0]['lname'],
				'email' => $ei[0]['email'],
				'contact' => $ei[0]['contact'],
				'username' => $lc[0]['username'],
				'password' => $lc[0]['password'],
				'picture' => $ei[0]['picture']
			);
			
			$data['employee'] = $infos;
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/profile', $data);
		$this->load->view('include/footer', $data);
		
			
		}elseif($result == FALSE){
			$this->session->set_userdata('login_FALSE', TRUE);
			$this->index();
		}
		
		
	}
	
	public function login_forgotpassword(){
		
		if(isset($_GET['forgotpassword'])){
			$this->session->set_userdata('forgot_password', 1);
			$data['title'] = "Hiremetro";		
			$this->load->view('include/header', $data);
			$this->load->view('hiremetro/home', $data);
			$this->load->view('include/footer', $data);
		}
		elseif(isset($_POST['email'])){
			$email = $_POST['email'];
			$result = $this->hiremetrodbase->confirm_email($email);
			
			$this->session->set_userdata('forgot_password', 0);
			$this->session->set_userdata('forgot_password', $result);
			
			
			$data['title'] = "Hiremetro";		
			$this->load->view('include/header', $data);
			$this->load->view('hiremetro/home', $data);
			$this->load->view('include/footer', $data);
		}
		
		if(isset($_POST['retry'])){
			$this->session->set_userdata('forgot_password', 1);
			$data['title'] = "Hiremetro";		
			$this->load->view('include/header', $data);
			$this->load->view('hiremetro/home', $data);
			$this->load->view('include/footer', $data);
		}
		
	}
	
	public function signup1(){
		// Sessions
		
		$bday = $_POST['birthday'];
		$m = substr($bday,0,2);
		$d = substr($bday,3,2);
		$y = substr($bday,6,4);
		
		$bday = $y.'-'.$m.'-'.$d;
		
		$newdata = array(
			'fname' => ucfirst($_POST['firstname']),
			'mname' => ucfirst($_POST['middlename']),
			'lname' => ucfirst($_POST['lastname']),
			'address' => $_POST['address'],
			'contact' => $_POST['contact_number'],
			'email' => $_POST['email'],
			'birthday' => $bday,
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
			$this->load->view('include/footer');
		}else{
			
			$table = "login_credentials";
			
			$id = $this->hiremetrodbase->getid($table);
			
			$table = "employee_information";
			
			$id = $id+2;
			
			$config['upload_path'] = './images/user_image/'; //The path where the image will be save
			$config['allowed_types'] = 'jpeg|jpg|png'; //Images extensions accepted
			$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
			$this->load->library('upload', $config); //Load the upload CI library
			
			if (!$this->upload->do_upload('userfile')){
				$uploadError = array('upload_error' => $this->upload->display_errors()); 
				$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
				exit;
			};
			
			$file_info = $this->upload->data('');
			$file_name = $file_info['file_name'];
			$config['image_library'] = 'gd2';
			$config['source_image'] = '/images/user_image/'.$file_name.'';
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 164;
			$config['height'] = 163;
			$file_name = '/images/user_image/'.$file_name.'';
			
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			$data = array(
				'employee_id' => ($id),
				'fname' => $this->session->userdata('fname'),
				'mname' => $this->session->userdata('mname'),
				'lname' => $this->session->userdata('lname'),
				'address' => $this->session->userdata('address'),
				'birthday' => $this->session->userdata('birthday'),
				'sex' => $this->session->userdata('sex'),
				'contact' => $this->session->userdata('contact'),
				'email' => $this->session->userdata('email'),
				'picture' => ($file_name),
			);
			
			$this->hiremetrodbase->signup($data, $table);
			
			$table = "work_details";
			
			$data = array(
				'employee_id' => ($id),
				'work_title' => $this->input->post('work_title'),
				'work_description' => $this->input->post('work_description'),
				'work_pay' => $this->input->post('work_pay'),
				'worker_location' => $this->input->post('work_location'),
				'work_language' => $this->input->post('work_language'),
				'date_posted' => (date("Y-m-d")),
				'status' => 'show'
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
			
			$employee = array(
				'fname' => $this->session->userdata('fname'),
				'mname' => $this->session->userdata('mname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'worker_location' => $this->input->post('work_location'),
				'contact' => $this->session->userdata('contact'),
				'work_description' => $this->input->post('work_description'),
				'work_pay' => $this->input->post('work_pay'),
				'status' => 'show',
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'work_title' => $this->input->post('work_title'),
				'picture' => $file_name
			);
			
			$data['employee'] = $employee;
			
			$this->load->view('include/header');
			$this->load->view('hiremetro/profile', $data);
			$this->load->view('include/footer', $data);
			
		}
	}	
	public function logout(){
			$this->session->sess_destroy();
			$this->session->set_userdata('logged_in', FALSE);
			
			$data['title'] = "Hiremetro";
			
			$this->load->view('include/header', $data);
			$this->load->view('hiremetro/home', $data);
			$this->load->view('include/footer', $data);
			
	}
	
	
	public function search(){
		$data['title']= "hiremetro";
		
		if(isset($_POST['search'])){
			$valueToSearch = $_POST['valueToSearch'];
			
			$result = $this->hiremetrodbase->search_employees($valueToSearch);
			
			$employees = null;
			
			if($result != 'false'){
			
				foreach($result as $r){
					$id = $r['employee_id'];
					
				}
				
				foreach($result as $r){
					
					$id = $r['employee_id'];
					$username = $this->hiremetrodbase->get_username($id);
					$table = "work_details";
					$wd = $this->hiremetrodbase->get_employee_information($id,$table);
					
					$info = array(
						'employee_id' => $r['employee_id'],
						'lname' => $r['lname'],
						'fname' => $r['fname'],
						'mname' => $r['mname'],
						'address' => $r['address'],
						'sex' => $r['sex'],
						'birthday' => $r['birthday'],
						'description' => $wd[0]['work_description'],
						'username' => ($username),
						'work_title' => $wd[0]['work_title'],
						'picture' => $r['picture'],
						'status' => $wd[0]['status']
					);
					$employees[] = $info;
				}
				$data['employees'] = $employees;
				
			}
			else{
				$data['noresult'] = "No results found";
			}
		}
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/search', $data);
		$this->load->view('include/footer', $data);
	}
	
	public function view_about(){
		
		$data['title'] = "About: Hiremetro";
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/about');
		$this->load->view('include/footer', $data);
	}
	
	public function search_category(){
		
		$category = $_GET['category'];
		
		$result = $this->hiremetrodbase->search_category($category);
		
		if ($result != 'false'){
		
			foreach($result as $r){
				$id = array(
					'employee_id' => $r['employee_id'],
					'work_description' => $r['work_description'],
					'work_title' => $r['work_title'],
					'status' => $r['status']
				);
				
				$work[] = $id;
			}
			
			$c = count($work);
			
			for($a=0;$a<$c;$a++){
				
				$result = $this->hiremetrodbase->search_by_id($work[$a]['employee_id']);
				$username = $this->hiremetrodbase->get_username($work[$a]['employee_id']);
				
				$details = array(
					'fname' => $result[0]['fname'],
					'lname' => $result[0]['lname'],
					'mname' => $result[0]['mname'],
					'address' => $result[0]['address'],
					'birthday' => $result[0]['birthday'],
					'description' => $work[$a]['work_description'],
					'sex' => $result[0]['sex'],
					'username' => $username,
					'work_title' => $work[$a]['work_title'],
					'status' => $work[$a]['status'],
					'picture' => $result[0]['picture']
				);
				
				$employee[] = $details;
			}
			
			$data['employees'] = $employee;
		}
		else{
				$data['noresult'] = "No results found";
		}
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/search' ,$data);
		$this->load->view('include/footer', $data);
		
	}
	
	public function view_profile(){
		
		$table = "employee_information";
		
		$id = $this->session->userdata('id');
			
		$ei = $this->hiremetrodbase->get_employee_information($id,$table);
			
		$table = "login_credentials";
			
		$lc = $this->hiremetrodbase->get_employee_information($id,$table);
		
		$table = "work_details";
		
		$wd = $this->hiremetrodbase->get_employee_information($id,$table);
		
		$infos = array(
				'work_title' => $wd[0]['work_title'],
				'work_description' => $wd[0]['work_description'],
				'worker_location' => $wd[0]['worker_location'],
				'work_pay' => $wd[0]['work_pay'],
				'work_language' => $wd[0]['work_language'],
				'status' => $wd[0]['status'],
				'fname' => $ei[0]['fname'],
				'mname' => $ei[0]['mname'],
				'lname' => $ei[0]['lname'],
				'email' => $ei[0]['email'],
				'contact' => $ei[0]['contact'],
				'username' => $lc[0]['username'],
				'password' => $lc[0]['password'],
				'picture' => $ei[0]['picture']
			);
			
			$data['employee'] = $infos;
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/profile', $data);
		$this->load->view('include/footer', $data);
		
	}
	
	public function update_employee(){
		
		if(isset($_POST['update'])){
		
		$id = $this->session->userdata('id');
		
		$config['upload_path'] = './images/user_image/'; //The path where the image will be save
		$config['allowed_types'] = 'jpeg|jpg|png'; //Images extensions accepted
		$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
		$this->load->library('upload', $config); //Load the upload CI library
			
		if (!$this->upload->do_upload('userfile')){
			$uploadError = array('upload_error' => $this->upload->display_errors()); 
			$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
			exit;
		};
			
		$file_info = $this->upload->data('');
		$file_name = $file_info['file_name'];
			
		$config['image_library'] = 'gd2';
		$config['source_image'] = '/images/user_image/'.$file_name.'';
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 164;
		$config['height'] = 163;
		
		$file_name = '/images/user_image/'.$file_name.'';
			
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
		$table = "employee_information";
		
		$info = array(
			'fname' => $this->input->post('fname'),
			'mname' => $this->input->post('mname'),
			'lname' => $this->input->post('lname'),
			'picture' => $file_name
		);

		$this->hiremetrodbase->update_details ($id,$table,$info);
		
		$table = "login_credentials";
		
		$info = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		
		$this->hiremetrodbase->update_details ($id,$table,$info);
		
		$info = array(
			'work_title' => $this->input->post('work_title'),
			'work_description' => $this->input->post('work_description'),
			'worker_location' => $this->input->post('worker_location'),
			'work_pay' => $this->input->post('work_pay'),
			'fname' => $this->input->post('fname'),
			'mname' => $this->input->post('mname'),
			'lname' => $this->input->post('lname'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		
		$data['employee'] = $info;
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/profile', $data);
		$this->load->view('include/footer', $data);
		
		}else{
			$info = array(
			'work_title' => $this->input->post('work_title'),
			'work_description' => $this->input->post('work_description'),
			'worker_location' => $this->input->post('worker_location'),
			'work_pay' => $this->input->post('work_pay'),
			'fname' => $this->input->post('fname'),
			'mname' => $this->input->post('mname'),
			'lname' => $this->input->post('lname'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		
		$data['employee'] = $info;
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/profile', $data);
		$this->load->view('include/footer', $data);
		}
	}
		
		public function update_work(){
			
			$id = $this->session->userdata('id');
			$table = "work_details";
			
			$info = array(
			'work_title' => $this->input->post('work_title'),
			'work_description' => $this->input->post('work_description'),
			'worker_location' => $this->input->post('worker_location'),
			'work_pay' => $this->input->post('work_pay'),
			'work_language' => $this->input->post('work_language')
			);
			
			$this->hiremetrodbase->update_details($id,$table,$info);
			
			$table = "employee_information";
			
			$ei = $this->hiremetrodbase->get_employee_information($id,$table);
			
			$table = "login_credentials";
			
			$lc = $this->hiremetrodbase->get_employee_information($id,$table);
			
			$infos = array(
				'work_title' => $this->input->post('work_title'),
				'work_description' => $this->input->post('work_description'),
				'worker_location' => $this->input->post('worker_location'),
				'work_pay' => $this->input->post('work_pay'),
				'work_language' => $this->input->post('work_language'),
				'fname' => $ei[0]['fname'],
				'mname' => $ei[0]['mname'],
				'lname' => $ei[0]['lname'],
				'email' => $ei[0]['email'],
				'contact' => $ei[0]['contact'],
				'picture' => $ei[0]['picture'],
				'username' => $lc[0]['username'],
				'password' => $lc[0]['password']
			);
			
			$data['employee'] = $infos;
			
			$this->load->view('include/header');
			$this->load->view('hiremetro/profile',$data);
			$this->load->view('include/footer', $data);
		}
		
		public function update_information(){
			$id = $this->session->userdata('id');
			$table = "login_credentials";
			
			$info = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			
			$this->hiremetrodbase->update_details($id,$table,$info);
			
			$table = "employee_information";
			
			$config['upload_path'] = './images/user_image/'; //The path where the image will be save
			$config['allowed_types'] = 'jpeg|jpg|png'; //Images extensions accepted
			$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
			$this->load->library('upload', $config); //Load the upload CI library
				
			if (!$this->upload->do_upload('userfile')){
				$uploadError = array('upload_error' => $this->upload->display_errors()); 
				$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
				exit;
			};
				
			$file_info = $this->upload->data('');
			$file_name = $file_info['file_name'];
				
			$config['image_library'] = 'gd2';
			$config['source_image'] = '/images/user_image/'.$file_name.'';
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 164;
			$config['height'] = 163;
			
			$file_name = '/images/user_image/'.$file_name.'';
				
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			$info = array(
			'fname' => $this->input->post('fname'),
			'mname' => $this->input->post('mname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'contact' => $this->input->post('contact'),
			'picture' => $file_name
			);
			
			$this->hiremetrodbase->update_details($id,$table,$info);
			
			$table = "work_details";
			$wd = $this->hiremetrodbase->get_employee_information($id,$table);
			
			$infos = array(
				'work_title' => $wd[0]['work_title'],
				'work_description' => $wd[0]['work_description'],
				'worker_location' => $wd[0]['worker_location'],
				'work_pay' => $wd[0]['work_pay'],
				'work_language' => $wd[0]['work_language'],
				'fname' => $this->input->post('fname'),
				'mname' => $this->input->post('mname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'contact' => $this->input->post('contact'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'picture' => $file_name
			);
			
			$data['employee'] = $infos;
			
			$this->load->view('include/header');
			$this->load->view('hiremetro/profile',$data);
			$this->load->view('include/footer', $data);
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
					'work_language' => $alldetails[0]['work_language'],
					'picture' => $allinfo[0]['picture']
						);
				$employees[] = $info;
			}
			$data['employees'] = $employees;	
		}
		
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/ads', $data);
		$this->load->view('include/footer', $data);
	}
	
	public function view_faqs(){
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/faqs');
		$this->load->view('include/footer');
		
	}
	
	public function deactivate(){
		$id = $this->session->userdata('id');
		
		$this->hiremetrodbase->deactivate($id);
		$this->session->sess_destroy();
		$this->session->set_userdata('logged_in', FALSE);
		
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/home');
		$this->load->view('include/footer');
	}
		
	
	public function admin(){
		$data['title'] = "Hiremetro";		
		$this->load->view('include/header_admin', $data);
		$this->load->view('hiremetro/admin_home', $data);
	}
	
	public function update_status(){
		$id = $this->session->userdata('id');
		$table = "work_details";
		$status = $_POST['status'];
		
		$wd = $this->hiremetrodbase->get_employee_information($id,$table);
		
		$info = array(
			'work_title' => $wd[0]['work_title'],
			'work_description' => $wd[0]['work_description'],
			'work_pay' => $wd[0]['work_pay'],
			'worker_location' => $wd[0]['worker_location'],
			'status' => $status
		);
		
		$this->hiremetrodbase->update_details($id,$table,$info);
		
		$table = "employee_information";
			
		$ei = $this->hiremetrodbase->get_employee_information($id,$table);
			
		$table = "login_credentials";
			
		$lc = $this->hiremetrodbase->get_employee_information($id,$table);
			
		$infos = array(
			'work_title' => $wd[0]['work_title'],
			'work_description' => $wd[0]['work_description'],
			'work_pay' => $wd[0]['work_pay'],
			'worker_location' => $wd[0]['worker_location'],
			'status' => $status,
			'fname' => $ei[0]['fname'],
			'mname' => $ei[0]['mname'],
			'lname' => $ei[0]['lname'],
			'email' => $ei[0]['email'],
			'contact' => $ei[0]['contact'],
			'picture' => $ei[0]['picture'],
			'username' => $lc[0]['username'],
			'password' => $lc[0]['password']
		);
			
		$data['employee'] = $infos;
		
		$data['title'] = "Hiremetro: Profile";
		
		$this->load->view('include/header',$data);
		$this->load->view('hiremetro/profile');
	}
	
}