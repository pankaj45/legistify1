<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Venue_model extends CI_Model {


function set_data($data)
  {
  	if($this->db->insert('venues',$data))
    {
      return true;
    }
    else
    {
      return false;
    }
  } 


function getvenue($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `venues` ON `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.`category`='venue' AND `venues`.`vendor_no`=$data ";

	return $this->db->query($query);

}


function filter_price($min,$max)
{ $query="SELECT * FROM `vendor` INNER JOIN `venues` ON `vendor`.vendor_no = `venues`.vendor_no AND `vendor`.`category`='venue' AND `venues`.`vendor_no`=$data ";

  return $this->db->query($query);

}




}