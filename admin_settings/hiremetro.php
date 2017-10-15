<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hiremetro extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		//model name & nickname
		$this->load->model('students_model','Students');
	}
	public function index()
	{
		$data['title'] = "Hiremetro";		
		$this->load->view('include/header', $data);
		$this->load->view('hiremetro/admin_settings', $data);
		$this->load->view('include/footer', $data);
		
	}
	
	public function view_student(){
	}
	
	public function update_student(){
	}
	
	public function delete_student(){
	}
}
