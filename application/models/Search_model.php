<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search_model extends CI_Model
{
	function search($soundex_string,$string)
	{
		//$query="SELECT `s_no`,`name`,`tags`, `table`,MATCH (`tags`) AGAINST ('$string' IN BOOLEAN MODE) AS `relevance` FROM (SELECT `s_no`,`name` AS `name`,`tags` AS `tags`,'venues' AS `table` FROM `venues` UNION SELECT `s_no`,`name` AS `name`,`tags` AS `tags`,'caterer' AS `table` FROM `caterer` ) AS `searchtable` WHERE MATCH (`searchtable`.`tags`) AGAINST ('$string' IN BOOLEAN MODE) ORDER BY `relevance` DESC  LIMIT 10"	;
		$query="SELECT `name`,`s_no`,`table_name` AS `type`, MATCH(`tags`) AGAINST('$soundex_string' IN BOOLEAN MODE) AS `relevance` FROM `vendor` WHERE MATCH(`tags`) AGAINST('$soundex_string' IN BOOLEAN MODE) OR  MATCH(`name`) AGAINST('$string*' IN BOOLEAN MODE)  ORDER BY `relevance` DESC LIMIT 10 ";
		$result=$this->db->query($query);
		return $result;

	}
	function predict($data)
	{$data=$data.'*';
	$query="SELECT `name` FROM `vendor` WHERE MATCH(`name`) AGAINST('$data' IN BOOLEAN MODE)";
	$result=$this->db->query($query);
		return $result;
	}


    function searchdata($data){
        $query = 'SELECT * FROM `vendor` WHERE name LIKE "%"?"%"  OR city LIKE "%"?"%" ';
        return $this->db->query($query, array($data,$data));

    }



}	
