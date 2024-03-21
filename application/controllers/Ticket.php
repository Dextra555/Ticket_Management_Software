<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ticket extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ticket_model');
		$this->load->model('User1_model');
		$this->load->library('email');
		$this->load->helper('form'); 
		$this->load->helper('date');

		if($this->session->userdata('LOGGED_IN')=="1")
		{
	        $this->load->database();
	        $this->load->model('ticket_model');
	        $this->load->model('User1_model');
	        $this->load->database();
		}
		else
		{
			$this->session->set_userdata('last_page', current_url());
			redirect('login','refresh');
		}
	}
	
	
	public function get_technicians() {
		$location_id = $this->input->post('location_id');
	
		$escaped_location_id = $this->db->escape($location_id);
	
	
		$technicians = $this->db
        ->select('*')
        ->from('users')
        ->where('role', '3')
         ->like('location_id', $location_id)
        ->get()
        ->result_array();

		echo json_encode($technicians);
	}



		public function ticket_homepage()
	{
	    
		
	    $data_val['title'] ="Tickets";
	    $data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['ticket_details'] = $this->ticket_model->get_all_ticket();
		$this->load->view('ticket',$data_val); 
		
		$res = $this->ticket_model->get_all_ticket1();
		
		foreach($res as $data){
		    $update_at = date('Y-m-d', strtotime($data->updated_at));
		    $two_days = date('Y-m-d', strtotime($update_at. ' + 2 days'));
		    $today =date('Y-m-d');
		   
		    if($today >=  $two_days && $data->assigned_staff_id == ""){
		   // $branches=$this->db->query("select branch_name from branch where branch_id=".$data->branch)->row();
            $mail['name']=$data->name;
            $mail['comapany_name']=$data->company_name;
            $mail['contact_person']=$data->contact_person;
            $mail['mobile']=$data->contact_number;
            $mail['email']=$data->email;
           // $mail['branch']=$branches->branch_name;
            $mail['address']=$data->address;
            $mail['system']=$data->system;
            $mail['device_location']=$data->device_location;
            $mail['subject']=$data->subject;
            $mail['issue_desc']=$data->issue_desc;
            $mail['request_date']=$data->request_date;
            $sub = "New Ticket Update Request #".$data->ticket_id.""; 
            $this->load->library('email');
    		$this->email->initialize(array(
    		'protocol' => 'smtp',
    		'smtp_host' => 'smtp.gmail.com',
    		'smtp_user' => 'dextrawebdeveloper@gmail.com',
    		'smtp_pass' => 'DEXTRA10*babu',
    		//'smtp_port' => 587,
    		'smtp_port' => 587,
    		 'mailtype'  => 'html',
    	    'charset'   => 'utf-8',
    	    'protocol'   => 'mail',
    		'crlf' => "\r\n",
    		'newline' => "\r\n"
    		));
    		
    		if($data->file_path != ""){
    		    $ima = $data->file_path;
        		$images = explode(',', $ima);
        		foreach($images as $img){
        	    	$this->email->attach("uploads/ticket". $data->ticket_id ."/".$img);
        		}
    		}
    	
            $this->email->from('ffd@zenerfire.com','Zener Fire & Security LLC');
            $this->email->to('alsathish@technocit.com');
           // $this->email->cc('dextrawebdeveloper@gmail.com');
            $this->email->subject($sub); 
            $this->email->message($this->load->view('sla_ticket_mailer',$mail,TRUE));
            //  $ok = $this->email->send();
		
		    }
		}
	
	}  
		public function ticket_assign()
	{
	    $data_val['title'] ="Ticket";
	    $data_val['name'] = $this->session->userdata('USER_FNAME');
		$data_val['ticket_details'] = $this->ticket_model->get_all_ticket();
		$this->load->view('ticket',$data_val);  
	}  
     public function get_search_result()
     {
            $tc_from = $this->input->post('ticket_from');
            $tc_to = $this->input->post('ticket_before');
    		$ticket_from = date('Y-m-d',strtotime($tc_from)); 
    		$ticket_before =  date("Y-m-d", strtotime($tc_to)); 
    		$ticket_status = $this->input->post('ticket_status');
            // print_r($ticket_before);

      	  $res = $this->ticket_model->get_search_result($ticket_from,$ticket_before,$ticket_status);	
    	  echo json_encode($res);	   
    }
	public function create_ticket()
	{
		$customer_id = $this->input->post('customer_id'); 
		$customer_name = $this->input->post('name'); 
		$contact_number = $this->input->post('contact_number'); 
		$email = $this->input->post('email'); 
		$location = $this->input->post('location'); 
		$technician =$this->input->post('technician');
		$systems = $this->input->post('system');
		
			if($systems == "other"){
				$system = $this->input->post('otherOption'); 
			}else{					
				$system = $this->input->post('system');	
			}
		
		$dept =$this->input->post('dept');
		$subject = $this->input->post('subject'); 
		$issue_desc = $this->input->post('issue_desc'); 


		$ticket_date = $this->input->post('ticket_date'); 
		$ticket_time = $this->input->post('ticket_time'); 
	//	$comments = $this->input->post('comments'); 
		// $company_name = $this->input->post('company_name'); 
		// $contact_person = $this->input->post('contact_person'); 
		// $branch = $this->input->post('branch'); 
		$status = 1;
		$customer_id1 = '';

		$data1 = array(
			'user_id'=>$customer_id,
			'name'=>$customer_name,
			'contact_number'=>$contact_number,
			// 'address'=>$address,
			'email'=>$email,
			'subject'=>$subject,
			'issue_desc'=>$issue_desc,
			'location'=>$location,
			'technician'=>$technician,
			'system'=>$system,
			'department'=>$dept,
			// 'contact_person'=>$contact_person,
			//'comments'=>$comments,
			'issue_status'=>1,
			'assigned_staff_id'=>$technician,
			'request_date'=>date('Y-m-d',now()),
			'created_by'=>$this->session->userdata('USER_ID'),
			'created_at'=>date('Y-m-d h:i',now()),
			'updated_by'=>$this->session->userdata('USER_FNAME'),
			'updated_at'=>date('Y-m-d h:i',now())
			); 

		$get_current_logined_user_fname = $this->session->userdata('USER_FNAME');
		$res = $this->ticket_model->create_ticket($data1);
	    foreach ($res as $data) {

            //$branches=$this->db->query("select branch_name from branch where branch_id=".$data->branch)->row();

            $mail['name'] = $data->name;
          // $mail['comapany_name'] = $data->company_name;
           //$mail['contact_person'] = $data->contact_person;
            $mail['mobile'] = $data->contact_number;
            $mail['email'] = $data->email;
            //$mail['branch'] = 'Chennai';
          // $mail['address'] = $data->address;
            $mail['system'] = $data->system;
            $mail['location'] = $data->location;
            $mail['subject'] = $data->subject;
            $mail['department'] = $data->department;
            $mail['assigned_staff_id'] = $data->assigned_staff_id;
			// $mail['department'] = $data->dept;
			// $mail['assigned_staff_id'] = $data->$technician;
            $mail['issue_desc'] = $data->issue_desc;
            $mail['request_date'] = $data->request_date;
            $sub = "New Ticket Request #" . $data->ticket_id . " Created";

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'tls://smtp.gmail.com',
                'smtp_user' => 'dextrawebdeveloper@gmail.com',
                'smtp_pass' => 'awvk esil nybm zgae',
                'smtp_timeout' => 30,
                'smtp_port' => 465,
                'charset' => 'utf-8',
                'mailtype' => 'html',
                'newline' => "\r\n",
            );

            $this->load->library('email');
            $this->email->initialize($config);

            if ($data->file_path != "") {
                $ima = $data->file_path;
                $images = explode(',', $ima);
                foreach ($images as $img) {
                    $this->email->attach("uploads/ticket" . $data->ticket_id . "/" . $img);
                }
            }

            $technician_id = $this->db->escape($data->technician);
            $query = "SELECT * FROM users WHERE user_id = $technician_id";
            $technician_data = $this->db->query($query)->row();

            $this->email->from('dextrawebdeveloper@gmail.com', 'Dextra');
            $this->email->to($data->email);
            $this->email->cc($technician_data->email);

            $this->email->subject($sub);
            $this->email->message($this->load->view('create_ticket_mailer', $mail, true));
            $ok = $this->email->send();
        }
	  echo json_encode($res);
	}
	public function ticket_pending_update()
	{
    	$update_id = $this->input->post('update_id'); 
		$service_engineer = $this->input->post('service_engineer'); 
		$comment = $this->input->post('description'); 
		$status = $this->input->post('status'); 
		 $comments = array();
		
		
        if($comment !=""){
		$data2 = array(
			'ticket_id'=>$update_id,
			'comment'=>$comment,
			'comment_by'=>$this->session->userdata('USER_ID'),
			'created_at'=>date('Y-m-d h:i',now())
			); 
			$this->db->insert('comments', $data2);

        }
	$data1 = array(
		
			'assigned_staff_id'=>$service_engineer,
			'issue_status'=>$status,
			'updated_by'=>$this->session->userdata('USER_FNAME'),
			'updated_at'=>date('Y-m-d h:i',now())
			); 
	  $ticket_status = $this->db->query("select * from ticket where ticket_id=".$update_id)->row();

	 $res = $this->ticket_model->ticket_pending_update($data1,$update_id);
	 		 $comments = $this->ticket_model->get_all_comments($update_id);

	  
	 //  if($ticket_status->issue_status != $status || $ticket_status->assigned_staff_id != $service_engineer){
	       
	    foreach($res as $data){
    	        $branches=$this->db->query("select branch_name from branch where branch_id=".$data->branch)->row();
    	        $status=$this->db->query("select status_name from status where status_id=".$data->issue_status)->row();
                $staff=$this->db->query("select * from users where user_id=".$data->assigned_staff_id)->row();
                
                $mail['name']=$data->name;
                $mail['comapany_name']=$data->company_name;
                $mail['contact_person']=$data->contact_person;
                $mail['mobile']=$data->contact_number;
                $mail['email']=$data->email;
                $mail['branch']=$branches->branch_name;
                $mail['address']=$data->address;
                $mail['system']=$data->system;
                $mail['device_location']=$data->device_location;
                $mail['subject']=$data->subject;
                $mail['issue_desc']=$data->issue_desc;
                $mail['status']=$status->status_name;
                $mail['staff_name']=$staff->name;
                $mail['staff_mobile']=$staff->mobile;
                $mail['request_date']=$data->request_date;
                $mail['comments']=$comments;
                $sub = "Ticket No #".$data->ticket_number." has been updated"; 
                $this->load->library('email');
        		$this->email->initialize(array(
        		'protocol' => 'smtp',
        		'smtp_host' => 'smtp.gmail.com',
        		'smtp_user' => 'dextrawebdeveloper@gmail.com',
        		'smtp_pass' => 'DEXTRA10*babu',
        		//'smtp_port' => 587,
        		'smtp_port' => 587,
        		 'mailtype'  => 'html',
        	    'charset'   => 'utf-8',
        	    'protocol'   => 'mail',
        		'crlf' => "\r\n",
        		'newline' => "\r\n"
        		));
        			
        		if($data->file_path != ""){
        		    $ima = $data->file_path;
            		$images = explode(',', $ima);
            	
            		foreach($images as $img){
            	    	$this->email->attach("uploads/ticket". $data->ticket_id ."/".$img);
            		}
        		}
        	
                $this->email->from('ffd@zenerfire.com','Zener Fire & Security LLC');
                $this->email->to($data->email);
               // $this->email->cc('alsathish@technocit.com ');
                $this->email->subject($sub); 
                $this->email->message($this->load->view('update_ticket_mailer',$mail,TRUE));
                $ok = $this->email->send();
    	    }
	    //}
	  echo json_encode($res);
	}
	

	public function view_ticket_details()
	{
		$id = $this->input->post('id'); 
		$res = $this->ticket_model->view_ticket_details($id);	
		echo json_encode($res);
	}


	

}

?>