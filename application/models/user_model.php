<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user_model extends CI_Model {
function set_name($data)
{
	$this->db->insert('user',$data);
	
}



}