<?php

class hiremetro_model extends CI_Model{
	
	private $table = "students";
	
	//Constructor
	
	public function __construct()
	{
		parent::__construct();
	}
	
	//CREATE
	
	public function create(){
	}
	
	//READ
	
	public function read(){
		$this->db->select("*");
		$this->db->from($this->table);
		
		// $this->db->select('*')
		// ->from($this->table)
		// ->join ('','','')
		// ->group_by('','')
		// ->order_by('','')
		
		if (isset($where) )
			$this->db->where($where);
		
		$query=$this->db->get();
		
		return $query->result_array();
	}	
	//UPDATE
	
	public function getid($table){
			
		$this->db->select('employee_id');
		$this->db->from($table);
		$this->db->order_by('employee_id', 'desc');
			
		$query = $this->db->get();
			
		$data = $query->result_array();
			
		return $data[0]['employee_id'];
	}
	
	public function signup($data, $table){
		$this->db->insert($table, $data);
		
	}
	
	public function login($data){
		
		$condition = "username ="."'".$data['username']."' AND "."password ="."'".$data['password']."'";
		
		$this->db->select('*');
		$this->db->from('login_credentials');
		$this->db->where($condition);
		$query = $this->db->get();
		
		if ($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	
	public function search_employees($valueToSearch){
		
		$this->db->select('*');
		$this->db->from('employee_information');
		$this->db->like('fname',  $valueToSearch, 'both');
		$this->db->or_like('address', $valueToSearch, 'both');
		$this->db->or_like('mname', $valueToSearch, 'both');
		$this->db->or_like('lname', $valueToSearch, 'both');
		$query = $this->db->get();
		
		return $query->result_array();
		
	}
	
	public function get_description($id){
		
		$condition = "employee_id ="."'".$id."'";
		
		$this->db->select('work_description');
		$this->db->from('work_details');
		$this->db->where('employee_id', $id);
		
		$query = $this->db->get();
		$res = $query->result();
		$q = $res[0];
		
		return $q->work_description;
		
	}
	
	public function search_category($category){
		
		$this->db->select('*');
		$this->db->from('work_details');
		$this->db->where('work_title', $category);
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function search_by_id($id){
		
		$this->db->select('*');
		$this->db->from('employee_information');
		$this->db->where('employee_id', $id);
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function update_details ($id,$table,$info){
		$this->db->where('employee_id', $id);
		$this->db->update($table, $info);
	}
	
	public function get_employee_information($id,$table){
		
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('employee_id', $id);
		$query = $this->db->get();
		
		return $query->result_array();
		
	}
	
	public function get_all($valueToSearch){
		
		$this->db->select('*');
		$this->db->from('employee_information');
		$this->db->where('employee_id', $valueToSearch);
		
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function get_details($valueToSearch){
		
		$this->db->select('*');
		$this->db->from('work_details');
		$this->db->where('employee_id', $valueToSearch);
		
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function get_languages($valueToSearch){
		
	 $this->db->select('language');
	 $this->db->from('languages_spoken');
	 $this->db->where('employee_id', $valueToSearch);
	
	 $query = $this->db->get();
	 return $query->result_array();
	}	
	public function get_username($id){
		
		$condition = "employee_id ="."'".$id."'";
		
		$this->db->select('username');
		$this->db->from('login_credentials');
		$this->db->where('employee_id', $id);
		
		$query = $this->db->get();
		$res = $query->result();
		$q = $res[0];
		
		return $q->username;	
	}
	
	public function get_id($valueToSearch){
		
		$this->db->select('employee_id');
		$this->db->from('login_credentials');
		$this->db->where('username', $valueToSearch);
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
}	

?>