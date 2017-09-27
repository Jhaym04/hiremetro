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
		$this->db->limit(1);
			
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
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function delete_record(){
	}	
	
}

?>