<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User1_model extends CI_Model {

	function __construct()
	{
        parent::__construct();
		$this->load->helper('date');
    }
	
	public function get_user_details()
	{
		$this->db->select('*');
		$this->db->from('users');
		return $this->db->get()->result_array();
	}
	public function save_user_details($data)
	{
		$this->db->insert('users', $data);
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('user_id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
	
	public function clicked_user_delete_action($get_id)
	{
		  $this->db->where('user_id', $get_id);
 		  $this->db->delete('users'); 
 		  return 'Deleted success';
	}
	public function clicked_user_password_updations($id_value_stored,$change_password_user)
	{
		$sql = "UPDATE users SET password='".sha1($change_password_user)."' WHERE user_id='$id_value_stored'";
		$this->db->query($sql);
		return 'updated success';		
	}


	public function create_new_role($data)
	{
		$this->db->insert('user_new_role', $data);
		$this->db->select('*');
		$this->db->from('user_new_role');
		$this->db->order_by('id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
	public function get_user_role_details()
	{
		$this->db->select('*');
		$this->db->from('user_new_role');
		return $this->db->get()->result_array();
	}

	public function clicked_view_edit_users($get_id)
	{
		/* $this->db->select('*');
		 $this->db->from('users');
		 $this->db->where('user_id', $get_id);*/
		 return $this->db->query("select r.role_name,u.* from users u,user_roles r where u.role = r.role_id and u.user_id=". $get_id)->result_array();
	}
	public function clicked_user_details_updations($get_id,$data)
	{
		$this->db->where('user_id', $get_id);
		$this->db->update('users', $data);
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('user_id','DESC');
		return $this->db->get()->result_array();
	}
	

	public function clicked_role_delete_action($get_id)
	{
		  $this->db->where('user_id', $get_id);
 		  $this->db->delete('user_new_role'); 
 		  return 'Deleted success';
	}
	public function clicked_edit_role_details($get_id)
	{
		 $this->db->select('*');
		 $this->db->from('user_new_role');
		 $this->db->where('id', $get_id);
		 return $this->db->get()->result_array();
	}

	public function update_edit_role_details($get_id,$role_name,$role_desc)
	{
		$sql = "UPDATE user_new_role SET role_name='$role_name', role_desc='$role_desc' WHERE id='$get_id'";
		$this->db->query($sql);
		$this->db->select('*');
		$this->db->from('user_new_role');
		$this->db->where('id',$get_id);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
	
	public function clicked_role_give_permission($user_id,$get_check_in_menus)
	{
		 $sql = "UPDATE users SET menu_list='$get_check_in_menus' WHERE id='$user_id'";
		 $this->db->query($sql);
		 $this->db->select('*');
		 $this->db->from('users');
		 $this->db->where('id',$user_id);
		 return $this->db->get()->result_array();
	}
	public function user_info($userid)
    {
    	$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id', $userid);	 	 
	 	return $this->db->get()->result_array();
    }

    public function get_total_counts()
    {
    	$sql = "SELECT COUNT(user_status) as user_count FROM users WHERE user_status = '1'";
    	$user_count = $this->db->query($sql)->result_array();
 
    	$sql = "SELECT COUNT(id) as staff_count FROM staff_details";
    	$staff_count = $this->db->query($sql)->result_array();

    	$sql = "SELECT COUNT(id) as customer_count FROM customer_details";
    	$customer_count = $this->db->query($sql)->result_array();

    	$sql = "SELECT COUNT(id) as appointment_count FROM new_appointment";

    	$appointment_count = $this->db->query($sql)->result_array();

    	$count2 = array_merge($user_count,$staff_count);
    	$count1 = array_merge($customer_count,$count2);
    	$counts = array_merge($appointment_count,$count1);
    	return $counts;
    }
    public function get_menu_list_from_database($logined_user_id)
	{
		$this->db->select('menu_list');
		$this->db->from('users');
		$this->db->where('id',$logined_user_id);
		return $this->db->get()->result_array();
	}

	public function clicked_role_permission_edit($id)
	{
		$this->db->select('menu_list');
		$this->db->from('menu_details');
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}
	public function get_edit_permissions($id)
	{
		$this->db->select('menu_list');
		$this->db->from('users');
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}
}

?>