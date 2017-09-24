<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class students extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		//model name & nickname
		$this->load->model('students_model','Students');
	}
	public function index()
	{
		// model , function name
		$students = $this->Students->read();
		
		$data['students'] = $students;
		
		$this->load->view('Students_welcome');
	}
	
	public function view_student(){
	}
	
	public function update_student(){
	}
	
	public function delete_student(){
	}
}
