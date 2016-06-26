<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller{
  public $cname='';
  public $team='';
  public function __construct()
  {
    parent::__construct();
    $this->load->model('player_model');
    comebacklogin();
  }

  function index()
  {
    if (isset($_GET['id']))
    {
      $team=$_GET['id'];
      $data=array();
      $id=(isset($_GET['id']))?$_GET['id']+0:0;

      $data['teamsplayer']=$this->player_model->select($team);
      $this->load->view('Player/index',$data);

    }

  }

  function save()
  {
    if ($_POST)
    {
      $this->player_model->savePlayer($_POST);
    }
    redirect(base_url('/Player/index'));
  }

  function delete()
  {
    $id=(isset($_GET['id']))?$_GET['id']+0:0;
    $this->player_model->deletePlayer($id);
    $this->load->view('Message/index.html');
  }


}
