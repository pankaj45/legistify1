<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

function set_user($data)
  {
  	if($this->db->insert('users',$data))
    {
      return $this->db->insert_id();
    }
    else
    {
      return false;
    }
  } 


function validate($user,$key)
{
  $query= "UPDATE users SET `is_activated` = 1 WHERE `username`='$user' AND  `activation_key` = '$key'";
  $this->db->query($query);
  
  $test="SELECT `is_activated` FROM users WHERE `username`='$user'";
  return $this->db->query($test)->row('is_activated');

} 

function check_username($uname)
{
  $query="SELECT `username` FROM users WHERE `username`='$uname' ";
  return $this->db->query($query)->row('username');
}

function check_login($name,$pass)
{
  $query="SELECT * FROM users WHERE (`email`='$name' OR `username`='$name') AND `password`='$pass' ";
  return $this->db->query($query)->row('username');
}




}