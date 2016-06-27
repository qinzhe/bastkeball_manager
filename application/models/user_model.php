<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  function show($valor)
  {
    $this->db->like("name",$valor);
    $query=$this->db->get('users');
    return $query->result();
  }

  function updateUser($data)
  {

    $id=$data['user_id'];
    $this->db->where("user_id",$id);
    $this->db->update('users',$data);

    if($this->db->affected_rows()>0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }




}
