<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createdoc extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Create Document"));
		$this->load->view('document2');
		$this->load->view('default/footer');
	}

}	