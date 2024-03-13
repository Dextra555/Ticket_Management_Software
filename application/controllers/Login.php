<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
	$this->load->helper('cookie');
		$this->load->model('Login_model');
	}
	
	public function index()
	{
	//	print_r(sha1('Super6339'));
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
			if($this->session->userdata('last_page') != null){
				redirect($this->session->userdata('last_page'));
			}
			else
			{
				if($this->session->userdata('USER_ROLE') === "1")
					{
						redirect('super_admin/super_admin_homepage','refresh');
					}
					else if($this->session->userdata('USER_ROLE') === "2")
					{
						redirect('super_admin/super_admin_homepage','refresh');
					}
					else if($this->session->userdata('USER_ROLE') === "3")
					{
						redirect('ticket/ticket_assign','refresh');
					}
					else if($this->session->userdata('USER_ROLE') === "4")
					{
						redirect('ticket/ticket_homepage','refresh');
					}
				
			}
		}
		else
		{
			$this->load->view('login');
		}
	}
	
	function verifylogin()
	{
	    	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    			if($this->session->userdata('last_page') != null){
    				redirect($this->session->userdata('last_page'));
    			}
			else
			{
				if($this->session->userdata('USER_ROLE') === "1")
					{
						redirect('super_admin/super_admin_homepage','refresh');
					}
					else if($this->session->userdata('USER_ROLE') === "2")
					{
						redirect('super_admin/super_admin_homepage','refresh');
					}
					else if($this->session->userdata('USER_ROLE') === "3")
					{
						redirect('ticket/ticket_assign','refresh');
					}
					else if($this->session->userdata('USER_ROLE') === "4")
					{
						redirect('ticket/ticket_homepage','refresh');
					}
				
			}
		}else{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');  
		}
		else
		{

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$rememberme = $this->input->post('remember_me');

			$result = $this->Login_model->check_user_login($username, $password);

			if (count($result) > 0)
			{
			    if($rememberme == "on"){
                     $cookie = array(
                       'remember'   => 'true',
                       //'value'  => 'Random string',
                       //'expire' => '1209600',  // Two weeks
                       'domain' => 'http://zener.tcit.ae',
                       'path'   => '/',
                       'username'=>$username,
                       'password'=>$password,
                     
                       
                    );
                    setcookie('cookie', serialize($cookie));
                 //set_cookie($cookie);

			    }
			    else{
			         $cookie = array(
                       'remember'   => '',
                       //'value'  => 'Random string',
                       //'expire' => '1209600',  // Two weeks
                       'domain' => '',
                       'path'   => '',
                       'username'=>"",
                       'password'=>"",
                     
                       
                    );
			        setcookie('cookie', serialize($cookie));
			    }
            
			    			
				$sess_array = array();
				$this->session->set_userdata('LOGGED_IN', 1);
				$this->session->set_userdata('logged_in', TRUE);
				$this->session->set_userdata('USER_ID', $result[0]['user_id']);
				$this->session->set_userdata('USER_NAME', $result[0]['username']);
				$this->session->set_userdata('USER_ROLE', $result[0]['role']);
				$this->session->set_userdata('USER_FNAME', $result[0]['name']);
				$this->session->set_userdata('PASSWORD', $password);
				$this->session->set_userdata('REMEMBER', $rememberme);
				
			      echo json_encode($_SESSION);

			}

			else
			{
				echo 1;
			}
		}
		}
	
	}

		function forgotpwd(){
			$forget_mail=$this->security->xss_clean($_POST['email']);   

            $sql = "select * from customer_details where email = ?" ;
            $rowarray =  $this->db->query($sql,array($forget_mail));  
            $rowdata = $rowarray->row_array();
            $resm = $rowarray->num_rows;   
			
            if(!empty($rowdata))
            {  

				$pwd = mt_rand(100000,999999); 
                $frm_pass = sha1($pwd);

				$upspwd['password'] = $frm_pass;

				$get_id = $rowdata['id'];
				$this->db->where('id', $get_id);
				$this->db->update('customer_details',$upspwd);
            
                $mail['first_name']=$rowdata['name'];
                $mail['username']=$rowdata['username'];
                $mail['password']=$pwd;
                $sub = "Forgot password login credentials for zenerfire.com";
                $this->load->library('email');
                //$config['mailtype'] = 'html';
                //$config['protocol'] = 'mail';
               // $this->email->initialize($config);
				
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
				
                $this->email->from('ffd@zenerfire.com','Zener Fire & Security LLC');
                $this->email->to($forget_mail);
                $this->email->subject($sub); 
               //	echo $this->load->view('forgot_mailer',$mail,TRUE);
                $this->email->message($this->load->view('forgot_mailer',$mail,TRUE));
                $ok = $this->email->send();
							     
                $this->session->set_flashdata('sc', 'Password sent to your mail-id');
              	echo "1";
            }
            else
            {
                $this->session->set_flashdata('sc', 'Please resgister.We dont have your record.');
               	echo "2";
            }
		}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');  
	}
	
	
}

?>