<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Coins_model extends CI_Model {

function set_data($data)
  {
  	if($this->db->insert('coins',$data))
    {
      return true;
    }
    else
    {
      return false;
    }
  } 


function getcoins($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `coins` ON `vendor`.vendor_no = `coins`.vendor_no AND `vendor`.`category`='coins' AND `coins`.`vendor_no`=$data ";

	return $this->db->query($query);

}
}