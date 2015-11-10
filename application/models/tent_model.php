<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tent_model extends CI_Model {
	public function getlist($data)
		{
			//$m=$data['menu'];
			//$t=$data['type'];
			
			
			
			$query="SELECT  `name` , `s_no` ";
			if($data!="")
			{
				$query=$query." , ".$data."  AS `budget` ";	}
			$query=$query." FROM `tent` ";
		
			$result=$this->db->query($query)	or die("error in query");
			return $result;
		}



function gettent($data)
{	$query="SELECT * FROM `vendor` INNER JOIN `tent` WHERE `vendor`.vendor_no = `tent`.vendor_no AND `vendor`.`category`='tent' AND `venues`.`vendor_no`=$data ";

	return $this->db->query($query);

}
 

}			
			