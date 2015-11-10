<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logistic_model extends CI_Model {

	public function getlist($data)
	{$type=$data['type'];
		$query="SELECT `vehicle`,`cost/km`,`s_no` FROM `log` WHERE `type`  IN ($type)";
		$result =$this->db->query($query) or die('FATAL DATABASE ERROR');
		return $result;
	}


function getlogistic($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `log` WHERE `vendor`.vendor_no = `logistic`.vendor_no AND `vendor`.`table_name`='logistic' AND `log`.`vendor_no`=$data ";

	return $this->db->query($query);

}  


}