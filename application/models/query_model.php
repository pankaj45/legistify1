<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class query_model extends CI_Model {

function insert_query($data)
 {
 	 //$this->db->set('Time', 'NOW()', FALSE);
     if($this->db->insert('query',$data))
     {
         return true;  
     }
     else
     {
     	return "error";
     }
 } 

} 