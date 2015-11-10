
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends CI_Controller
{

    public function __construct()
       {
            parent::__construct();
                
       }

	public function index()
	{
		$this->load->view('index');
		
	}


	public function about()
	{
		$this->load->view('default/header',array('title' => "About Us"));
		$this->load->view('about');
		$this->load->view('default/footer');
	}

	public function careers()
	{
		$this->load->view('default/header',array('title' => "Careers"));
		$this->load->view('careers');
		$this->load->view('default/footer');
	}


	public function categories()
	{
		$this->load->view('default/header',array('title' => "Categories"));
		$this->load->view('categories');
		$this->load->view('default/footer');
	}


	public function checkout()
	{
		$this->load->view('default/header',array('title' => "Checkout"));
		$this->load->view('checkout1');
		$this->load->view('default/footer');
	}
	
	public function document()
	{
		$this->load->view('default/header',array('title' => "Document 1"));
		$this->load->view('document1');
		$this->load->view('default/footer');
	}

	public function document2()
	{
		$this->load->view('default/header',array('title' => "Document 2"));
		$this->load->view('document2');
		$this->load->view('default/footer');
	}

	public function lawyers()
	{
		$this->load->view('default/header',array('title' => "Lawyers"));
		$this->load->view('forLawyers');
		$this->load->view('default/footer');
	}

	public function history()
	{
		$this->load->view('default/header',array('title' => "History"));
		$this->load->view('history');
		$this->load->view('default/footer');
	}

	public function lawyersignup()
	{
		$this->load->view('default/header',array('title' => "Lawyer Sign Up"));
		$this->load->view('lawyerForm');
		$this->load->view('default/footer');
	}

	public function pending()
	{
		$this->load->view('default/header',array('title' => "Pending"));
		$this->load->view('myDocuments');
		$this->load->view('default/footer');
	}

	public function search()
	{
		$this->load->view('default/header',array('title' => "Search"));
		$this->load->view('research');
		$this->load->view('default/footer');
	}

	public function sitemap()
	{
		$this->load->view('default/header',array('title' => "Site Map"));
		$this->load->view('site_map');
		$this->load->view('default/footer');
	}

	public function team()
	{
		$this->load->view('default/header',array('title' => "Team"));
		$this->load->view('team');
		$this->load->view('default/footer');
	}

	public function topic()
	{
		$this->load->view('default/header',array('title' => "Topics"));
		$this->load->view('topic');
		$this->load->view('default/footer');
	}



}
