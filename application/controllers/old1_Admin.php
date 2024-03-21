<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller { 

    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		//$this->load->model('ticket_model');
		//$this->load->model('User1_model');
        $this->load->model('Location_model');
		$this->load->model('Department_model');
		$this->load->model('Device_model');



		if($this->session->userdata('LOGGED_IN')=="1")
		{
	        $this->load->database();
			$this->load->model('Location_model');
			$this->load->model('Department_model');
			$this->load->model('Device_model');



	    }
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('login','refresh');
		}
	}

    public function access()
	 {
	    $data_val['title'] ="Other Changes";
	    $data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['location_details'] = $this->Location_model->get_location_details();
		$data_val['department_details'] = $this->Department_model->get_department_details();
		$this->load->view('other_changes',$data_val);
	 }

     public function save_location_details()
	{
		$location = $this->input->post('location'); 
		$location_id = $this->input->post('location_id'); 
		$data = array(
					'location'=>$this->input->post('location') ,
				//	'branch_master'=>$this->input->post('branch_master'),
					'location_id'=>$this->input->post('location_id'),
					'created_at' => date('Y-m-d'),	
					//'created_by' => 1,							
					); 
	  $res = $this->Location_model->save_location_details($data);	
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
		$res = $this->Location_model->create_new_role($data);									
		echo json_encode($res);
	}
	public function clicked_location_delete_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->Location_model->clicked_location_delete_action($get_id);
		echo json_encode($res);
	}
	public function clicked_location_password_updations()
	{
		$get_id = $this->input->post('location');
		$full_name = $this->input->post('full_name');
		$id_value_stored = $this->input->post('id_value_stored');
		$change_password_location = $this->input->post('change_password_location');
		$change_repass_location = $this->input->post('change_repass_location');
		
		$res = $this->Location_model->clicked_location_password_updations($id_value_stored,$change_password_location,$change_repass_location);
		echo json_encode($res);
	}
	
	public function clicked_view_edit_location_details()
	{
		$get_id = $this->input->post('id');
		$res = $this->Location_model->clicked_view_edit_location($get_id);
		echo json_encode($res);
	}

	public function clicked_location_details_updations()
	{

				$get_id = $this->input->post('edit_id');
				$data = array(
					'location'=>$this->input->post('location'),
					//'branch_master'=>$this->input->post('branch_master'),
					'location_id'=>$this->input->post('location_id'), 
					'updated_at' => date('Y-m-d H:i:s'),	
					//'updated_by' => 1,							
					);
	
		$res = $this->Location_model->clicked_location_details_updations($get_id,$data);
		echo json_encode($res);
	}
	public function check_location()
	{
			$location = $this->input->post('location');
	//file_put_contents("E://sujitha.txt","asdsa".print_r($branch_name,true),FILE_APPEND);

		$res = $this->db->query("select * from location where location='".$location."'")->result_array();
		
			echo json_encode($res);

	}
	
	public function clicked_role_delete_action()
	{
		$get_id = $this->input->post('get_cliked_id_value');
		$res = $this->Location_model->clicked_role_delete_action($get_id);
		echo json_encode($res);
	}
	
	public function clicked_edit_role_details()
	{
		$get_id = $this->input->post('id');
		$res = $this->Location_model->clicked_edit_role_details($get_id);
		echo json_encode($res);
	}

	public function update_edit_role_details()
	{
		$get_id = $this->input->post('id');
		$role_name = $this->input->post('role_name');
		$role_desc = $this->input->post('role_desc');
		
		$res = $this->Location_model->update_edit_role_details($get_id,$role_name,$role_desc);
		echo json_encode($res);
	}
	public function clicked_role_give_permission()
	{
		$id = $this->input->post('get_id');
		$get_check_in_menus = $this->input->post('get_check_in_menus');
		//$myArray = explode(',', $got_some_menu_id);
		/*$data = array(
					   'branch_id'=>$branch_id,
					   'menu_list'=>$get_check_in_menus
					 ); */
		$res = $this->Location_model->clicked_role_give_permission($id,$get_check_in_menus);
		echo json_encode($res);
	}
	public function get_all_menu_details()
	{
		$res = $this->Location_model->clicked_role_give_permission($data,$id);
		echo json_encode($res);
	}
	public function clicked_role_permission_edit()
	{
		$id = $this->input->post('id');
		$res = $this->Location_model->clicked_role_permission_edit($id);
		echo json_encode($res);
	}
	public function get_edit_permissions()
	{
		$id = $this->input->post('get_id');
		$res = $this->Location_model->get_edit_permissions($id);
		echo json_encode($res);
	}


    public function dept()
{
   $data_val['title'] ="Other Changes";
   $data_val['name'] = $this->session->userdata('USER_FNAME');
   $data_val['department_details'] = $this->Department_model->get_department_details();
   $this->load->view('other_changes',$data_val);
}
public function save_department_details()
{
   $dept_name = $this->input->post('dept_name');         
   $dept_id = $this->input->post('dept_id'); 
   $status = $this->input->post('status');
   $data = array(
			   'dept_name'=>$this->input->post('dept_name') ,
		   //	'branch_master'=>$this->input->post('branch_master'),
			   'dept_id'=>$this->input->post('dept_id'),
			   'status'=>$this->input->post('status'),
			   'created_at' => date('Y-m-d H:i:s'),	
			   //'created_by' => 1,							
			   ); 
 $res = $this->Department_model->save_department_details($data);	
 echo json_encode($res);
}
public function create_new_roledept()
{
   $role_name = $this->input->post('role_name'); 
   $role_desc = $this->input->post('role_desc');
   $data = array(
			   'role_name'=>$role_name,
			   'role_desc'=>$role_desc
		   );
   $res = $this->Department_model->create_new_role($data);									
   echo json_encode($res);
}
public function clicked_department_delete_action()
{
   $get_id = $this->input->post('get_clicked_id_value');
   $res = $this->Department_model->clicked_department_delete_action($get_id);
   echo json_encode($res);
}
public function clicked_department_password_updations()
{
   $get_id = $this->input->post('department');
   $full_name = $this->input->post('full_name');
   $id_value_stored = $this->input->post('id_value_stored');
   $change_password_department = $this->input->post('change_password_department');
   $change_repass_department = $this->input->post('change_repass_department');
   
   $res = $this->Department_model->clicked_department_password_updations($id_value_stored,$change_password_department,$change_repass_department);
   echo json_encode($res);
}

public function clicked_view_edit_department_details()
{
   $get_id = $this->input->post('id');
   $res = $this->Department_model->clicked_view_edit_department($get_id);
   echo json_encode($res);
}

public function clicked_department_details_updations()
{
	$get_id = $this->input->post('edit_dept_id');
	$data = array(
		'dept_name'=>$this->input->post('dept_name'),
		'dept_id'=>$this->input->post('dept_id'),
		'status'=>$this->input->post('status'),
		'updated_at' => date('Y-m-d H:i:s'),
	);
   $res = $this->Department_model->clicked_department_details_updations($get_id,$data);
   echo json_encode($res);
}

public function check_department()
{
	   $dept_name = $this->input->post('dept_name');
//file_put_contents("E://sujitha.txt","asdsa".print_r($branch_name,true),FILE_APPEND);

   $res = $this->db->query("select * from department where dept_name='".$dept_name."'")->result_array();
   
	   echo json_encode($res);

}

public function clicked_role_deptdelete_action()
{
   $get_id = $this->input->post('get_cliked_id_value');
   $res = $this->Department_model->clicked_role_deptdelete_action($get_id);
   echo json_encode($res);
}

public function clicked_deptedit_role_details()
{
   $get_id = $this->input->post('id');
   $res = $this->Department_model->clicked_deptedit_role_details($get_id);
   echo json_encode($res);
}

public function update_deptedit_role_details()
{
   $get_id = $this->input->post('id');
   $role_name = $this->input->post('role_name');
   $role_desc = $this->input->post('role_desc');
   
   $res = $this->Department_model->update_deptedit_role_details($get_id,$role_name,$role_desc);
   echo json_encode($res);
}
public function clicked_role_give_deptpermission()
{
   $id = $this->input->post('get_id');
   $get_check_in_menus = $this->input->post('get_check_in_menus');
   //$myArray = explode(',', $got_some_menu_id);
   /*$data = array(
				  'branch_id'=>$branch_id,
				  'menu_list'=>$get_check_in_menus
				); */
   $res = $this->Department_model->clicked_role_give_deptpermission($id,$get_check_in_menus);
   echo json_encode($res);
}
public function get_all_menu_deptdetails()
{
   $res = $this->Department_model->clicked_role_give_deptpermission($data,$id);
   echo json_encode($res);
}
public function clicked_role_permission_deptedit()
{
   $id = $this->input->post('id');
   $res = $this->Department_model->clicked_role_permission_deptedit($id);
   echo json_encode($res);
}
public function get_deptedit_permissions()
{
   $id = $this->input->post('get_id');
   $res = $this->Department_model->get_deptedit_permissions($id);
   echo json_encode($res);
}
	// devices code
	public function device()
	{
	$data_val['title'] ="Other Changes";
	$data_val['name'] = $this->session->userdata('USER_FNAME');
	$data_val['device_details'] = $this->Device_model->get_device_details();
	$this->load->view('other_changes',$data_val);
	}

	public function save_device_details()
	{
		$device_name = $this->input->post('device_name'); 
		$data = array(
		'device_name'=>$this->input->post('device_name') ,
		'created_at' => date('Y-m-d'),	
		); 
	$res = $this->Device_model->save_device_details($data);	
	echo json_encode($res);
	}
	public function create_new_roledevice()
	{
	$role_name = $this->input->post('role_name'); 
	$role_desc = $this->input->post('role_desc');
	$data = array(
				'role_name'=>$role_name,
				'role_desc'=>$role_desc
			);
	$res = $this->Device_model->create_new_roledevice($data);									
	echo json_encode($res);
	}
	public function clicked_device_delete_action()
	{
	$get_id = $this->input->post('get_clicked_id_value');
	$res = $this->Device_model->clicked_device_delete_action($get_id);
	echo json_encode($res);
	}
	public function check_device()
	{
		$device_name = $this->input->post('device_name');
	//file_put_contents("E://sujitha.txt","asdsa".print_r($branch_name,true),FILE_APPEND);

	$res = $this->db->query("select * from device where device_name='".$device_name."'")->result_array();
	
		echo json_encode($res);
	}
	public function clicked_role_devicedelete_action()
	{
	$get_id = $this->input->post('get_cliked_id_value');
	$res = $this->Device_model->clicked_role_devicedelete_action($get_id);
	echo json_encode($res);
	}
	public function clicked_role_give_devicepermission()
	{
	$id = $this->input->post('get_id');
	$get_check_in_menus = $this->input->post('get_check_in_menus');
	//$myArray = explode(',', $got_some_menu_id);
	/*$data = array(
					'branch_id'=>$branch_id,
					'menu_list'=>$get_check_in_menus
					); */
	$res = $this->Device_model->clicked_role_give_devicepermission($id,$get_check_in_menus);
	echo json_encode($res);
	}
	public function get_all_menu_devicedetails()
	{
	$res = $this->device_model->clicked_role_give_devicepermission($data,$id);
	echo json_encode($res);
	}
}
	?>
