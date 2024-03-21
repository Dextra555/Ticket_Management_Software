<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller {
//var $mssql;

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Role_model');
		$this->load->library('upload');
		$this->load->library('email');
		//$this->mssql = $this->load->database('my_mssql', TRUE);

		 if($this->session->userdata('LOGGED_IN')=="1")
		{
	        $this->load->database();
			$this->load->model('Ticket_model');
	        $this->load->library('upload');
			$this->load->model('Role_model');
		}
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('login','refresh');
		}
		
	}
	public function role_homepage()
	{
	     if($this->session->userdata('USER_ROLE') === "3")
		{
			redirect('ticket/ticket_assign','refresh');
		}
		else if($this->session->userdata('USER_ROLE') === "4")
		{
			redirect('ticket/ticket_homepage','refresh');
		}
	    $data_val['title'] ="Role";
    	$data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['role_details'] = $this->Role_model->get_role_details();
		$this->load->view('role',$data_val);  
	}  


	public function create_new_role()
	{
		$role_name = $this->input->post('role_name'); 
		$role_access = $this->input->post('role_access');
		
		$data = array(
					'role_name'=>$role_name,
					'role_access'=>$role_access,
					'created_at' => date('Y-m-d',now()),
				);
		$res = $this->Role_model->create_new_role($data);	
		echo json_encode($res);
	} 

	public function clicked_role_delete_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->Role_model->clicked_role_delete_action($get_id);
		echo json_encode($res);
	} 
	public function clicked_role_view_edit_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->Role_model->clicked_role_view_edit_action($get_id);
		echo json_encode($res);
	}
	public function update_edit_role_details()
	{
		$edit_id_vlaue = $this->input->post('edit_id_vlaue'); 
		$name = $this->input->post('name'); 
		$email_id = $this->input->post('email'); 
		$address = $this->input->post('address'); 
		$category_role = $this->input->post('category_role'); 
		$contact_number = $this->input->post('contact_number'); 
		$reminder_months = $this->input->post('reminder_months'); 
		$service_history = $this->input->post('service_history'); 
		
	    $res = $this->Role_model->update_edit_role_details($edit_id_vlaue,$name,$email_id,$address,$category_role,$contact_number,$reminder_months,$service_history);	
	    echo json_encode($res);
	}
	




}

?>