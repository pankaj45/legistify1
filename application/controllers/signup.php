<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller	
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('string');    
    }


	public function index()
	{
 
        $key = random_string('alnum', 16);
		$data = array(
			'fname' => $this->input->post('firstname'),
			'lname' => $this->input->post('lastname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'user_type' => $this->input->post('optradio'),
			'activation_key' => $key
			);

		$res=$this->User_model->check_username($this->input->post('username'));
        if($res == $this->input->post('username') )
        {
        	echo json_encode($res);
        }
       else
       {
		$result = $this->User_model->set_user($data);

		 if($result)
		 {
           $res=$this->_sendmail($data['fname'],$data['email'],"Test mail");
           echo json_encode(1);
		 }

		} 

	}


	public function activate($user,$key)
	{
       $result=$this->User_model->validate($user,$key);
       if($result)
       {
       	echo "Account Activated";
       }

       else
       {
       	echo "False";
       }

	}

	function _sendmail($name,$to,$msg)
	{
	    $this->load->library('email'); 
	    $this->email->from('pankaj.arora1994@gmail.com', $name);
	    $this->email->to($to);
	    $this->email->subject('Test');
	    $this->email->message($msg);
	    if ($this->email->send())
	        return true;
	    else
	        return false;
	}




}	