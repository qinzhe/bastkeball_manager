<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class player_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }


  function savePlayer($player)
  {

    $foto=$_FILES['img']['name'];
    $rute=$_FILES['img']['tmp_name'];
    $destine="assets/img/player/".$foto;
    $player['img']=$destine;
    copy($rute,$destine);
    $this->db->insert('players',$player);

}

  function select($team_name)
  {
    $this->db->select("players.alias, players.id as player_id,players.number,players.position,players.img, team.cname,team.city,players.name,team.id");
    $this->db->from("players");
    $this->db->join("team", "players.team_id= team.id");
    $this->db->where('team.id=',$team_name);
    $query = $this->db->get();

    return $query->result();
  }

  function deletePlayer($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('players');
  }

}
