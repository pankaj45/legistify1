	<?php
	 function get_images($link)
	{
		return base_url()."images/".$link;
		
	}
	
	function verify_services()
	{$servicelist=$this->session->userdata('service');
		foreach ($servicelist as $service)
		{
			if(empty($this->session->userdata($service)))
				return "hello";
		}
		return"bye";
	}
	
	
	?>