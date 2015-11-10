<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Photography_model extends CI_Model {

function set_data($data)
  {
  	if($this->db->insert('photography',$data))
    {
      return true;
    }
    else
    {
      return false;
    }
  } 

function getphotography($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `photography` ON `vendor`.vendor_no = `photography`.vendor_no AND `vendor`.`category`='photography' AND `photography`.`vendor_no`=$data ";

	return $this->db->query($query);
}  


}