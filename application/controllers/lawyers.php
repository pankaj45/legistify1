<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lawyers extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Lawyers"));
		$this->load->view('forLawyers');
		$this->load->view('default/footer');
	}

}	