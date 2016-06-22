<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class team_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  function saveTeam($team)
  {
    $foto=$_FILES['image']['name'];
    $rute=$_FILES['image']['tmp_name'];
    $destine="assets/img/team/".$foto;
    $team['image']=$destine;
    copy($rute,$destine);
    $this->db->insert('team',$team);
  }

  function select()
  {
    $query=$this->db->get('team');
    return $query->result();
  }

  function deleteTeam($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('team');
  }

}
