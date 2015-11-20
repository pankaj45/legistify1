<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Pending"));
		$this->load->view('myDocuments');
		$this->load->view('default/footer');
	}

}	