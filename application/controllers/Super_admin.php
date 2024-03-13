<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		 if($this->session->userdata('LOGGED_IN')=="1")
		{
	        $this->load->database();
	       	$this->load->library('session');
	       	$this->load->helper(array('form','url'));
		}
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('login','refresh');
		}
	}
	/*
	public function index()
	{
		$this->load->view('login');
	}
	*/
 	public function super_admin_homepage()
	{
	     if($this->session->userdata('USER_ROLE') === "3")
		{
			redirect('ticket/ticket_assign','refresh');
		}
		else if($this->session->userdata('USER_ROLE') === "4")
		{
			redirect('ticket/ticket_homepage','refresh');
		}
	     $tickets= $this->db->query("SELECT issue_status,COUNT(*) as ticket_count from ticket GROUP by issue_status ORDER by issue_status")->result();
        $new_count = $inprogress_count = $resolved_count=$amend_count=$hold_count=$cancelled_count=0;
                $new_count2 = $inprogress_count2 = $resolved_count2=$amend_count2=$hold_count2=$cancelled_count2=0;

	         foreach($tickets as $tc){
	         if($tc->issue_status == '1'){
	             $new_count = $tc->ticket_count;
	         }
	          if($tc->issue_status == '2'){
	             $inprogress_count = $tc->ticket_count;
	         }
	         else if($tc->issue_status == '3'){
	             $resolved_count = $tc->ticket_count;
	         }
	         else if($tc->issue_status == '4'){
	             $amend_count = $tc->ticket_count;
	         }
	         else if($tc->issue_status == '5'){
	             $hold_count = $tc->ticket_count;
	         }
	         else if($tc->issue_status == '6'){
	             $cancelled_count = $tc->ticket_count;
	         }
	         }

	         
	         $d1 = date('Y-m-d', strtotime('-30 days'));
	         $d2 = date('Y-m-d');

	         	
	         $tickets_new= $this->db->query("SELECT issue_status,COUNT(*) as ticket_count from ticket WHERE (request_date BETWEEN '".$d1."' AND '".$d2."') GROUP by issue_status ORDER by issue_status")->result();
foreach($tickets_new as $tc1){
	         if($tc1->issue_status == '1'){
	             $new_count2 = $tc1->ticket_count;
	         }
	          if($tc1->issue_status == '2'){
	             $inprogress_count2 = $tc1->ticket_count;
	         }
	         else if($tc1->issue_status == '3'){
	             $resolved_count2 = $tc1->ticket_count;
	         }
	         else if($tc1->issue_status == '4'){
	             $amend_count2 = $tc1->ticket_count;
	         }
	         else if($tc1->issue_status == '5'){
	             $hold_count2 = $tc1->ticket_count;
	         }
	         else if($tc1->issue_status == '6'){
	             $cancelled_count2 = $tc1->ticket_count;
	         }
	         }
	         
	     $data['new_count1'] = $new_count2;
	     $data['inprogress_count1'] =$inprogress_count2;
	     $data['amend_count1'] =$amend_count2;
	     $data['hold_count1'] = $hold_count2;
	     $data['resolved_count1'] = $resolved_count2;
		  $data['cancelled_count1'] = $cancelled_count2;
	     $data['total_tickets'] = $new_count2+$inprogress_count2+$resolved_count2+$amend_count2+$hold_count2;


	    // $data['tc_count'] = $am_count;
	     $data['new_count'] = $new_count;
	     $data['inprogress_count'] =$inprogress_count;
	     $data['amend_count'] =$amend_count;
	     $data['hold_count'] = $hold_count;
	     $data['title'] ="Admin dashboard";
		 $data['name'] = $this->session->userdata('USER_FNAME');
		 
		 $this->load->view('super_admin',$data);
	}

	public function user_role()
	{
		$user_val_details['user_role'] = $this->User_model->get_user_role_details();
		$user_val_details['user_role_permission'] = $this->User_model->get_user_role_details();
		$this->load->view('user_role',$user_val_details);
	}


/* no of user_permission for user role here!*/
	public function user_permission()
	{
		$this->load->view('user_permissions');
	}

}

?>