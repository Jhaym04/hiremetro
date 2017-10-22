<?php

class hiremetro_model extends CI_Model{
	
	private $table = "students";
	
	//Constructor
	
	public function __construct()
	{
		parent::__construct();
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
	
	//GET INDEMAND CATEGORIES
	
	public function get_indemand(){
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->order_by('category_views', 'desc');
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function get_ads(){
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	// GET LATEST ID
	
	public function getid($table){
			
		$this->db->select('client_id');
		$this->db->from($table);
		$this->db->order_by('client_id', 'desc');
			
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return 1;
		}
		else{
			$data = $query->result_array();
			return $data[0]['client_id'];
		}
			
		
	}
	
	//PUSHING DATAS
	
	public function signup($data, $table){
		$this->db->insert($table, $data);
		
	}
	
	public function login($data){
		
		$condition = "email ="."'".$data['email']."' AND "."password ="."'".$data['password']."'";
		
		$this->db->select('*');
		$this->db->from('login_credentials');
		$this->db->where($condition);
		$query = $this->db->get();
		
		if ($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return 'false';
		}
	}
	
	// SEARCH EMPLOYEES
	
	public function search_employees($valueToSearch){
		
		$this->db->select('*');
		$this->db->from('client_information');
		$this->db->like('fname',  $valueToSearch, 'both');
		$this->db->or_like('location', $valueToSearch, 'both');
		$this->db->or_like('lname', $valueToSearch, 'both');
		$this->db->or_like('work_details.category', $valueToSearch, 'both');
		$this->db->join('work_details', 'client_information.client_id = work_details.client_id');
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return 'false';
		}
		else{
			return $query->result_array();
		}
		
	}
	
	// SORT RATINGS
	public function sort_ratings(){
		$this->db->select('*');
		$this->db->from('rating_employee');
		$this->db->order_by('total_rating', 'desc');
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	// SEARCH BY CATEGORY
	
	public function search_category($category){
		
		$this->db->select('*');
		$this->db->from('work_details');
		$this->db->where('category', $category);
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return 'false';
		}
		else{
			return $query->result_array();
		}
	}
	
	public function search_by_id($id){
		
		$this->db->select('*');
		$this->db->from('employee_information');
		$this->db->where('employee_id', $id);
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	//UPDATE CLIENT INFORMATION
	
	public function update_details ($id,$table,$info){
		$this->db->where('client_id', $id);
		$this->db->update($table, $info);
	}
	
	//GET INFORMATION BY ID
	
	public function get_employee_information($id,$table){
		
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result_array();
			
		}else{
			return 'false';
		}
		
	}
	
	//GET NO OF CURRENT CATEGORY
	
	public function get_category_ads($categ){
		$this->db->select('no_of_ads');
		$this->db->from('categories');
		$this->db->where('category_name', $categ);
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result[0]['no_of_ads'];
	}
	
	// UPDATE CATEGORY 
	public function update_category($categ,$info){
		$this->db->where('category_name', $categ);
		$this->db->update('categories', $info);
	}
	
	//GET TRANSACTIONS
	public function get_transactions($id){
		$this->db->select('*');
		$this->db->from('transactions');
		$this->db->where('client_id', $id);
		$this->db->order_by('transaction_no', 'desc');
		$query = $this->db->get();
		
		if($query->num_rows() == 0){
			return 'false';
		}
		else{
			return $query->result_array();
		}
	}
	
	//GET REVIEWS
	public function get_reviews($id){
		$this->db->select('*');
		$this->db->from('review');
		$this->db->where('receiver', $id);
		$this->db->order_by('review_id', 'desc');
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return 'false';
		}
		else{
			return $query->result_array();
		}
	}
	
	//GET ACTIVITY LOG LATEST ID
	
	public function get_id_activity_log(){
		$this->db->select('activity_id');
		$this->db->from('activity_log');
		$this->db->order_by('activity_id', 'desc');
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result[0]['activity_id'];
	}
	
	//GET NOTIFICATION LOG LATEST ID
	
	public function get_id_notification(){
		$this->db->select('notification_id');
		$this->db->from('notifi');
		$this->db->order_by('notification_id', 'desc');
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result[0]['notification_id'];
	}
	
	//GET PAYMENT LATEST ID
	
	public function get_id_payment(){
		$this->db->select('payment_no');
		$this->db->from('payments');
		$this->db->order_by('payment_no', 'desc');
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result[0]['payment_no'];
	}
	
	//GET TRANSACTIONS LATEST ID
	
	public function get_id_transactions(){
		$this->db->select('transaction_no');
		$this->db->from('transactions');
		$this->db->order_by('transaction_no', 'desc');
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result[0]['transaction_no'];
	}
	
	//GET NOTIFICATION SORT BY LATEST
	public function get_notification_sorted($id){
		$this->db->select('*');
		$this->db->from('notifi');
		$this->db->where('client_id', $id);
		$this->db->order_by('notification_id', 'desc');
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		else{
			return 'false';
		}
	}
	
	// DELETE NOTIFICATION
	public function delete_notification($notif){
		$this->db->where('notification_id', $notif);
		$this->db->delete('notifi');
	}
	
	//DELETE ONGOING
	public function delete_ongoing($id){
		$this->db->where('client_id', $id);
		$this->db->delete('ongoing');
	}
	
	//DELETE PAYMENT
	public function delete_payments($id){
		$this->db->where('payment_no', $id);
		$this->db->delete('payments');
	}
	
	//GET REVIEW LATEST ID
	public function get_id_review(){
		$this->db->select('review_id');
		$this->db->from('review');
		$this->db->order_by('review_id', 'desc');
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result[0]['review_id'];
	}
	
	//UPDATE TRANSACTION 
	public function update_transaction($id,$data){
		$this->db->where($id);
		$this->db->update('transactions', $data);
	}
	
	//GET NOTIFICATION DETAILS
	public function update_notification_status($data,$notif){
		$this->db->where('notification_id', $notif);
		$this->db->update('notifi',$data);
	}
	
	//CHECK ONGOING
	public function check_ongoing($id){
		$this->db->select('*');
		$this->db->from('ongoing');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return 'yes';
		}
		else{
			return 'no';
		}
	}
	
	//GET ALL CATEGORY
	public function count_category($categ){
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		
		return $query->result_array();
	} 
	
	//GET REPORT LATEST ID
	public function get_id_report(){
		$this->db->select('report_id');
		$this->db->from('reports');
		$this->db->order_by('report_id', 'desc');
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result[0]['report_id'];
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
	
	public function get_work($id){
		$condition = "employee_id ="."'".$id."'";
		
		$this->db->select('work_title');
		$this->db->from('work_details');
		$this->db->where('employee_id', $id);
		
		$query = $this->db->get();
		$res = $query->result();
		$q = $res[0];
		
		return $q->work_title;
	}
	
	public function get_id($valueToSearch){
		
		$this->db->select('employee_id');
		$this->db->from('login_credentials');
		$this->db->where('username', $valueToSearch);
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function deactivate($id){
		$this->db->where('employee_id', $id);
		$this->db->delete('employee_information');
		
		$this->db->where('employee_id', $id);
		$this->db->delete('login_credentials');
		
		$this->db->where('employee_id', $id);
		$this->db->delete('work_details');
	}
	
	public function confirm_email($email){
		$this->db->select('*');
		$this->db->from('login_credentials');
		$this->db->where('email', $email);
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return 'TRUE';
		}
		else{
			return 'FALSE';
		}
	}
	
	public function admin_dashboard($category){
		$this->db->select('*');
		$this->db->from('work_details');
		$this->db->where('work_title', $category);
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return 0;
		}
		else{
			return $query->num_rows();
		}
	}
	
	public function admin_reports(){
		$this->db->select('*');
		$this->db->from('reports');
		$this->db->order_by('client_id', 'asc');
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return 'false';
		}else{
		return $query->result_array();
		}
	}
	
	public function admin_report_name($id){
		$this->db->select('*');
		$this->db->from('client_information');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $name = $result[0]['fname'].' '.$result[0]['lname'];
	}
	
	public function admin_report_work($id){
		$this->db->select('category');
		$this->db->from('work_details');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result[0]['category'];
	}
	
	public function admin_report_nos($id){
		$this->db->select('*');
		$this->db->from('reports');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		
		return $query->num_rows();
	}
	
	public function admin_report_messages($id){
		$this->db->select('*');
		$this->db->from('reports');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function admin_report_delete($id){
		$this->db->where('client_id', $id);
		$this->db->delete('reports');
	}

	///////////////////////////////////////////////
	public function get_suggestions(){
		
	 $this->db->select('*');
	 $this->db->from('suggestions');
	 $this->db->order_by('suggestion_id', 'desc');
	
	 $query = $this->db->get();
		
	 if($query->num_rows() < 1){
		return 'false';
	}else{
	 return $query->result_array();
	}
	}
	/////////////
	private function _get_users_data(){ 
        $this->db->select('*'); 
        $this->db->from('suggestions');
		$this->db->order_by('suggestion_id', 'desc');	
    }
    
    public function get_users($limit, $start){ 
        $this->_get_users_data(); 
        $this->db->limit($limit, $start); 
        $query = $this->db->get(); 
        return $query->result_array(); 
    }
    
    public function count_all_users(){ 
        $this->_get_users_data(); 
        $query = $this->db->count_all_results(); 
        return $query; 
    }
	
	public function admin_message($id){
		$this->db->select('*');
		$this->db->from('suggestions');
		$this->db->where('suggestion_id', $id);
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function admin_suggestions_delete($id){
		$this->db->where('suggestion_id', $id);
		$this->db->delete('suggestions');
	}
	
	public function admin_message_update($id, $info){
		$this->db->where('suggestion_id', $id);
		$this->db->update('suggestions', $info);
	}
	
	public function admin_profiles(){
		$this->db->select('*');
		$this->db->from('client_information');
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function admin_profiles_2($id){
		$this->db->select('*');
		$this->db->from('work_details');
		$this->db->where('client_id', $id);
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function admin_profiles_search($search){
		$this->db->select('*');
		$this->db->from('client_information');
		$this->db->like('fname', $search, 'after');
		$this->db->or_like('mname', $search, 'after');
		$this->db->or_like('lname', $search, 'after');
		$query = $this->db->get();
		
		return $query->result_array();
		
	}
	
	public function admin_settings($table){
		$this->db->select('*');
		$this->db->from($table);
		if($table == 'login_credentials'){
			$this->db->where('employee_id', 0);
		};
		$query = $this->db->get();
		
		return $query->result_array();
	}
	
	public function admin_settings_update($update){
		$this->db->where('employee_id', 0);
		$this->db->update('login_credentials', $update);
	}
	
	public function admin_settings_update2($update){
		$this->db->where('social_id', $update['social_id']);
		$this->db->update('admin', $update);
	}
	
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

	}	

?>