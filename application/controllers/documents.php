<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documents extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Documents"));
		$this->load->view('categories');
		$this->load->view('default/footer');
	}

}	