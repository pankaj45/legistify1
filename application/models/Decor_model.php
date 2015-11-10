<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Decor_model extends CI_Model {

function set_data($data)
  {
  	if($this->db->insert('decor',$data))
    {
      return true;
    }
    else
    {
      return false;
    }
  } 


function getdecorator($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `decor` ON `vendor`.vendor_no = `decor`.vendor_no AND `vendor`.`category`='decor' AND `decor`.`vendor_no`=$data ";

	return $this->db->query($query);

}
}