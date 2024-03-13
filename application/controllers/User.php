<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
	
	/* public function get_user_details()
	{
		$this->load->view($data_val);
	} */
	
	public function user_homepage()
	{
	     if($this->session->userdata('USER_ROLE') === "3")
		{
			redirect('ticket/ticket_assign','refresh');
		}
		else if($this->session->userdata('USER_ROLE') === "4")
		{
			redirect('ticket/ticket_homepage','refresh');
		}
	    $data_val['title'] ="Users";
		$data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['user_details'] = $this->User1_model->get_user_details();
		$this->load->view('user',$data_val);  
	}
	public function save_user_details()
	{
		$user_name = $this->input->post('user_name'); 
		$user_pass = $this->input->post('user_pass'); 
		$user_fname = $this->input->post('user_fname'); 
		$user_email = $this->input->post('user_email'); 
		$user_mobile = $this->input->post('user_mobile'); 
		$user_company = $this->input->post('user_company'); 
		$user_address = $this->input->post('user_address'); 
		$user_notes = $this->input->post('user_notes'); 
		$user_role = $this->input->post('user_role'); 
		$data = array(
					'name'=>$user_fname,
					'mobile'=>$user_mobile,
					'email'=>$user_email,
					'address'=>$user_address,
					'role'=>$user_role,
					'company'=>$user_company,
					'username'=>$user_name,
					'password'=>sha1($user_pass),
					'notes'=>$user_notes,
					'created_at' => date('Y-m-d',now()),	
					'created_by' => 1,							
					); 
	  $res = $this->User1_model->save_user_details($data);	
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
		$res = $this->User1_model->create_new_role($data);									
		echo json_encode($res);
	}
	public function clicked_user_delete_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->User1_model->clicked_user_delete_action($get_id);
		echo json_encode($res);
	}
	public function clicked_user_password_updations()
	{
		$get_id = $this->input->post('user_name');
		$full_name = $this->input->post('full_name');
		$id_value_stored = $this->input->post('id_value_stored');
		$change_password_user = $this->input->post('change_password_user');
		$change_repass_user = $this->input->post('change_repass_user');
		
		$res = $this->User1_model->clicked_user_password_updations($id_value_stored,$change_password_user,$change_repass_user);
		echo json_encode($res);
	}
	
	public function clicked_view_edit_user_details()
	{
		$get_id = $this->input->post('id');
		$res = $this->User1_model->clicked_view_edit_users($get_id);
		echo json_encode($res);
	}
public function check_name()
	{
			$name = $this->input->post('name');

		$res = $this->db->query("select * from users where name='".$name."'")->result_array();
		
			echo json_encode($res);

	}
	public function clicked_user_details_updations()
	{
	//file_put_contents("E://sujitha.txt","asdsa".print_r($_REQUEST,true),FILE_APPEND);

		$get_id = $this->input->post('edit_id_value');
		$user_name = $this->input->post('user_name'); 
	//	$user_pass = $this->input->post('user_pass'); 
		$user_fname = $this->input->post('user_fname'); 
		$user_email = $this->input->post('user_email'); 
		$user_mobile = $this->input->post('user_mobile'); 
		$user_company = $this->input->post('user_company'); 
		$user_address = $this->input->post('user_address'); 
		$user_notes = $this->input->post('user_notes'); 
		$user_role = $this->input->post('user_role'); 
		$data = array(
					'name'=>$user_fname,
					'mobile'=>$user_mobile,
					'email'=>$user_email,
					'address'=>$user_address,
					'role'=>$user_role,
					'company'=>$user_company,
					'username'=>$user_name,
					//'password'=>$user_pass,
					'notes'=>$user_notes,
					'created_at' => date('Y-m-d',now()),	
					'created_by' => 1,							
					);
	
		$res = $this->User1_model->clicked_user_details_updations($get_id,$data);
		echo json_encode($res);
	}
	
	public function clicked_role_delete_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->User1_model->clicked_role_delete_action($get_id);
		echo json_encode($res);
	}
	
	public function clicked_edit_role_details()
	{
		$get_id = $this->input->post('id');
		$res = $this->User1_model->clicked_edit_role_details($get_id);
		echo json_encode($res);
	}

	public function update_edit_role_details()
	{
		$get_id = $this->input->post('id');
		$role_name = $this->input->post('role_name');
		$role_desc = $this->input->post('role_desc');
		
		$res = $this->User1_model->update_edit_role_details($get_id,$role_name,$role_desc);
		echo json_encode($res);
	}
	public function clicked_role_give_permission()
	{
		$user_id = $this->input->post('get_user_id');
		$get_check_in_menus = $this->input->post('get_check_in_menus');
		//$myArray = explode(',', $got_some_menu_id);
		/*$data = array(
					   'user_id'=>$user_id,
					   'menu_list'=>$get_check_in_menus
					 ); */
		$res = $this->User1_model->clicked_role_give_permission($user_id,$get_check_in_menus);
		echo json_encode($res);
	}
	public function get_all_menu_details()
	{
		$res = $this->User1_model->clicked_role_give_permission($data,$user_id);
		echo json_encode($res);
	}
	public function clicked_role_permission_edit()
	{
		$id = $this->input->post('id');
		$res = $this->User1_model->clicked_role_permission_edit($id);
		echo json_encode($res);
	}
	public function get_edit_permissions()
	{
		$id = $this->input->post('get_user_id');
		$res = $this->User1_model->get_edit_permissions($id);
		echo json_encode($res);
	}
}
?>