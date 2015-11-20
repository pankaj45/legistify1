<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Checkout"));
		$this->load->view('checkout1');
		$this->load->view('default/footer');
	}

}	