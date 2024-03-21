<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {
   
	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('User1_model');
		 if($this->session->userdata('LOGGED_IN')=="1")
		{
	        $this->load->database();
	        $this->load->model('User1_model');
		}
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('login','refresh');
		}
	}
	
    public function get_employee_details()
	{
		$this->load->view('employee');
	} 
    
    
    public function employee_homepage()
	{
	     if($this->session->userdata('USER_ROLE') === "3")
		{
			redirect('ticket/ticket_assign','refresh');
		}
		else if($this->session->userdata('USER_ROLE') === "4")
		{
			redirect('ticket/ticket_homepage','refresh');
		}
	    $data_val['title'] ="Employee Details";
		$data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['user_details'] = $this->User1_model->get_user_details();
		$this->load->view('employee',$data_val);  
	}










}