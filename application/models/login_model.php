<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function registerUser($data)
  {
    $this->db->insert('users',$data);
    if($this->db->affected_rows()>0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  function loginUser($data)
  {
    $email=$data['email'];
    $pass=$data['pass'];
    $this->db->where('email',$email);
    $this->db->where('pass',$pass);

    $rs=$this->db->get('users');

    if($rs->num_rows()>0)
    {
        return $rs->row();
    }
    $allUsers=$this->db->get('users');
    if($allUsers->num_rows()<1){
      if ($email=='admin' && $pass=="123") {
        $admin=new stdClass();
        $admin->user_id='666';
        $admin->name='admin';
        $admin->email='admin@admin.com';
        return $admin;
      }
    }
    return false;


  }

}
