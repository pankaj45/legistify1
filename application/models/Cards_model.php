<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cards_model extends CI_Model {

function set_data($data)
  {
  	if($this->db->insert('cards',$data))
    {
      return true;
    }
    else
    {
      return false;
    }
  } 


function getcards($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `cards` ON `vendor`.vendor_no = `cards`.vendor_no AND `vendor`.`category`='cards' AND `cards`.`vendor_no`=$data ";

	return $this->db->query($query);

}
}