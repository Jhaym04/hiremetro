 <?php
 
 public function get_approve_list1(){
		$this->db->select('*');
		$this->db->from('work_details');
		$this->db->where('approve', 'No');
		$query = $this->db->get();
		
		return $query->result_array();		
	}
	
	public function get_approve_list4(){
		$this->db->select('*');
		$this->db->from('client_information');
		$this->db->where('approve', 'No');
		$query = $this->db->get();
		
		return $query->result_array();		
	}
	
	public function get_approve_list2($id){
		$this->db->select('*');
		$this->db->from('client_information');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		
		return $query->result_array();		
	}
	
	public function get_approve_list3($id){
		$this->db->select('*');
		$this->db->from('work_details');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		
		return $query->result_array();		
	}
	
	public function admin_approve_approve($id, $info){
		$this->db->where('client_id', $id);
		$this->db->update('work_details', $info);
	}
	
	public function admin_approve_decline($id, $info){
		$this->db->where('client_id', $id);
		$this->db->update('work_details', $info);
	}
	
	public function admin_approve_approvepic($id, $info){
		$this->db->where('client_id', $id);
		$this->db->update('client_information', $info);
	}
	
	public function admin_approve_declinepic($id, $info){
		$this->db->where('client_id', $id);
		$this->db->update('client_information', $info);
	}
	
	?>