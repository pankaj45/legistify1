<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Careers"));
		$this->load->view('careers');
		$this->load->view('default/footer');
	}

}	