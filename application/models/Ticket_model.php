<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ticket_model extends CI_Model {

	function __construct()
	{
        parent::__construct();
		$this->load->helper('date');
    }
	
	public function get_all_ticket()
	{

			$this->db->select('*');
			$this->db->from('ticket');
			$this->db->order_by('ticket_id','DESC');
			return $this->db->get()->result_array();

	}
	
	public function get_all_ticket1()
	{

			$this->db->select('*');
			$this->db->from('ticket');
			$this->db->order_by('ticket_id','DESC');
			return $this->db->get()->result();

	}
	
		public function get_all_comments($update_id)
	{

			$this->db->select('*');
			$this->db->from('comments');
			$this->db->where('ticket_id',$update_id);
			return $this->db->get()->result();

	}
	
	public function get_ticket()
	{
		$sql = "select DISTINCT scheduled_date from ticket WHERE app_status IN (2,3,4)";
		return $this->db->query($sql)->result_array();
	} 


public function ticket_pending_update($data1,$update_id)
	{
		$this->db->where('ticket_id',$update_id);
		$this->db->update('ticket',$data1);
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('ticket_id',$update_id);
		$result_img = $this->db->get()->result();
		$a =explode(',',$result_img[0]->file_path);

		foreach ($_FILES['attachment']['name'] as $i => $row) {
			if($_FILES['attachment']['error'][$i] != 0) {
            $result['status'] = false;
            $result['message'] = array("image"=>"Select image to upload");
                } else {
                    	if(!is_dir("uploads/ticket". $update_id ."/")) {
                        mkdir("uploads/ticket". $update_id ."/");
                     }
                 move_uploaded_file($_FILES['attachment']['tmp_name'][$i], "uploads/ticket". $update_id ."/". $_FILES['attachment']['name'][$i]);
				 
				 array_push($a,$_FILES['attachment']['name'][$i]);
				 				file_put_contents("E://sujitha.txt","xcvfd".print_r($_FILES['attachment']['name'][$i],true),FILE_APPEND);

            	$sql = "UPDATE ticket SET file_path ='".implode(',', $a)."' WHERE ticket_id='$update_id'";
            	$this->db->query($sql);
    			}
		 }
		 
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('ticket_id',$update_id);
		return $this->db->get()->result();
	}

public function create_ticket($data)
	{
		$this->db->insert('ticket', $data);
		$last_id =$this->db->insert_id();

		foreach ($_FILES['attachment']['name'] as $i => $row) {

        if($_FILES['attachment']['error'][$i] != 0) {
            $result['status'] = false;
            $result['message'] = array("image"=>"Select image to upload");
                } else {
                    	if(!is_dir("uploads/ticket". $last_id ."/")) {
                        mkdir("uploads/ticket". $last_id ."/");
                     }
                 move_uploaded_file($_FILES['attachment']['tmp_name'][$i], "uploads/ticket". $last_id ."/". $_FILES['attachment']['name'][$i]);
            	$sql = "UPDATE ticket SET file_path ='".implode(',', $_FILES['attachment']['name'])."' WHERE ticket_id='$last_id'";
            	$this->db->query($sql);
    			}
		 }
		 $invID = sprintf('%04u', $last_id);
        $sql = "UPDATE ticket SET ticket_number ='TCN".$invID."'WHERE ticket_id='$last_id'";
            	$this->db->query($sql);

		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('ticket_id',$last_id);
		return $this->db->get()->result();
	}

	public function view_ticket_details($id)
	{
		$this->db->select('t.*,b.branch_id,b.branch_name,s.*');
		$this->db->from('ticket t');
		$this->db->join('branch b', 'b.branch_id = t.branch');
		$this->db->join('status s', 's.status_id = t.issue_status');
		$this->db->where('ticket_id',$id);
		$data1 = $this->db->get()->result_array();
		
		$this->db->select('c.*,u.name');
		$this->db->from('comments c');
		$this->db->join('users u', 'u.user_id = c.comment_by');
		$this->db->where('ticket_id',$id);
		$data2 = $this->db->get()->result_array();
		$data['ticket_data'] = $data1;
		$data['comments_data'] = $data2;
		return $data;
		
	}

   	public function get_search_result($ticket_from,$ticket_before,$ticket_status)
	{
	    $user_id = $this->session->userdata('USER_ID');
        $role = $this->session->userdata('USER_ROLE');
		$sql = "select * from ticket WHERE (request_date BETWEEN '".$ticket_from."' AND '".$ticket_before."')" ;
	//	print_r($sql);
		if($ticket_status){
		  	$sql .= " and issue_status=".$ticket_status;
		}
		if($role == '3'){
		  $sql .= " and assigned_staff_id=".$user_id;  
		}
		else if($role == '4'){
		  $sql .= " and user_id=".$user_id;  
		}
	
	   	// select * from invoice_details where created_date >= '2017-01-01' AND created_date <= '2017-09-31'
		return $this->db->query($sql)->result_array();
	}

}

?>