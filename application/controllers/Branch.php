<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Branch extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Branch_model');
		 if($this->session->userdata('LOGGED_IN')=="1")
		{
	        $this->load->database();
	        $this->load->model('Branch_model');
		}
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('login','refresh');
		}
	}
	
	/* public function get_branch_details()
	{
		$this->load->view($data_val);
	} */
	
	public function branch_homepage()
	{
    	 if($this->session->userdata('USER_ROLE') === "3")
		{
			redirect('ticket/ticket_assign','refresh');
		}
		else if($this->session->userdata('USER_ROLE') === "4")
		{
			redirect('ticket/ticket_homepage','refresh');
		}
	    $data_val['title'] ="Branches";
		$data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['branch_details'] = $this->Branch_model->get_branch_details();
		$this->load->view('branch',$data_val);  
	}
	
	
	public function save_branch_details()
	{
		$branch_name = $this->input->post('branch_name'); 
		$branch_pass = $this->input->post('branch_pass'); 
		$branch_fname = $this->input->post('branch_fname'); 
		$data = array(
					'branch_name'=>$this->input->post('branch_name') ,
				//	'branch_master'=>$this->input->post('branch_master'),
					'address'=>$this->input->post('branch_address'),
					'created_at' => date('Y-m-d',now()),	
					'created_by' => 1,							
					); 
	  $res = $this->Branch_model->save_branch_details($data);	
	  echo json_encode($res);
	}


	
	



	public function create_new_role()
	{
		$role_name = $this->input->post('role_name'); 
		$role_desc = $this->input->post('role_desc');
		$data = array(
					'role_name'=>$role_name,
					'role_desc'=>$role_desc
				);
		$res = $this->Branch_model->create_new_role($data);									
		echo json_encode($res);
	}
	public function clicked_branch_delete_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->Branch_model->clicked_branch_delete_action($get_id);
		echo json_encode($res);
	}
	public function clicked_branch_password_updations()
	{
		$get_id = $this->input->post('branch_name');
		$full_name = $this->input->post('full_name');
		$id_value_stored = $this->input->post('id_value_stored');
		$change_password_branch = $this->input->post('change_password_branch');
		$change_repass_branch = $this->input->post('change_repass_branch');
		
		$res = $this->Branch_model->clicked_branch_password_updations($id_value_stored,$change_password_branch,$change_repass_branch);
		echo json_encode($res);
	}
	
	public function clicked_view_edit_branch_details()
	{
		$get_id = $this->input->post('id');
		$res = $this->Branch_model->clicked_view_edit_branch($get_id);
		echo json_encode($res);
	}

	public function clicked_branch_details_updations()
	{
				$get_id = $this->input->post('edit_branch_id');
				$data = array(
					'branch_name'=>$this->input->post('branch_name'),
					//'branch_master'=>$this->input->post('branch_master'),
					'address'=>$this->input->post('branch_address'), 
					'updated_at' => date('Y-m-d',now()),	
					'updated_by' => 1,							
					);
	
		$res = $this->Branch_model->clicked_branch_details_updations($get_id,$data);
		echo json_encode($res);
	}
	public function check_branch()
	{
			$branch_name = $this->input->post('branch_name');
	//file_put_contents("E://sujitha.txt","asdsa".print_r($branch_name,true),FILE_APPEND);

		$res = $this->db->query("select * from branch where branch_name='".$branch_name."'")->result_array();
		
			echo json_encode($res);

	}
	
	public function clicked_role_delete_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->Branch_model->clicked_role_delete_action($get_id);
		echo json_encode($res);
	}
	
	public function clicked_edit_role_details()
	{
		$get_id = $this->input->post('id');
		$res = $this->Branch_model->clicked_edit_role_details($get_id);
		echo json_encode($res);
	}

	public function update_edit_role_details()
	{
		$get_id = $this->input->post('id');
		$role_name = $this->input->post('role_name');
		$role_desc = $this->input->post('role_desc');
		
		$res = $this->Branch_model->update_edit_role_details($get_id,$role_name,$role_desc);
		echo json_encode($res);
	}
	public function clicked_role_give_permission()
	{
		$branch_id = $this->input->post('get_branch_id');
		$get_check_in_menus = $this->input->post('get_check_in_menus');
		//$myArray = explode(',', $got_some_menu_id);
		/*$data = array(
					   'branch_id'=>$branch_id,
					   'menu_list'=>$get_check_in_menus
					 ); */
		$res = $this->Branch_model->clicked_role_give_permission($branch_id,$get_check_in_menus);
		echo json_encode($res);
	}
	public function get_all_menu_details()
	{
		$res = $this->Branch_model->clicked_role_give_permission($data,$branch_id);
		echo json_encode($res);
	}
	public function clicked_role_permission_edit()
	{
		$id = $this->input->post('id');
		$res = $this->Branch_model->clicked_role_permission_edit($id);
		echo json_encode($res);
	}
	public function get_edit_permissions()
	{
		$id = $this->input->post('get_branch_id');
		$res = $this->Branch_model->get_edit_permissions($id);
		echo json_encode($res);
	}
}
?>