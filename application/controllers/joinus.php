<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joinus extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Lawyer Sign Up"));
		$this->load->view('lawyerForm');
		$this->load->view('default/footer');
	}

}	