<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends CI_Controller
{
    public function __construct()
       {
            parent::__construct();
            $this->load->model('User_model');
            $this->load->helper('string');    
       }

   

	public function index()
	{ 
		$this->load->view('index');
		
	}







}
