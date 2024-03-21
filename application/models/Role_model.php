<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Role_model extends CI_Model {

	function __construct()
	{
        parent::__construct();
		$this->load->helper('date');
    }


       public function get_role_invoice_details()
	{

//$start_date=$date.'-01';
//$end_date=$date.'-31';

//where b.created_dates BETWEEN $start_date AND $end_date

		 // $this->db->select('');
//$this->db->join('invoice_details', 'role_id= role_id');
//return $query = $this->db->get('user_roles')->result_array();
 return $this->db->query("SELECT * FROM `user_roles` as a JOIN `invoice_details` as b ON  a.role_id = b.role_id ")->result_array();

	}
	
	public function get_role_details()
	{
		$this->db->select('*');
		$this->db->from('user_roles');
		return $this->db->get()->result_array();
	}
	public function create_new_role($data)
	{
		$this->db->insert('user_roles', $data);
		$this->db->select('*');
		$this->db->from('user_roles');
		$this->db->order_by('role_id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
	public function clicked_role_delete_action($get_id)
	{
		  $this->db->where('role_id', $get_id);
 		  $this->db->delete('user_roles'); 
 		  return 'Deleted success';
	}
	public function clicked_role_view_edit_action($get_id)
	{
		$this->db->select('*');
		$this->db->from('user_roles');
		$this->db->where('role_id', $get_id);
		return $this->db->get()->result_array();
	}
	public function role_view_details($id)
	{
		$this->db->select('*');
		$this->db->from('user_roles');
		$this->db->where('id', $id);
		return $this->db->get()->result_array();
	}
	public function update_edit_user_roles($edit_id_vlaue,$name,$email_id,$address,$category_role,$contact_number,$reminder_months,$service_history)
	{
		//$sql = "UPDATE user_roles SET name='$name', email='$email_id', address='$address', category_role='$category_role', contact_number='$contact_number', reminder_months='$reminder_months', service_history='$service_history' WHERE id='$edit_id_vlaue'";
		$sql = "UPDATE user_roles SET name=('".$this->db->escape_str($name)."'), email='$email_id', address=('".$this->db->escape_str($address)."'), category_role='$category_role', contact_number='$contact_number', reminder_months='$reminder_months', service_history=('".$this->db->escape_str($service_history)."') WHERE role_id='$edit_id_vlaue'";

		$this->db->query($sql);
		$this->db->select('*');
		$this->db->from('user_roles');
		//$this->db->where('role_id',$edit_id_vlaue);
		return $this->db->get()->result_array();
	}
	public function check_contact_number_validation($contact_number)
	{
		$sql = "SELECT contact_number FROM user_roles WHERE contact_number LIKE '%$contact_number%'";
		return $this->db->query($sql)->result_array();
	}
	public function check_email_validation($email)
	{
		$sql = "SELECT email FROM user_roles WHERE email LIKE '%$email%'";
		return $this->db->query($sql)->result_array();
	}
	public function send_email_check_tomrrow_appointment($tormmrow_date)
	{
		$sql = "SELECT `id`, `email`, `name`, `scheduled_date`, `scheduled_time` FROM new_appointment WHERE scheduled_date = '$tormmrow_date' and `app_status` = '2' ";
		return $this->db->query($sql)->result_array();
	}
	public function send_email_check_remainder_months_for_appointments()
	{
		$sql = "SELECT * FROM user_roles";
		return $this->db->query($sql)->result_array();
	}
	public function get_role_last_service_date($get_id)
	{
		$this->db->select('created_date');
		$this->db->from('invoice_details');
		$this->db->where('role_id',$get_id);
		$this->db->order_by('created_date','DESC');
		$this->db->limit(1);
		return $this->db->get()->result_array();
	}
/*	public function get_role_last_service_date_update($role_id,$service_repeated_date,$last_service_date)
	{
		$sql = "UPDATE invoice_details SET created_date='$service_repeated_date' WHERE role_id='$role_id' AND created_date='$last_service_date' ";
		$this->db->query($sql);
		return 'Updated Date Successfully!';
	}*/
	
	public function table_updates_checking()
	{
		 $sql = "SELECT * FROM `task_details`";
  		 return  $this->db->query($sql)->result_array();
	}
	public function update_new_cust_id($id, $new_cust_id)
	{
		$sql = "UPDATE task_details set role_id_new='$new_cust_id' where id='$id'"; 
		$this->db->query($sql);
		return 'Updated Date Successfully!';
	}
	public function get_last_insert_id()
	{
		$this->db->select('*');
		$this->db->from('user_roles');
		$this->db->order_by('id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
}

?>