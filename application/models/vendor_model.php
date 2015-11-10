<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendor_model extends CI_Model {

function set_data($data)
  {
  	if($this->db->insert('vendor',$data))
    {
      return $this->db->insert_id();;
    }
    else
    {
      return false;
    }
  }   

function get_vno($name)
 {
   $this->db->select("vendor_no");
   $this->db->where('name',$name);
   $result = $this->db->get('vendor');
   return $result->row('vendor_no');
 }  


function get_vcategory($vid)
 {
   $this->db->select("category");
   $this->db->where('vendor_no',$vid);
   $result = $this->db->get('vendor');
   return $result->row('category');
 } 

function load_all($data)
{
  //$query="SELECT * FROM `VENDOR`";
  //$this->db->query($query);
  $this->db->select("*");
  $this->db->where('category',$data);
  return $this->db->get('vendor');

}

function load_vendor()
{
  $this->db->select("*");
  return $this->db->get('vendor');
}

function demo()
{
  $this->db->select("*");
  $query=$this->db->get('vendor');
  return $query;
}


}
