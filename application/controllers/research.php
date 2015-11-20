<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Research"));
		$this->load->view('research');
		$this->load->view('default/footer');
	}

}	