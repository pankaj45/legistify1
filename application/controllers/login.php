<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller	
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('string');    
    }


	public function index()
	{
        $uname = $this->input->post('username1');
        $pass  = $this->input->post('password1');

		$res=$this->User_model->check_login($uname,$pass); 
        if($res)
        {
        	echo json_encode(1);
        }
       else
        {
            echo json_encode(0);
	    } 
	   
	}   

	

}	