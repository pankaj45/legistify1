<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Band_model extends CI_Model {

function set_data($data)
  {
  	if($this->db->insert('band',$data))
    {
      return true;
    }
    else
    {
      return false;
    }
  } 


function getband($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `band` ON `vendor`.vendor_no = `band`.vendor_no AND `vendor`.`category`='band' AND `band`.`vendor_no`=$data ";

	return $this->db->query($query);

}
}