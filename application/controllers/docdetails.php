<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docdetails extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Document Overview"));
		$this->load->view('document1');
		$this->load->view('default/footer');
	}

}	