<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caterer_model extends CI_Model {

function set_data($data)
  {
  	if($this->db->insert('caterer',$data))
    {
      return true;
    }
    else
    {
      return false;
    }
  } 

function getcaterer($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `caterer` ON `vendor`.vendor_no = `caterer`.vendor_no AND `vendor`.`category`='caterer' AND `caterer`.`vendor_no`=$data ";

	return $this->db->query($query);

}

}