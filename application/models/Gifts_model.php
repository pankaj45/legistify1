<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gifts_model extends CI_Model {

function set_data($data)
  {
  	if($this->db->insert('gifts',$data))
    {
      return true;
    }
    else
    {
      return false;
    }
  } 


function getgifts($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `gifts` ON `vendor`.vendor_no = `gifts`.vendor_no AND `vendor`.`category`='gifts' AND `gifts`.`vendor_no`=$data ";

	return $this->db->query($query);

}
}