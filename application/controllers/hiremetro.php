<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hiremetro extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		//model name & nickname
		$this->load->model('hiremetro_model','hiremetrodbase');
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
		
		
	}
	
	public function signup(){
		// set table
		$table = "login_credentials";
		// get id
		$id = $this->hiremetrodbase->getid($table);
		
		$id = $id+1;
		
		$data = array(
		'employee_id' => ($id),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'email' => $this->input->post('email')
		);
		
		$this->hiremetrodbase->signup($data, $table);
		
		$table="employee_information";
		
		$data = array(
		'employee_id' => ($id),
		'fname' => $this->input->post('firstname'),
		'lname' => $this->input->post('lastname'),
		'contact_number' => $this->input->post('contact_number'),
		'email' => $this->input->post('email'),
		'birthday' => $this->input->post('birthday'),
		'gender' => $this->input->post('gender')
		);
		
		$this->hiremetrodbase->signup($data, $table);
		
		$this->load->view('include/header');
		$this->load->view('hiremetro/home');
		
	}
	
	public function delete_student(){
	}
}
