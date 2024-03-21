<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ticket_model');
		$this->load->model('User1_model');

		if($this->session->userdata('LOGGED_IN')=="1")
		{
	        $this->load->database();
	    }
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('login','refresh');
		}
	}

	public function report_ticket()
	 {
	    $data_val['title'] ="Reports";
	    $data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['ticket_details'] = $this->ticket_model->get_all_ticket();
		$this->load->view('report_ticket',$data_val);
	 }
	 
	 public function graphical_report()
	 {
	    $data_val['title'] ="Graphical Reports";
	    $data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['ticket_details'] = $this->ticket_model->get_all_ticket();
		$this->load->view('graphical_report',$data_val);
	 }
	  public function graphical_report_search()
	 {
	     if(isset($_REQUEST['date1']) ){
		    $d1=date("Y-m-d",strtotime($this->input->post('date1')));
			$d2=date("Y-m-d",strtotime($this->input->post('date2')));
	     }else{
	         $d1 = date('Y-m-d', strtotime('-30 days'));
	         $d2 = date('Y-m-d');
	         
	     }
			
			  $new_count2 = $inprogress_count2 = $resolved_count2=$amend_count2=$hold_count2=$cancelled_count2=0;
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
	     $data['total_tickets'] = $new_count2+$inprogress_count2+$resolved_count2+$amend_count2+$hold_count2+$cancelled_count2;
		 echo json_encode($data);

}
}
?>