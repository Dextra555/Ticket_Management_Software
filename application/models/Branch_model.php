<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Branch_model extends CI_Model {

	function __construct()
	{
        parent::__construct();
		$this->load->helper('date');
    }
	
	public function get_branch_details()
	{
		$this->db->select('*');
		$this->db->from('branch');
		return $this->db->get()->result_array();
	}
	public function save_branch_details($data)
	{
		$this->db->insert('branch', $data);
		$this->db->select('*');
		$this->db->from('branch');
		$this->db->order_by('branch_id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
	
	public function clicked_branch_delete_action($get_id)
	{
		  $this->db->where('branch_id', $get_id);
 		  $this->db->delete('branch'); 
 		  return 'Deleted success';
	}
	public function clicked_branch_password_updations($id_value_stored,$change_password_branch)
	{
		$sql = "UPDATE branch SET password='".sha1($change_password_branch)."' WHERE branch_id='$id_value_stored'";
		$this->db->query($sql);
		return 'updated success';		
	}


	public function create_new_role($data)
	{
		$this->db->insert('branch_new_role', $data);
		$this->db->select('*');
		$this->db->from('branch_new_role');
		$this->db->order_by('id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
	public function get_branch_role_details()
	{
		$this->db->select('*');
		$this->db->from('branch_new_role');
		return $this->db->get()->result_array();
	}

	public function clicked_view_edit_branch($get_id)
	{
		 $this->db->select('*');
		 $this->db->from('branch');
		 $this->db->where('branch_id', $get_id);
		return $this->db->get()->result_array();
	}
	public function clicked_branch_details_updations($get_id,$data)
	{
		$this->db->where('branch_id', $get_id);
		$this->db->update('branch', $data);
		$this->db->select('*');
		$this->db->from('branch');
		$this->db->order_by('branch_id','DESC');
		return $this->db->get()->result_array();
	}
	

	public function clicked_role_delete_action($get_id)
	{
		  $this->db->where('branch_id', $get_id);
 		  $this->db->delete('branch_new_role'); 
 		  return 'Deleted success';
	}
	public function clicked_edit_role_details($get_id)
	{
		 $this->db->select('*');
		 $this->db->from('branch_new_role');
		 $this->db->where('id', $get_id);
		 return $this->db->get()->result_array();
	}

	public function update_edit_role_details($get_id,$role_name,$role_desc)
	{
		$sql = "UPDATE branch_new_role SET role_name='$role_name', role_desc='$role_desc' WHERE id='$get_id'";
		$this->db->query($sql);
		$this->db->select('*');
		$this->db->from('branch_new_role');
		$this->db->where('id',$get_id);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
	
	public function clicked_role_give_permission($branch_id,$get_check_in_menus)
	{
		 $sql = "UPDATE branch SET menu_list='$get_check_in_menus' WHERE id='$branch_id'";
		 $this->db->query($sql);
		 $this->db->select('*');
		 $this->db->from('branch');
		 $this->db->where('id',$branch_id);
		 return $this->db->get()->result_array();
	}
	public function branch_info($branchid)
    {
    	$this->db->select('*');
		$this->db->from('branch');
		$this->db->where('id', $branchid);	 	 
	 	return $this->db->get()->result_array();
    }

    public function get_total_counts()
    {
    	$sql = "SELECT COUNT(branch_status) as branch_count FROM branch WHERE branch_status = '1'";
    	$branch_count = $this->db->query($sql)->result_array();
 
    	$sql = "SELECT COUNT(id) as staff_count FROM staff_details";
    	$staff_count = $this->db->query($sql)->result_array();

    	$sql = "SELECT COUNT(id) as customer_count FROM customer_details";
    	$customer_count = $this->db->query($sql)->result_array();

    	$sql = "SELECT COUNT(id) as appointment_count FROM new_appointment";

    	$appointment_count = $this->db->query($sql)->result_array();

    	$count2 = array_merge($branch_count,$staff_count);
    	$count1 = array_merge($customer_count,$count2);
    	$counts = array_merge($appointment_count,$count1);
    	return $counts;
    }
    public function get_menu_list_from_database($logined_branch_id)
	{
		$this->db->select('menu_list');
		$this->db->from('branch');
		$this->db->where('id',$logined_branch_id);
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
		$this->db->from('branch');
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}
}

?>