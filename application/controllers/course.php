<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		//model name & nickname
		$this->load->model('courses_model','Courses');
	}
	public function index()
	{
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";

		$condition=null;
		
		$rs = $this->Courses->read($condition);

		foreach($rs as $r){
			$info = array(
						'course_id' => $r['course_id'],
						'course_desc' => $r['course_desc']
						);
			$students[] = $info;
		}
		
		$data['students'] = $students;
		
		$this->load->view('include/header', $data);
		$this->load->view('students/list_course', $data);
		$this->load->view('include/footer', $data);
		
	}
	
	public function new_course(){
		
		$data = array();	
		
		if( $_SERVER['REQUEST_METHOD']=='POST'){ //form was submitted
			//save the form
				
				//check for duplicate
				$record = array(
								'course_id'=>$_POST['course_id'],
								'course_desc'=>$_POST['course_desc']
							);
							
				$insert_id = $this->Courses->create($record);
				
				$data['saved'] = TRUE;
				
			}
			
		else{ //display blank form
				
		}
		
		$header_data['title'] = "Add New Student";

			
		$this->load->view('include/header',$header_data);
		$this->load->view('students/new_course', $data);
		$this->load->view('include/footer');
			
	}
		
	
	public function update_student(){
		
		
	}
	
	public function delete_student(){
	}
}
