<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	function __construct()
	{
        parent::__construct();
		$this->load->helper('date');
    }
	
	public function check_user_login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$username);
		$this->db->where('password',$password);
		// $this->db->where('password',sha1($password));
		return $this->db->get()->result_array();
	}
	public function check_customer_login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('customer_details');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get()->result_array();
	}
	public function save_new_staff($data)
	{
		$this->db->insert('staff_details', $data);
		$this->db->select('*');
		$this->db->from('staff_details');
		$this->db->order_by('id','DESC');
		$this->db->limit(1);			
		return $this->db->get()->result_array();
	}
	
}

?>