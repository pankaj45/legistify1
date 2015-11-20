<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "History"));
		$this->load->view('history');
		$this->load->view('default/footer');
	}

}	