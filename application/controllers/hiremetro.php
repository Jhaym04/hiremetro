<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hiremetro extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		//model name & nickname
		$this->load->model('hiremetro_model','hiremetrodbase');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('pagination');  
		 $this->load->helper('download');
	}
	
	public function index(){
		
		$data['title'] = "Hiremetro";	
		
		$result = $this->hiremetrodbase->get_indemand();
		
		// Get indemand jobs
		
		foreach($result as $r){
			$info = array(	
			'category_name' => $r['category_name'],
			'category_views' => $r['category_views'],
			'no_of_ads' => $r['no_of_ads'],
			'picture' => $r['picture']
			);
			
			$indemand[] = $info;
		}
		
		$data['indemand'] = $indemand;
		
		// GEt all ads number of jobs
		
		$result = $this->hiremetrodbase->get_ads();
		
		foreach ($result as $r){
			$info = array(
				'no_of_ads' => $r['no_of_ads']
			);
			
			$no_ads[] = $info;
		}
		
		$data['no_ads'] = $no_ads;
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/home', $data);
		$this->load->view('include/footer', $data);
		
	}
	
	//LOGIN
	
	public function login(){
		
		// VERIFY
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		
		//FORM VALIDATION RULES
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		//FORM VALIDATION MESSAGES
		$this->form_validation->set_message('required', 'Please enter your %s');
		
		
		if($this->form_validation->run() == FALSE){
			
			//IF THERE IS ERROR REDIRECT TO HOME
			$data['login_error'] = 0;
			
			$data['title'] = "Hiremetro";	
		
			$result = $this->hiremetrodbase->get_indemand();
			
			// Get indemand jobs
			
			foreach($result as $r){
				$info = array(	
				'category_name' => $r['category_name'],
				'category_views' => $r['category_views'],
				'no_of_ads' => $r['no_of_ads'],
				'picture' => $r['picture']
				);
				
				$indemand[] = $info;
			}
			
			$data['indemand'] = $indemand;
			
			// GEt all ads number of jobs
			
			$result = $this->hiremetrodbase->get_ads();
			
			foreach ($result as $r){
				$info = array(
					'no_of_ads' => $r['no_of_ads']
				);
				
				$no_ads[] = $info;
			}
			
			$data['no_ads'] = $no_ads;
			
			$this->load->view('include/header', $data);
			$this->load->view('hiremetro/home', $data);
			$this->load->view('include/footer', $data);
			
		}
		else{
			//IF TRUE , GET LOGIN CREDENTIALS
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
			
			//CHECK EXISTENCE IN DATABASE
			$result = $this->hiremetrodbase->login($data);
			
			
			if($result != 'false'){
				//CORRECT CREDENTIALS
				// GET ID
				$id = $result[0]['client_id'];
				
				//GET CLIENT_INFORMATION
				$table = "client_information";
				$ci = $this->hiremetrodbase->get_employee_information($id,$table);
				if($ci != 'false'){
				$client_information = array(
					'fname' => $ci[0]['fname'],
					'lname' => $ci[0]['lname'],
					'location' => $ci[0]['location'],
					'contact' => $ci[0]['contact'],
					'picture' => $ci[0]['picture'],
					'approve' => $ci[0]['approve']
				);
				
				$data['client_information'] = $client_information;
				}
				
				//GET WORK_DETAILS
				$table = "work_details";
				$wd = $this->hiremetrodbase->get_employee_information($id,$table);
				
				if($wd != 'false'){
					$work_details = array(
						'category' => $wd[0]['category'],
						'description' => $wd[0]['description'],
						'views_number' => $wd[0]['views_number'],
						'rate_type' => $wd[0]['rate_type'],
						'rate_price' => $wd[0]['rate_price'], 
						'negotiable' => $wd[0]['negotiable']
					);
					$data['work_details'] = $work_details;
				}
				
				// GET EMAIL
				$table = "login_credentials";
				$lc = $this->hiremetrodbase->get_employee_information($id,$table);
				
				$data['email'] = $lc[0]['email'];
				
				// GET RATINGS OF LABORER
				$table ="rating_employee";
				$rates = $this->hiremetrodbase->get_employee_information($id,$table);
				if($rates != 'false'){
				$rating = array(
					'no_of_rates' => $rates[0]['no_of_rates'],
					'all_rates' => $rates[0]['all_rates'],
					'total_rating' => $rates[0]['total_rating'],
					'1_star' => $rates[0]['1_star'],
					'2_star' => $rates[0]['2_star'],
					'3_star' => $rates[0]['3_star'],
					'4_star' => $rates[0]['4_star'],
					'5_star' => $rates[0]['5_star']
				);
				
				$data['rating'] = $rating;
				}
				//GET RATINGS OF CUSTOMER
				$table ="rating_customer";
				$rates = $this->hiremetrodbase->get_employee_information($id,$table);
				if($rates != 'false'){
					$rating = array(
					'no_of_rates' => $rates[0]['no_of_rates'],
					'all_rates' => $rates[0]['all_rates'],
					'total_rating' => $rates[0]['total_rating'],
					'1_star' => $rates[0]['1_star'],
					'2_star' => $rates[0]['2_star'],
					'3_star' => $rates[0]['3_star'],
					'4_star' => $rates[0]['4_star'],
					'5_star' => $rates[0]['5_star']
				);
				
				$data['rating_c'] = $rating;
				}
				// GET NOTIFICATION
				$table = "notifi";
				$notifs = $this->hiremetrodbase->get_notification_sorted($id);
				if($notifs != 'false'){
				foreach ($notifs as $n){
					//get associate name
					$table = "client_information";
					$assoc = $this->hiremetrodbase->get_employee_information($n['associate'],$table);
					$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
					
					$info = array(
						'type' => $n['type'],
						'associate' => $assocname,
						'associate_id' => $assoc[0]['client_id'],
						'date' => $n['date'],
						'status' => $n['status'],
						'notif_id' => $n['notification_id']
					);
					$notifics[] = $info;
				}
				$data['notification'] = $notifics;
				
				// GET ASSOCIATE 
				$this->session->set_userdata('associate', $assoc[0]['client_id']);
				}
				
				
				// GET ACTIVITY LOG
				$table = "activity_log";
				$act = $this->hiremetrodbase->get_employee_information($id,$table);
				if($act != 'false'){
				foreach($act as $a){
					//get associate name
					$table = "client_information";
					$assoc = $this->hiremetrodbase->get_employee_information($a['associate'],$table);
					$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
					
					$info = array(
						'type' => $a['type'],
						'associate' => $assocname,
						'date' => $a['date'],
					);
					$activity[] = $info; 
				}
				
				$data['activity'] = $activity;
				}
				// GET TRANSACTIONS
				$transact = $this->hiremetrodbase->get_transactions($id);
				if($transact != 'false'){
					foreach($transact as $t){
						//get associate name
						$table = "client_information";
						$assoc = $this->hiremetrodbase->get_employee_information($t['associate'],$table);
						$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
						
						$info = array(
							'type' => $t['type'],
							'associate' => $assocname,
							'date' => $t['date']
						);
						
						$transactions[] = $info;
					}
					
					$data['transactions'] = $transactions;
				}
				
				//GET REVIEWS
				$reviews = $this->hiremetrodbase->get_reviews($id);
				if($reviews != 'false'){
					foreach($reviews as $r){
						//get associate name
						$table = "client_information";
						$assoc = $this->hiremetrodbase->get_employee_information($r['client_id'],$table);
						$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
						$picture = $assoc[0]['picture'];
						
						$info = array(
							'type' => $r['type'],
							'content' => $r['content'],
							'associate' => $assocname,
							'rate' => $r['rate'],
							'date' => $r['date'],
							'picture' => $picture
						);
						
						$review[] = $info;
						}
					$data['reviews'] = $review;
				}
			
				//CHECK PICTURE
				if(empty($ci[0]['picture'])){
					$picture = '/images/default.png';
				}
				else{
					$picture = $ci[0]['picture'];
				}
				
				//CHECK IF IN ONGOING
				$result = $this->hiremetrodbase->check_ongoing($id);
				
				//SET SESSION
				$newdata = array(
                   'name'  => ($ci[0]['fname'].' '.$ci[0]['lname']),
				   'email'  => $this->input->post('email'),
                   'logged_in' => TRUE,
				   'id' => $id,
				   'picture' => $picture,
				   'ongoing' => $result
				);
				$this->session->set_userdata($newdata);
				
				//SET TITLE
				$data['title'] = "Hiremetro: Profile";
				
				$this->load->view('include/header', $data);
				$this->load->view('hiremetro/profile', $data);
				$this->load->view('include/footer', $data);
			}
			else{
				
				$data['login_error'] = 0;
			
				$data['title'] = "Hiremetro";	
		
				$result = $this->hiremetrodbase->get_indemand();
				
				// Get indemand jobs
				
				foreach($result as $r){
					$info = array(	
					'category_name' => $r['category_name'],
					'category_views' => $r['category_views'],
					'no_of_ads' => $r['no_of_ads'],
					'picture' => $r['picture']
					);
					
					$indemand[] = $info;
				}
				
				$data['indemand'] = $indemand;
				
				// GEt all ads number of jobs
				
				$result = $this->hiremetrodbase->get_ads();
				
				foreach ($result as $r){
					$info = array(
						'no_of_ads' => $r['no_of_ads']
					);
					
					$no_ads[] = $info;
				}
				
				$data['no_ads'] = $no_ads;
				
				$data['login_error_msg'] = "Wrong email or password";
				
				$this->load->view('include/header', $data);
				$this->load->view('hiremetro/home', $data);
				$this->load->view('include/footer', $data);
				
			}
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
	
	//SIGN UP
	public function signup(){
		
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		
		//RULES
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[login_credentials.email]');
		
		//MESSAGES
		$this->form_validation->set_message('is_unique', 'This %s already exists');
		$this->form_validation->set_message('required', 'The %s field is required');
		$this->form_validation->set_message('matches', 'Your %s does not match');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['title']="Hiremetro: Signup";
			
			$this->load->view('include/header', $data);
			$this->load->view('hiremetro/signup', $data);
			$this->load->view('include/footer', $data);
		}
		else
		{	
			// GET ID AND INCREMENT
			
			$table = "login_credentials";
			$id = $this->hiremetrodbase->getid($table);
			$id = $id+1;
			
			// Send data to database
			
			$data = array(
				'client_id' => $id,
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'location' => "",
				'contact' => "",
				'picture' => "images/user_image/default.png",
				'approve' => "none"
			);
			
			$table = "client_information";
			
			$this->hiremetrodbase->signup($data, $table);
			
			$data = array(
				'client_id' => $id,
				'email' => $this->input->post('email'),
				'password' => ($this->input->post('password')),
				'suspension' => 'None'
			);
			
			$table = "login_credentials";
			
			$this->hiremetrodbase->signup($data, $table);
			
			$info = array(
				'client_id' => $id
			);
			$table = "rating_customer";
			
			$this->hiremetrodbase->signup($info, $table);
			
			//SET SESSION
			$newdata = array(
			   'name'  => $this->input->post('fname').' '.$this->input->post('lname'),
			   'email'  => $this->input->post('email'),
               'logged_in' => TRUE,
			   'id' => $id,
			   'picture' => 'images/user_image/default'
			);
			$this->session->set_userdata($newdata);
			
			$this->index();
		}
		
	}
	
	//UPDATE EMPLOYEE's Ads
	public function update_ads(){
		
		// UPLOAD PROFILE PICTURE
		if($_FILES['picture']['size'] != 0){
		$config['upload_path'] = './images/user_image/'; //The path where the image will be save
		$config['allowed_types'] = 'jpeg|jpg|png'; //Images extensions accepted
		$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
		$this->load->library('upload', $config); //Load the upload CI library
			
		if (!$this->upload->do_upload('picture')){
			$uploadError = array('upload_error' => $this->upload->display_errors()); 
			$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
			exit;
		};
		
		$file_info = $this->upload->data('');
		$file_name = $file_info['file_name'];
		$picture = '/images/user_image/'.$file_name;
		
		//REPLACING SESSION Picture
		$this->session->set_userdata('picture', $picture);
		
		//RESIZE IMAGE UPLOAD
		$config['image_library'] = 'gd2';
        $config['source_image'] = $file_info['full_path'];
        $config['maintain_ratio'] = TRUE;
        $config['width']     = 164;
        $config['height']   = 163;

        $this->load->library('image_lib', $config); 

        $this->image_lib->resize();
		echo ' haha';
		}
        //UPLOAD RESUME
		if($_FILES['resume']['size'] != 0){
		$config['upload_path'] = './images/user_document/'; //The path where the image will be save
		$config['allowed_types'] = 'docx|pdf|doc'; //Images extensions accepted
		$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
		$this->load->library('upload', $config); //Load the upload CI library
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('resume')){
			$uploadError = array('upload_error' => $this->upload->display_errors()); 
			$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
			exit;
		};
		
		$file_info = $this->upload->data('');
		$file_name = $file_info['file_name'];
		$resume = $file_name;
		}
		
		//GET NEGOTIABLE
		
		if(isset($_POST['negotiable'])){
			$negotiable = "Yes";
		}else{
			$negotiable = "No";
		}
		
		//CHECK RESUME
		if(!isset($resume)){
			//GET CURRENT RESUME
			$id = $this->session->userdata('id');
			$table = "work_details";
			$wd = $this->hiremetrodbase->get_employee_information($id,$table);
			$resume = $wd[0]['resume'];
		}
		
		//GET OLD CATEGORY
		$id = $this->session->userdata('id');
		$table = "work_details";
		$categ = $this->hiremetrodbase->get_employee_information($id,$table);
		$categ = $categ[0]['category'];
		//GET CATEGORY NO OF ADS
		$no_of_ads = $this->hiremetrodbase->get_category_ads($categ);
		//DECREASE NO OF ADS
		$no_of_ads = $no_of_ads-1;
		//UPDATE CATEGORY
		$info = array(
			'no_of_ads' => $no_of_ads
		);
		$this->hiremetrodbase->update_category($categ,$info);
		
		//GET NEW CATEGORY
		$categ = $this->input->post('category');
		//GET CATEGORY NO OF ADS
		$no_of_ads = $this->hiremetrodbase->get_category_ads($categ);
		//INCREASE NO OF ADS
		$no_of_ads = $no_of_ads+1;
		//UPDATE CATEGORY
		$info = array(
			'no_of_ads' => $no_of_ads
		);
		$this->hiremetrodbase->update_category($categ,$info);
		
		
		//UPDATE DATABASE
		$id = $this->session->userdata('id');
		$table = "work_details"; 
		$info = array(
			'category' => $this->input->post('category'),
			'description' => $this->input->post('description'),
			'rate_type' => $this->input->post('rate_type'),
			'rate_price' => $this->input->post('rate_price'),
			'negotiable' => $negotiable,
			'resume' => $resume,
			'approve' => 'No',
			'status' => 'Hide'
		);
		
		$this->hiremetrodbase->update_details($id,$table,$info);
		
		//
		
		//GET CURRENT CLIENT INFORMATION
		$table = "client_information";
		$ci = $this->hiremetrodbase->get_employee_information($id,$table);
		
		//CHECK PICTURE
		if(!isset($picture)){
			$picture = $ci[0]['picture'];
		}
		
		$info = array(
			'fname' => $ci[0]['fname'],
			'lname' => $ci[0]['lname'],
			'location' => $this->input->post('location'),
			'contact' => $ci[0]['contact'],
			'picture' => $picture,
			'approve' => 'No'
		);
		
		$this->hiremetrodbase->update_details($id,$table,$info);
		
		$this->client_profile();
	}
	
	//CREATE EMPLOYEE's Ads
	public function create_ads(){
		
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		//RULES
		
		$this->form_validation->set_rules('rate_price', 'Work Rate', 'required');
		$this->form_validation->set_rules('description', 'Job Description', 'required');
		
		//RULE FOR PICTURE UPLOAD
		if($_FILES['picture']['size'] == 0){
			$this->form_validation->set_rules('picture', 'Picture', 'required');
		}
		
		//RULE FOR RESUME UPLOAD
		if($_FILES['resume']['size'] == 0){
			$this->form_validation->set_rules('resume', 'Resume', 'required');
		}
		
		//CHECKING FORM VALIDATION
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('http://localhost/hiremetro/hiremetro/client_profile');
		}
		else{
			
			//UPLOAD RESUME
			if($_FILES['resume']['size'] != 0){
			$config['upload_path'] = './images/user_document/'; //The path where the image will be save
			$config['allowed_types'] = 'docx|pdf|doc'; //Images extensions accepted
			$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
			$this->load->library('upload', $config); //Load the upload CI library
				
			if (!$this->upload->do_upload('resume')){
				$uploadError = array('upload_error' => $this->upload->display_errors()); 
				$this->set_flashdata('uploadError', $uploadError,  base_url('hiremetro/client_profile')); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
				exit;
			};
			
			$file_info = $this->upload->data('');
			$file_name = $file_info['file_name'];
			$resume = $file_name;
			};
			
			// UPLOAD PROFILE PICTURE
			if($_FILES['picture']['size'] != 0){
			$config['upload_path'] = './images/user_image/'; //The path where the image will be save
			$config['allowed_types'] = 'jpeg|jpg|png'; //Images extensions accepted
			$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
			$this->load->library('upload', $config); //Load the upload CI library
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('picture')){
				$uploadError = array('upload_error' => $this->upload->display_errors()); 
				$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
				exit;
			};
			
			$file_info = $this->upload->data('');
			$file_name = $file_info['file_name'];
			$picture = '/images/user_image/'.$file_name;
			
			
			//RESIZE IMAGE UPLOAD
			$config['image_library'] = 'gd2';
			$config['source_image'] = $file_info['full_path'];
			$config['maintain_ratio'] = TRUE;
			$config['width']     = 164;
			$config['height']   = 163;

			$this->load->library('image_lib', $config); 

			$this->image_lib->resize();
			};
			
			
			//GET NEGOTIABLE
			if(isset($_POST['negotiable'])){
				$negotiable = "Yes";
			}else{
				$negotiable = "No";
			}
			
			
			//INSERTING YOUR ADS TO THE DATABASE
			$table = "work_details";
			$id = $this->session->userdata('id');
			$info = array(
				'client_id' => $id,
				'category' => $this->input->post('category'),
				'description' => $this->input->post('description'),
				'views_number' => 0,
				'rate_type' => $this->input->post('rate_type'),
				'rate_price' => $this->input->post('rate_price'),
				'negotiable' => $negotiable,
				'resume' => $resume,
				'approve' => 'No',
				'status' => 'hide'
			);
			
			$this->hiremetrodbase->signup($info,$table);
			
			//GET NEW CATEGORY
			$categ = $this->input->post('category');
			//GET CATEGORY NO OF ADS
			$no_of_ads = $this->hiremetrodbase->get_category_ads($categ);
			//INCREASE NO OF ADS
			$no_of_ads = $no_of_ads+1;
			//UPDATE CATEGORY
			$info = array(
			'no_of_ads' => $no_of_ads
			);
			$this->hiremetrodbase->update_category($categ,$info);
			
			
			
			$info = array(
				'client_id' => $id
			);
			$table = "rating_employee";
			
			$this->hiremetrodbase->signup($info, $table);
			
			//LOCATION
			$table = "client_information";
			$id = $this->session->userdata('id');
			$info = array(
				'picture' => $picture,
				'location' => $this->input->post('location'),
			);
			$this->hiremetrodbase->update_details ($id,$table,$info);
			
			$this->session->set_userdata('picture', $picture);	
			
			$this->client_profile();
			
		}
		
	}
	
	//GOING BACK TO PROFILE
	public function client_profile(){
				// GET ID
				$id = $this->session->userdata('id');
				
				//GET CLIENT_INFORMATION
				$table = "client_information";
				$ci = $this->hiremetrodbase->get_employee_information($id,$table);
				
				$client_information = array(
					'fname' => $ci[0]['fname'],
					'lname' => $ci[0]['lname'],
					'location' => $ci[0]['location'],
					'contact' => $ci[0]['contact'],
					'picture' => $ci[0]['picture'],
					'approve' => $ci[0]['approve']
				);
				
				$data['client_information'] = $client_information;
				
				
				//GET WORK_DETAILS
				$table = "work_details";
				$wd = $this->hiremetrodbase->get_employee_information($id,$table);
				
				if($wd != 'false'){
					$work_details = array(
						'category' => $wd[0]['category'],
						'description' => $wd[0]['description'],
						'views_number' => $wd[0]['views_number'],
						'rate_type' => $wd[0]['rate_type'],
						'rate_price' => $wd[0]['rate_price'],
						'negotiable' => $wd[0]['negotiable']
					);
					$data['work_details'] = $work_details;
				}
				
				// GET EMAIL
				$table = "login_credentials";
				$lc = $this->hiremetrodbase->get_employee_information($id,$table);
				
				$data['email'] = $lc[0]['email'];
				
				// GET RATINGS OF LABORER
				$table ="rating_employee";
				$rates = $this->hiremetrodbase->get_employee_information($id,$table);
				if($rates != 'false'){
				$rating = array(
					'no_of_rates' => $rates[0]['no_of_rates'],
					'all_rates' => $rates[0]['all_rates'],
					'total_rating' => $rates[0]['total_rating'],
					'1_star' => $rates[0]['1_star'],
					'2_star' => $rates[0]['2_star'],
					'3_star' => $rates[0]['3_star'],
					'4_star' => $rates[0]['4_star'],
					'5_star' => $rates[0]['5_star']
				);
				
				$data['rating'] = $rating;
				}
				//GET RATINGS OF CUSTOMER
				$table ="rating_customer";
				$rates = $this->hiremetrodbase->get_employee_information($id,$table);
				$rating = array(
					'no_of_rates' => $rates[0]['no_of_rates'],
					'all_rates' => $rates[0]['all_rates'],
					'total_rating' => $rates[0]['total_rating'],
					'1_star' => $rates[0]['1_star'],
					'2_star' => $rates[0]['2_star'],
					'3_star' => $rates[0]['3_star'],
					'4_star' => $rates[0]['4_star'],
					'5_star' => $rates[0]['5_star']
				);
				
				$data['rating_c'] = $rating;
				
				// GET NOTIFICATION
				$notifs = $this->hiremetrodbase->get_notification_sorted($id);
				if($notifs != 'false'){
				foreach ($notifs as $n){
					//get associate name
					$table = "client_information";
					$assoc = $this->hiremetrodbase->get_employee_information($n['associate'],$table);
					$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
					
					$info = array(
						'type' => $n['type'],
						'associate' => $assocname,
						'date' => $n['date'],
						'status' => $n['status'],
						'associate_id' => $assoc[0]['client_id'],
						'notif_id' => $n['notification_id']
					);
					$notifics[] = $info;
				}
				
				$data['notification'] = $notifics;
				}
				// GET ACTIVITYLOG
				$table = "activity_log";
				$act = $this->hiremetrodbase->get_employee_information($id,$table);
				if($act != 'false'){
				foreach($act as $a){
					//get associate name
					$table = "client_information";
					$assoc = $this->hiremetrodbase->get_employee_information($a['associate'],$table);
					$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
					
					$info = array(
						'type' => $a['type'],
						'associate' => $assocname,
						'date' => $a['date'],
					);
					$activity[] = $info; 
				}
				
				$data['activity'] = $activity;
				}
				// GET TRANSACTIONS
				$transact = $this->hiremetrodbase->get_transactions($id);
				if($transact != 'false'){
					foreach($transact as $t){
						//get associate name
						$table = "client_information";
						$assoc = $this->hiremetrodbase->get_employee_information($t['associate'],$table);
						$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
						
						$info = array(
							'type' => $t['type'],
							'associate' => $assocname,
							'date' => $t['date']
						);
						
						$transactions[] = $info;
					}
					
					$data['transactions'] = $transactions;
				}
				
				//GET REVIEWS
				$reviews = $this->hiremetrodbase->get_reviews($id);
				if($reviews != 'false'){
					foreach($reviews as $r){
						//get associate name
						$table = "client_information";
						$assoc = $this->hiremetrodbase->get_employee_information($r['client_id'],$table);
						$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
						$picture = $assoc[0]['picture'];
						
						$info = array(
							'type' => $r['type'],
							'content' => $r['content'],
							'associate' => $assocname,
							'rate' => $r['rate'],
							'date' => $r['date'],
							'picture' => $picture
						);
						
						$review[] = $info;
					}
				
				
				$data['reviews'] = $review;
				}
				//SET TITLE
				$data['title'] = "Hiremetro: Profile";
				
				$this->load->view('include/header', $data);
				$this->load->view('hiremetro/profile', $data);
				$this->load->view('include/footer', $data);
	}
	
	//UPDATE CLIENT INFORMATION
	public function update_information(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		//RULES
		
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Password', 'required|matches[password]');
		$this->form_validation->set_rules('contact', 'Mobile number', 'required');
		
		//MESSAGES
		$this->form_validation->set_message('is_unique', 'This %s already exists');
		$this->form_validation->set_message('required', 'The %s field is required');
		$this->form_validation->set_message('matches', 'Your %s does not match');
		
		//CHECKING FORM VALIDATION
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('http://localhost/hiremetro/hiremetro/client_profile');
		}
		else{
			
			// UPLOAD PROFILE PICTURE
			if($_FILES['userfile']['size'] != 0){
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
			$picture = '/images/user_image/'.$file_name;
			
			//REPLACING SESSION Picture
			$this->session->set_userdata('picture', $picture);
			
			//RESIZE IMAGE UPLOAD
			$config['image_library'] = 'gd2';
			$config['source_image'] = $file_info['full_path'];
			$config['maintain_ratio'] = TRUE;
			$config['width']     = 164;
			$config['height']   = 163;

			$this->load->library('image_lib', $config); 

			$this->image_lib->resize();
			};
			
			//GET CURRENT CLIENT INFORMATION
			$id = $this->session->userdata('id');
			$table = "client_information";
			$ci = $this->hiremetrodbase->get_employee_information($id,$table);
			
			//CHECK PICTURE
			if(!isset($picture)){
				$picture = $ci[0]['picture'];
			}
			
			// Send data to database
			$id = $this->session->userdata('id');
			$table = "client_information"; 
			$info = array(
				'client_id' => $id,
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'contact' => $this->input->post('contact'),
				'picture' => $picture,
				'approve' => "No"
			);
			
			$this->hiremetrodbase->update_details($id,$table,$info);
			
			$table = "login_credentials";
			$info = array(
				'client_id' => $id,
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			);
			
			$this->hiremetrodbase->update_details($id,$table,$info);
			
			//SET SESSION
			$newdata = array(
			   'name'  => ($this->input->post('fname').' '.$this->input->post('lname')),
			   'email'  => $this->input->post('email'),
               'logged_in' => TRUE,
			   'id' => $id,
			   'picture' => $picture
			);
			$this->session->set_userdata($newdata);
			
			$this->client_profile();
		}
	}
	
	//VIEW EMPLOYEE ADS
	public function view_ads(){
		$data['title'] = "Hiremetro: Ads";
		
		$id = $_GET['id'];
		
		//GET CLIENT INFORMATION
		$table = "client_information";
		$ci = $this->hiremetrodbase->get_employee_information($id,$table);
		
		$client_information = array(
			'client_id' => $ci[0]['client_id'],
			'fname' => $ci[0]['fname'],
			'lname' => $ci[0]['lname'],
			'location' => $ci[0]['location'],
			'picture' => $ci[0]['picture'], 
		);
		
		$data['client_information'] = $client_information;
		
		//GET WORK DETAILS
		$table = "work_details";
		$wd = $this->hiremetrodbase->get_employee_information($id,$table);
		
		$work_details = array(
			'category' => $wd[0]['category'],
			'rate_type' => $wd[0]['rate_type'],
			'rate_price' => $wd[0]['rate_price'],
			'negotiable' => $wd[0]['negotiable'],
			'resume' => $wd[0]['resume']
		);
		
		$data['work_details'] = $work_details;
		
		//GET RATING 
		$table = "rating_employee";
		$rate = $this->hiremetrodbase->get_employee_information($id,$table);
		
		$rating = array(
			'total_rating' => $rate[0]['total_rating'],
			'1_star' => $rate[0]['1_star'],
			'2_star' => $rate[0]['2_star'],
			'3_star' => $rate[0]['3_star'],
			'4_star' => $rate[0]['4_star'],
			'5_star' => $rate[0]['5_star'],
			'no_of_rates' => $rate[0]['no_of_rates']
		);
		
		$data['rating'] = $rating;
		
		//GET REVIEWS
		$revs = $this->hiremetrodbase->get_reviews($id);
		if($revs != 'false'){
			foreach($revs as $r){
				if($r['type'] != 'Employee'){
					$table = "client_information";
					$assoc = $this->hiremetrodbase->get_employee_information($r['client_id'],$table);
					$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
					$picture = $assoc[0]['picture'];
					
					$info = array(
						'content' => $r['content'],
						'rate' => $r['rate'],
						'date' => $r['date'],
						'associate' => $assocname,
						'picture' => $picture
					);
					
					$reviews[] = $info;
				} 
			};
			if(isset($reviews)){
			$data['reviews'] = $reviews;
			}
		}
		
		$this->load->view('include/header',$data);
		$this->load->view('hiremetro/ads',$data);
		$this->load->view('include/footer',$data);
	}
	
	//DOWNLOAD FILE
	public function download($fileName = NULL){
		
		$data = file_get_contents(base_url('/images/user_document/'.$filename));
		force_download ($fileName, $data);
	}
	
	//HIRING EMPLOYEES
	public function hire_employee(){
		
		//Insert on activity log
		$table = "activity_log";
		$associate = $_POST['associate'];
		$latest_id = $this->hiremetrodbase->get_id_activity_log();
		$info = array(
			'activity_id' => $latest_id+1,
			'client_id' => $this->session->userdata('id'),
			'type' => 'you sent',
			'associate' => $associate,
			'date' => date("Y-m-d h:ia")
		);
		
		$this->hiremetrodbase->signup($info, $table);
		
		//Insert on notification
		$table = "notifi";
		$latest_id = $this->hiremetrodbase->get_id_notification();
		$info = array(
			'notification_id' => $latest_id+1,
			'client_id' => $associate,
			'type' => 'hire you',
			'associate' => $this->session->userdata('id'),
			'date' => date("Y-m-d h:ia"),
			'status' => 'unseen'
		);
		
		$this->hiremetrodbase->signup($info, $table);
		
		//Insert id's on ongoing
		$table = "ongoing";
		$info = array(
			'client_id' => $this->session->userdata('id'),
		);
		$this->hiremetrodbase->signup($info, $table);
		
		$this->session->set_userdata('ongoing', 'yes');
		
		$info = array(
			'client_id' => $associate,
		);
		$this->hiremetrodbase->signup($info, $table);
		
		//Insert payment
		$table = "payments";
		$latest_id = $this->hiremetrodbase->get_id_payment();
		$info = array(
			'payment_no' => $latest_id+1,
			'sender' => $this->session->userdata('id'),
			'price' => $this->session->userdata('down'),
			'date' => date("Y-m-d h:ia")
		);
		$this->hiremetrodbase->signup($info, $table);
		
		$this->session->set_flashdata('payment', $latest_id);
		
		//HIDE AD
		$table = "work_details";
		$info = array(
			'status' => 'hide'
		);
		$this->hiremetrodbase->update_details($associate,$table,$info);
		
		$this->session->set_userdata('associate', $associate);
		
		$this->client_profile();
	}
	
	//CLICK ON VIEW HIRING REQUEST
	public function hiring_request(){
		
		$data['title'] = "Hiremetro";
		
		$this->session->set_userdata('employer', $_GET['id']);
		$id = $_GET['id'];
		
		//GET EMPLOYER INFORMATION
		$table = "client_information";
		$result = $this->hiremetrodbase->get_employee_information($id,$table);
		$info = array(
			'fname' => $result[0]['fname'],
			'lname' => $result[0]['lname'],
			'picture' => $result[0]['picture']
		);
		
		$data['client_information'] = $info;
		
		//GET EMPLOYER RATINGS (AS CUSTOMER)
		$table = "rating_customer";
		$result = $this->hiremetrodbase->get_employee_information($id,$table);
		$info = array(
			'no_of_rates' => $result[0]['no_of_rates'],
			'all_rates' => $result[0]['all_rates'],
			'total_rating' => $result[0]['total_rating'],
			'1_star' => $result[0]['1_star'],
			'2_star' => $result[0]['2_star'],
			'3_star' => $result[0]['3_star'],
			'4_star' => $result[0]['4_star'],
			'5_star' => $result[0]['5_star'],
		);
		
		$data['rating'] = $info;
		
		//GET LATEST REVIEWS FROM EMPLOYEE
		$result = $this->hiremetrodbase->get_reviews($this->session->userdata('employer'));
		if($result!='false'){
			foreach($result as $r){
				//get associate
				$table = "client_information";
				$assoc = $this->hiremetrodbase->get_employee_information($r['client_id'],$table);
				$assocname = $assoc[0]['fname'].' '.$assoc[0]['lname'];
				$info = array(
					'associate' => $assocname,
					'type' => $r['type'],
					'content' => $r['content'],
					'rate' => $r['rate'],
					'date' => $r['date'],
					'picture' => $assoc[0]['picture']
				);
				$reviews[] = $info;
			}
			$data['reviews'] = $reviews;
		}
		
		$this->session->userdata('associate', $id);
		
		$this->load->view('include/header',$data);
		$this->load->view('hiremetro/profile_employer',$data);
		$this->load->view('include/footer',$data);
	}
	
	//CLICK ACCEPT HIRING REQUEST
	public function accept_request(){
		
		$id = $this->session->userdata('id');
		$associate_id = $this->session->userdata('employer');
		
		//INSERT ON ACTIVITY LOG 
		$table = "activity_log";
		$latest_id = $this->hiremetrodbase->get_id_activity_log();
		$info = array(
			'activity_id' => $latest_id+1,
			'client_id' => $id,
			'type' => 'you accepted',
			'associate' => $associate_id,
			'date' => date("Y-m-d h:ia")
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		//INSERT ON NOTIFICATION
		$table = "notifi";
		$latest_id = $this->hiremetrodbase->get_id_notification();
		$info = array(
			'notification_id' => $latest_id+1,
			'client_id' => $associate_id,
			'type' => 'accepted',
			'associate' => $id,
			'date' => date("Y-m-d h:ia"),
			'status' => 'unseen'
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		$notif_id = $latest_id;
		$info = array(
			'status' => 'seen'
		);
		
		$this->hiremetrodbase->update_notification_status($info,$info_id);
		
		//TRANSACTION
		$table = "transactions";
		$latest_id = $this->hiremetrodbase->get_id_transactions();
		$info = array(
			'transaction_no' => $latest_id+1,
			'client_id' => $id,
			'type' => 'Employee',
			'associate' => $associate_id,
			'date' => date("Y-m-d h:ia"),
			'status' => 'Ongoing'
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		$info = array(
			'transaction_no' => $latest_id+2,
			'client_id' => $associate_id,
			'type' => 'Customer',
			'associate' => $id,
			'date' => date("Y-m-d h:ia"),
			'status' => 'Ongoing'
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		$this->client_profile();
		
	}
	
	//CLICK IGNORE HIRING REQUEST
	public function ignore_request(){
		
		//NOTIFICATION
		$latest_id = $this->hiremetrodbase->get_id_notification();
		$info = array(
			'status' => 'seen-out'
		);
		
		$this->hiremetrodbase->update_notification_status($info,$latest_id);
		
		$table="notifi";
		$info = array(
			'notification_id' => $latest_id+1,
			'client_id' => $this->session->userdata('associate'),
			'type' => 'ignore',
			'associate' => $this->session->userdata('id'),
			'date' => date("Y-m-d h:ia"),
			'status' => 'unseen'
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		//DELETE ONGOING
		$this->hiremetrodbase->delete_ongoing($this->session->userdata('id'));
		$this->hiremetrodbase->delete_ongoing($this->session->userdata('associate'));
		
		//DELETE PAYMENT
		$this->hiremetrodbase->delete_payments($this->session->flashdata('payment'));
		
		//SHOW AD
		$table = "work_details";
		$info = array(
			'status' => 'show'
		);
		$this->hiremetrodbase->update_details($this->session->userdata('associate'),$table,$info);
		
		$this->session->userdata('ongoing', 'no');
		
		$this->client_profile();
	}
	
	//CLICK VIEW CONTACT DETAILS
	public function hiring_view_contact(){
		
		$id = $_GET['id'];
		
		// GET EMPLOYEE's CONTACT DETAILS
		$table = "client_information";
		$result = $this->hiremetrodbase->get_employee_information($id,$table);
		$info = array(
			'name' => $result[0]['fname'].' '.$result[0]['lname'],
			'picture' => $result[0]['picture'],
			'contact' => $result[0]['contact']
		);
		
		$newdata = array(
			'aname' => $info['name'],
			'apicture' => $info['picture'],
			'acontact' => $info['contact']
 		);
		
		$this->session->set_flashdata($newdata);
		
		//INSERT NOTIFICATION
		$table = "notifi";
		$latest_id = $this->hiremetrodbase->get_id_notification();
		$info = array(
			'notification_id' => $latest_id+1,
			'client_id' => $this->session->userdata('id'),
			'type' => 'write review - customer',
			'associate' => $id,
			'date' => date("Y-m-d h:ia"),
			'status' => 'unseen'
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		$info = array(
			'notification_id' => $latest_id+2,
			'client_id' => $id,
			'type' => 'write review - employee',
			'associate' => $this->session->userdata('id'),
			'date' => date("Y-m-d h:ia"),
			'status' => 'unseen'
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		//DELETE NOTIFICATION
		$notif = $_GET['notif'];
		$this->hiremetrodbase->delete_notification($notif);
		
		//REDIRECT
		redirect('http://localhost/hiremetro/hiremetro/client_profile');
		
	}
	
	//SUBMIT REVIEWS
	public function submit_review(){
		
		//INITIALIZE EVERYTHING
		if($_POST['role'] == 'employee'){
			$not = "wrote review - employee";	
			$rev = "employee";
		}
		elseif($_POST['role'] == 'employer'){
			$not = "wrote review - employer";
			$rev = "customer";
		}
		
		//ACTIVITY LOG 
		$table = "activity_log";
		$latest_id = $this->hiremetrodbase->get_id_activity_log();
		$info = array(
			'activity_id' => $latest_id+1,
			'client_id' => $this->session->userdata('id'),
			'type' => 'you wrote',
			'associate' => $this->session->userdata('associate'),
			'date' => date("Y-m-d h:ia")
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		//NOTIFICATION
		$table = "notifi";
		$latest_id = $this->hiremetrodbase->get_id_notification();
		$info = array(
			'notification_id' => $latest_id+1,
			'client_id' => $this->session->userdata('associate'),
			'type' => $not,
			'associate' => $this->session->userdata('id'),
			'date' => date("Y-m-d h:ia"),
			'status' => 'unseen'
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		$notif_id = $latest_id;
		$info = array(
			'status' => 'seen'
		);
		
		$this->hiremetrodbase->update_notification_status($info,$notif_id);
		
		//DELETE ONGOING
		$this->hiremetrodbase->delete_ongoing($this->session->userdata('id'));
		
		//RECORD RATING
		if($_POST['role'] == 'employee'){
			$id = $this->session->userdata('associate');
			$employer_rating = $this->hiremetrodbase->get_employee_information($id,'rating_customer');
			$no_of_rates = $employer_rating[0]['no_of_rates']+1;
			$all_rates = $employer_rating[0]['all_rates'] + $_POST['star'];
			$info = array(
				'no_of_rates' => $no_of_rates,
				'all_rates' => $all_rates,
				'total_rating' => $all_rates/$no_of_rates,
			);
			if($_POST['star'] == 1){
				$info['1_star'] = $employer_rating[0]['1_star']+1;
			}
			elseif($_POST['star'] == 2){
				$info['2_star'] = $employer_rating[0]['2_star']+1;
			}
			elseif($_POST['star'] == 3){
				$info['3_star'] = $employer_rating[0]['3_star']+1;
			}
			elseif($_POST['star'] == 4){
				$info['4_star'] = $employer_rating[0]['4_star']+1;
			}
			elseif($_POST['star'] == 5){
				$info['5_star'] = $employer_rating[0]['5_star']+1;
			}
			
			$this->hiremetrodbase->update_details($id,'rating_customer',$info);
		}
		elseif($_POST['role'] == 'employer'){
			$id = $this->session->userdata('associate');
			$employee_rating = $this->hiremetrodbase->get_employee_information($id,'rating_employee');
			$no_of_rates = $employee_rating[0]['no_of_rates']+1;
			$all_rates = $employee_rating[0]['all_rates'] + $_POST['star'];
			$info = array(
				'no_of_rates' => $no_of_rates,
				'all_rates' => $all_rates,
				'total_rating' => $all_rates/$no_of_rates,
			);
			if($_POST['star'] == 1){
				$info['1_star'] = $employee_rating[0]['1_star']+1;
			}
			elseif($_POST['star'] == 2){
				$info['2_star'] = $employee_rating[0]['2_star']+1;
			}
			elseif($_POST['star'] == 3){
				$info['3_star'] = $employee_rating[0]['3_star']+1;
			}
			elseif($_POST['star'] == 4){
				$info['4_star'] = $employee_rating[0]['4_star']+1;
			}
			elseif($_POST['star'] == 5){
				$info['5_star'] = $employee_rating[0]['5_star']+1;
			}
			
			$this->hiremetrodbase->update_details($id,'rating_employee',$info);
		}
		
		//REVIEWS
		$table = "review";
		$latest_id = $this->hiremetrodbase->get_id_review();
		$info = array(
			'review_id' => $latest_id+1,
			'client_id' => $this->session->userdata('id'),
			'type' => $rev,
			'content' => $_POST['review'],
			'receiver' => $this->session->userdata('associate'),
			'rate' => $_POST['star'],
			'date' => date("Y-m-d h:ia")
		);
		
		$this->hiremetrodbase->signup($info,$table);
		
		//TRANSACTIONS DONE
		$table = "transactions";
		$info = array(
			'status' => 'Done'
		);
		
		$whe = array(
			'client_id' => $this->session->userdata('id'),
			'status' => 'Ongoing'
		);
		
		$this->hiremetrodbase->update_transaction($whe,$info);
		
		//WORK DETAILS STATUS SHOW
		$table = "work_details";
		$info = array(
			'status' => 'show'
		);
		$id = $this->session->userdata('id');
		
		$this->hiremetrodbase->update_details($id,$table,$info);
		
		$this->client_profile();
		
	}

	//LOGOUT
	public function logout(){
			$this->session->sess_destroy();
			$this->session->set_userdata('logged_in', FALSE);
			
			$data['title'] = "Hiremetro";	
		
		$result = $this->hiremetrodbase->get_indemand();
		
		// Get indemand jobs
		
		foreach($result as $r){
			$info = array(	
			'category_name' => $r['category_name'],
			'category_views' => $r['category_views'],
			'no_of_ads' => $r['no_of_ads'],
			'picture' => $r['picture']
			);
			
			$indemand[] = $info;
		}
		
		$data['indemand'] = $indemand;
		
		// GEt all ads number of jobs
		
		$result = $this->hiremetrodbase->get_ads();
		
		foreach ($result as $r){
			$info = array(
				'no_of_ads' => $r['no_of_ads']
			);
			
			$no_ads[] = $info;
		}
		
		$data['no_ads'] = $no_ads;
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/home', $data);
		$this->load->view('include/footer', $data);
			
	}
	
	//REVIEW CHECK IF REVIEWED OR NOT
	public function review_check(){
		$notif = $_GET['notif_id'];
		
		//GET WHOLE NOTIFICATION DETAILS
		$not = $this->hiremetrodbase->get_notification_detail($notif);
		
		//GET ASSOCIATE
		$associate = $not[0]['associate'];
		
		//CHECK ASSOCIATE 
		
		
	}
	
	//SEARCH
	
	public function search(){
		$data['title']= "Hiremetro";
		
		if(isset($_POST['Search'])){
			$valueToSearch = $_POST['search'];
			
			$result = $this->hiremetrodbase->search_employees($valueToSearch);
			
			$employees = null;
			
			if($result != 'false'){
				if(!isset($_POST['Sort']) || $_POST['Sort'] == 'All'){
				foreach($result as $r){
					
					$id = $r['client_id'];
					$table = "work_details";
					$wd = $this->hiremetrodbase->get_employee_information($id,$table);
					$table = "rating_employee";
					$rating = $this->hiremetrodbase->get_employee_information($id,$table);
					$info = array(
						'client_id' => $r['client_id'],
						'lname' => $r['lname'],
						'fname' => $r['fname'],
						'location' => $r['location'],
						'category' => $wd[0]['category'],
						'rate_type' => $wd[0]['rate_type'],
						'rate_price' => $wd[0]['rate_price'],
						'picture' => $r['picture'],
						'description' => $wd[0]['description'],
						'total_rating' => $rating[0]['total_rating']
					);
					$employees[] = $info;
				}
				$data['employees'] = $employees;
				}
				else{
					// order by ratings
					$sort = $this->hiremetrodbase->sort_ratings();
					
					foreach($sort as $s){
						foreach($result as $r){
							if($r['client_id'] == $s['client_id']){
								$id = $r['client_id'];
								$table = "work_details";
								$wd = $this->hiremetrodbase->get_employee_information($id,$table);
								
								$info = array(
									'client_id' => $r['client_id'],
									'lname' => $r['lname'],
									'fname' => $r['fname'],
									'location' => $r['location'],
									'category' => $wd[0]['category'],
									'rate_type' => $wd[0]['rate_type'],
									'rate_price' => $wd[0]['rate_price'],
									'picture' => $r['picture'],
									'description' => $wd[0]['description'],
									'total_rating' => $s['total_rating'],
									'status' => $wd[0]['status']
								);
								$employees[] = $info;
								break;
							}
							
						}
					}
					$data['employees'] = $employees;
				}
			}
			else{
				$data['noresult'] = "No results found";
			}
			}
			elseif(isset($_GET['category'])){
				$category = $_GET['category'];
				
				$result = $this->hiremetrodbase->search_category($category);
				
				if($result != 'false'){
				
				foreach($result as $r){
					
						$id = $r['client_id'];
						$table = "client_information";
						$ei = $this->hiremetrodbase->get_employee_information($id,$table);
						$table = "rating_employee";
						$rating = $this->hiremetrodbase->get_employee_information($id,$table);
						$info = array(
							'client_id' => $r['client_id'],
							'lname' => $ei[0]['lname'],
							'fname' => $ei[0]['fname'],
							'location' => $ei[0]['location'],
							'category' => $r['category'],
							'rate_type' => $r['rate_type'],
							'rate_price' => $r['rate_price'],
							'picture' => $ei[0]['picture'],
							'description' => $r['description'],
							'total_rating' => $rating[0]['total_rating'],
							'status' => $r['status']
						);
						$employees[] = $info;
					}
					$data['employees'] = $employees;
				}
				else{
					$data['noresult'] = "No results found";
				}
			}
			
		
		
		
		if(isset($_POST['search'])){
			$data['search'] = $_POST['search'];
		}
		else{
			$data['search'] = $_GET['category']; 
		}
		
		// GEt all ads number of jobs
		
		$result = $this->hiremetrodbase->get_ads();
		
		foreach ($result as $r){
			$info = array(
				'no_of_ads' => $r['no_of_ads']
			);
			
			$no_ads[] = $info;
		}
		
		$data['no_ads'] = $no_ads;
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/filter', $data);
		$this->load->view('include/footer', $data);
	}
	
	//SEND REPORT
	public function send_report(){
	
		$content = $_POST['content'];
		$id = $_POST['client_id'];
		$latest_id = $this->hiremetrodbase->get_id_report();
		
		$table = "reports";
		$info = array (
			'report_id' => $latest_id+1,
			'client_id' => $id,
			'content' => $content,
			'date' => date("Y-m-d ")
		);
		$this->hiremetrodbase->signup($info,$table);
		
		$this->index();

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
		
		$data['title'] = "Hiremetro: Ads";
		
		$this->load->view('include/header', $data);
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
		
		$data['title'] = "Hiremetro: Profile";
		
		$this->load->view('include/header', $data);
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
		
		$data['title'] = "Hiremetro: Profile";
		
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
			
			$data['title'] = "Hiremetro: Profile";
			
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
		
		$data['title'] = "Hiremetro: Faqs";
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/faqs', $data);
		$this->load->view('include/footer');
		
	}
	
	public function deactivate(){
		$id = $this->session->userdata('id');
		
		$this->hiremetrodbase->deactivate($id);
		$this->session->sess_destroy();
		$this->session->set_userdata('logged_in', FALSE);
		
		$data['title'] = "Hiremetro";
		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/home', $data);
		$this->load->view('include/footer');
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
	
	public function admin(){
		$data['title'] = "Hiremetro";
		$total = 0;
		
		//GET ACCOUNTS PER CATEGORY
		$result = $this->hiremetrodbase->count_category('Bartender');
		
		foreach($result as $r){
			$info = array(
				'no_of_ads' => $r['no_of_ads']
			);
			$category[] = $info;
			$total = $total+$info['no_of_ads'];
		}
			
		$data['category'] = $category;
		$data['total'] = $total;
		
		$this->load->view('include/header_admin', $data);
		$this->load->view('hiremetro/admin_dashboard', $data);
	}
	
	public function admin_profiles(){
		
		$data['title'] = "Hiremetro";
		
		if(!empty($_GET['category']) && !empty($_GET['search'])){
			
			$category = $_GET['category'];
			if($category != 'All'){
				
				$search = $_GET['search'];
				
				$result_search = $this->hiremetrodbase->admin_profiles_search($search);
				$result_category = $this->hiremetrodbase->search_category($category);
				
				$profiles = null;
				
				foreach($result_search as $s){
					foreach($result_category as $c){
						if($c['client_id'] == $s['client_id']){
							$info = array(
								'client_id' => $c['client_id'],
								'name' => (' '.$s['fname'].' '.$s['lname']),
								'location' => $s['location'],
								'contact' => $s['contact'],
								'category' => $c['category']
							);
							$profiles[] = $info;
							break;
						}
					}
				}
				if($profiles == null){
					$data['profiles'] = 'null';
				}else{
					$data['profiles'] = $profiles;
				}
			}
			else{
				$search = $_GET['search'];
				
				$result_search =  $this->hiremetrodbase->admin_profiles_search($search);
				
				foreach($result_search as $s){
					$wd = $this->hiremetrodbase->admin_profiles_2($s['employee_id']);
					
					$info = array(
						'client_id' => $s['client_id'],
						'name' => (''.$s['fname'].' '.$s['lname']),
						'location' => $s['location'],
						'contact' => $s['contact'],
						'category' => $wd[0]['category']
					);
					$profiles[] = $info;
				}
				
				$data['profiles'] = $profiles;
				
			}
		}
		elseif(!empty($_GET['category']) && $_GET['category'] != 'All'){
			
			$category = $_GET['category'];
				
				$result = $this->hiremetrodbase->search_category($category);
				
				if($result != 'false'){
					foreach($result as $r){
						$table = "client_information";
						$ei = $this->hiremetrodbase->get_employee_information($r['client_id'], $table);
						
						$info = array(
							'client_id' => $r['client_id'],
							'name' => (' '.$ei[0]['fname'].' '.$ei[0]['lname']),
							'location' => $ei[0]['location'],
							'contact' => $ei[0]['contact'],
							'category' => $r['category']
						);
						$profiles[] = $info;
					}
					
					$data['profiles'] = $profiles;
				}
				else{
					$data['profiles'] = 'null';
				};
			
		}	
		else{
			$ei = $this->hiremetrodbase->admin_profiles();
			
			foreach($ei as $e){
				$wd = $this->hiremetrodbase->admin_profiles_2($e['client_id']);
				
				$info = array(
					'client_id' => $e['client_id'],
					'name' => (' '.$e['fname'].' '.$e['lname']),
					'location' => $e['location'],
					'contact' => $e['contact'],
					'category' => $wd[0]['category']
				);
				$profiles[] = $info;
			}
			
			$data['profiles'] = $profiles;
		};
		
		$this->load->view('include/header_admin', $data);
		$this->load->view('hiremetro/admin_profile', $data);
		
	}
	
	public function admin_reports(){
		$data['title'] = "Hiremetro";		
		
		if(isset($_GET['view'])){
			
			$id = $_GET['id'];
		
			$reports = $this->hiremetrodbase->admin_report_messages($id);
		
			foreach($reports as $r){
				
				$info = array(
					'report_id' => $r['report_id'],
					'client_id' => $id,
					'report_body' => $r['content'],
					'report_date' => $r['date']
				);
				
				$report[] = $info;
			};
			
			$data['message'] = $report;
		};
		
		if(isset($_GET['delete'])){
			$id = $_GET['id'];
			
			$this->hiremetrodbase->admin_report_delete($id);
		}
		
		$report = $this->hiremetrodbase->admin_reports();
		
		$id = 0;
		
		if($report != 'false'){
		foreach($report as $r){
					if($id != $r['client_id']){
					$name = $this->hiremetrodbase->admin_report_name($r['client_id']);
					$work_title = $this->hiremetrodbase->admin_report_work($r['client_id']);
					$num_reports = $this->hiremetrodbase->admin_report_nos($r['client_id']);
					
					$reports = array(
						'name' => $name,
						'work_title' => $work_title,
						'num_reports' => $num_reports,
						'employee_id' => $r['client_id']
					);
					
					$reports1[] = $reports;
				}
				$id = $r['client_id'];
		}
		$data['reports'] = $reports1;
		}
		
		
		$this->load->view('include/header_admin', $data);
		$this->load->view('hiremetro/admin_reports', $data);
	}
	
	public function admin_suggestions(){
		$data['title'] = "Hiremetro";	
		
		if(isset($_GET['delete'])){
			$id = $_GET['id'];
			$this->hiremetrodbase->admin_suggestions_delete($id);
		}
		
		$results = $this->hiremetrodbase->get_suggestions();
		if($results != 'false'){
		foreach($results as $r){
			$info = array(
			'subject' => $r['subject'],
			'content' => $r['content'],
			'date' => $r['date']
			);
			$suggestions[] = $info;
		}
		$data['suggestions'] = $suggestions;
		};
		
		
		$this->load->view('include/header_admin', $data);
		$this->load->view('hiremetro/admin_suggestions', $data);
	}
	public function admin_message(){
		$data['title'] = "Hiremetro";
		
		$id = $_GET['id'];
		
		$result = $this->hiremetrodbase->admin_message($id);
		
		$info = array (
			'suggestion_id' => $result[0]['suggestion_id'],
			'subject' => $result[0]['subject'],
			'date' => $result[0]['date'],
			'suggestion' => $result[0]['suggestion'],
			'viewed' => $result[0]['viewed']
		);
		
		if($info['viewed'] != 1){
			$info['viewed'] = 1;
			$this->hiremetrodbase->admin_message_update($id, $info);
		}
		
		$data['suggestion'] = $info;
		
		$this->load->view('include/header_admin', $data);
		$this->load->view('hiremetro/admin_message', $data);
	}
	public function admin_settings(){
		$data['title'] = "Hiremetro";	
		
		// $table = "login_credentials";
		// $admin = $this->hiremetrodbase->admin_settings($table);
		// $table = "admin";
		// $accounts = $this->hiremetrodbase->admin_settings($table);
		
		// $admin = array(
			// 'username' => $admin[0]['username'],
			// 'password' => $admin[0]['password'],
			// 'email' => $admin[0]['email'],
			// 'facebook' => $accounts[0]['account'],
			// 'twitter' => $accounts[1]['account'],
			// 'gmail' => $accounts[2]['account']
		// );
		
		// if(isset($_POST['username'])){
			// $update = array(
				// 'employee_id' => 0,
				// 'username' => $_POST['username'],
				// 'password' => $admin['password'],
				// 'email' => $admin['email']
			// );
			// $admin['username'] = $_POST['username'];
			// $this->hiremetrodbase->admin_settings_update($update);
		// }
		
		// if(isset($_POST['password'])){
			// $update = array(
				// 'employee_id' => 0,
				// 'username' => $admin['username'],
				// 'password' => $_POST['password'],
				// 'email' => $admin['email']
			// );
			// $admin['password'] = $_POST['password'];
			// $this->hiremetrodbase->admin_settings_update($update);
		// }
		
		// if(isset($_POST['email'])){
			// $update = array(
				// 'employee_id' => 0,
				// 'username' => $admin['username'],
				// 'password' => $admin['password'],
				// 'email' => $_POST['email']
			// );
			// $admin['email'] = $_POST['email'];
			// $this->hiremetrodbase->admin_settings_update($update);
		// }
		// if(isset($_POST['account'])){
			// $update = array(
				// 'social_id' => 0,
				// 'social_media' => 'facebook',
				// 'account' => $_POST['facebook']
			// );
			// $admin['facebook'] = $_POST['facebook'];
			// $this->hiremetrodbase->admin_settings_update2($update);
			
			// $update = array(
				// 'social_id' => 1,
				// 'social_media' => 'twitter',
				// 'account' => $_POST['twitter']
			// );
			// $admin['twitter'] = $_POST['twitter'];
			// $this->hiremetrodbase->admin_settings_update2($update);
			
			// $update = array(
				// 'social_id' => 2,
				// 'social_media' => 'gmail',
				// 'account' => $_POST['gmail']
			// );
			// $admin['gmail'] = $_POST['gmail'];
			// $this->hiremetrodbase->admin_settings_update2($update);
		// }
		
		// $data['admin'] = $admin;
		
		$this->load->view('include/header_admin', $data);
		$this->load->view('hiremetro/admin_settings2', $data);
	}
	 public function admin_approval() {
		$data['title'] = "Hiremetro: Approval";
		
		if(isset($_GET['decline'])){
			$id = $_GET['id'];
			$getinfo = $this->hiremetrodbase->get_approve_list3($id);
			$no = 'No';
			$stat = 'Hide';
			foreach($getinfo as $g)
			{
				$info = array (
				'client_id' => $g['client_id'],
				'category' => $g['category'],
				'description' => $g['description'],
				'views_number' => $g['views_number'],
				'rate_type' => $g['rate_type'],
				'rate_price' => $g['rate_price'],
				'negotiable' => $g['negotiable'],
				'resume' => $g['resume'],
				'approve' => $yes,
				'status' => $stat
				);
			}
			
			$this->hiremetrodbase->admin_approve_decline($id,$info);
		}
		
		if(isset($_GET['approve'])){
			$id = $_GET['id'];
			$getinfo = $this->hiremetrodbase->get_approve_list3($id);
			$yes = 'Yes';
			$stat = 'show';
			foreach($getinfo as $g)
			{
				$info = array (
				'client_id' => $g['client_id'],
				'category' => $g['category'],
				'description' => $g['description'],
				'views_number' => $g['views_number'],
				'rate_type' => $g['rate_type'],
				'rate_price' => $g['rate_price'],
				'negotiable' => $g['negotiable'],
				'resume' => $g['resume'],
				'approve' => $yes,
				'status' => $stat
				);
			}
			
			$this->hiremetrodbase->admin_approve_approve($id,$info);
		}
		
		if(isset($_GET['approvepic'])){
			$id = $_GET['id'];
			$getinfo = $this->hiremetrodbase->get_approve_list2($id);
			$yes = 'Yes';
			foreach($getinfo as $g)
			{
				$info = array (
				'client_id' => $g['client_id'],
				'fname' => $g['fname'],
				'lname' => $g['lname'],
				'location' => $g['location'],
				'contact' => $g['contact'],
				'picture' => $g['picture'],
				'approve' => $yes
				);
			}
			
			$this->hiremetrodbase->admin_approve_approvepic($id,$info);
		}
		
		if(isset($_GET['declinepic'])){
			$id = $_GET['id'];
			$getinfo = $this->hiremetrodbase->get_approve_list2($id);
			$yes = 'Yes';
			$stat = 'show';
			foreach($getinfo as $g)
			{
				$info = array (
				'client_id' => $g['client_id'],
				'fname' => $g['fname'],
				'lname' => $g['lname'],
				'location' => $g['location'],
				'contact' => $g['contact'],
				'picture' => $g['picture'],
				'approve' => $yes
				);
			}
			
			$this->hiremetrodbase->admin_approve_declinepic($id,$info);
		}
		
		$getapprlist = $this->hiremetrodbase->get_approve_list1();
		$getapprlist2 = $this->hiremetrodbase->get_approve_list4();
		
		$data['aprlist'] = $getapprlist;
		$data['aprlist2'] = $getapprlist2;
		
		$this->load->view('include/header_admin', $data);
		$this->load->view('hiremetro/admin_approval', $data);
	}
	
}