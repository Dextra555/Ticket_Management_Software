<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Status extends CI_Controller {
//var $mssql;

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('status_model');
		$this->load->library('upload');
		$this->load->library('email');
		//$this->mssql = $this->load->database('my_mssql', TRUE);

		 if($this->session->userdata('LOGGED_IN')=="1")
		{
	        $this->load->database();
			$this->load->model('Ticket_model');
	        $this->load->library('upload');
			$this->load->model('status_model');
		}
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('login','refresh');
		}
		
	}
	public function status_homepage()
	{
	     if($this->session->userdata('USER_ROLE') === "3")
		{
			redirect('ticket/ticket_assign','refresh');
		}
		else if($this->session->userdata('USER_ROLE') === "4")
		{
			redirect('ticket/ticket_homepage','refresh');
		}
	    $data_val['title'] ="Status";
    	$data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['status_details'] = $this->status_model->get_status_details();
		$this->load->view('status',$data_val);  
	}  

	public function create_new_status()
	{
		$status_name = $this->input->post('status_name'); 
		$status_access = $this->input->post('status_access');
		
		$data = array(
					'status_name'=>$status_name,
					'created_at' => date('Y-m-d',now()),
				    'created_by' => 1,
				);
		$res = $this->status_model->create_new_status($data);	
		echo json_encode($res);
	} 

	public function clicked_status_delete_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->status_model->clicked_status_delete_action($get_id);
		echo json_encode($res);
	} 
	public function clicked_status_view_edit_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->status_model->clicked_status_view_edit_action($get_id);
		echo json_encode($res);
	}
	public function update_edit_status_details()
	{
		$edit_id_vlaue = $this->input->post('edit_id_vlaue'); 
		$name = $this->input->post('name'); 
		$email_id = $this->input->post('email'); 
		$address = $this->input->post('address'); 
		$category_status = $this->input->post('category_status'); 
		$contact_number = $this->input->post('contact_number'); 
		$reminder_months = $this->input->post('reminder_months'); 
		$service_history = $this->input->post('service_history'); 
		
	    $res = $this->status_model->update_edit_status_details($edit_id_vlaue,$name,$email_id,$address,$category_status,$contact_number,$reminder_months,$service_history);	
	    echo json_encode($res);
	}
	



}

?>