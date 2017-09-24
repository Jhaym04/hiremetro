<?php

class Courses_model extends CI_Model {
    
	private $table = "course";
	
	public function create($data){
		$this->db->insert($this->table, $data);
		return TRUE;	
	}
	
	public function read($condition=null){
		
		// SELECT * FROM students
		
		$this->db->select('*');
		$this->db->from($this->table);
		
		// $this->db->select()
				// ->from()
				// ->join()
				// ->where();
		
		// $this->db->join('table2','table1.key=table2.fk','inner');
		// $this->db->order_by('field_name');
		
		if( isset($condition) ) $this->db->where($condition);
		
		$query=$this->db->get();

		return $query->result_array();		
	}
	
	public function update($data){
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;	
	}
	
	public function delete_student($data){
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;	
	}
}