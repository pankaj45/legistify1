<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller	
{
	public function index()
	{
		$this->load->view('default/header',array('title' => "Site Map"));
		$this->load->view('site_map');
		$this->load->view('default/footer');
	}

}	