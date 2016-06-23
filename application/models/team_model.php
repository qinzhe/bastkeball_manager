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
    var_dump($team);

    $id=$team['id'];
    if ($id+0>0)
    {
      $this->db->where('id',$id);
      unset($team['id']);
      $this->db->update('team',$team);
    }
    else
    {
      $foto=$_FILES['image']['name'];
      $rute=$_FILES['image']['tmp_name'];
      $destine="assets/img/team/".$foto;
      $team['image']=$destine;
      copy($rute,$destine);
      $this->db->insert('team',$team);
    }

  }

  function select()
  {
    $query=$this->db->get('team');
    return $query->result();
  }

  function selectTeamUpdate($id)
  {
    $team=new stdClass();
    $team->id=0;
    $team->cname='';
    $team->city='';
    $team->image='';

    $query=$this->db->where('id',$id);
    $query=$this->db->get('team');

    $rs=$query->result();
    if(count($rs)>0)
    {
      $team=$rs[0];
    }
    return $team;
  }

  function deleteTeam($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('team');
  }

}
