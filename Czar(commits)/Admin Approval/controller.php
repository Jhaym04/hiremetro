 <?php
 
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
	
	?>