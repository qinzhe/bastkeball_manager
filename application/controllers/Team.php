<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('team_model');
  }


  function index()
  {
    $data=array();
    $data['teams']=$this->team_model->select();

    $this->load->view('Team/index',$data);
  }

  function addTeam()
  {

      $this->load->view('Team/AddTeam');
  }

  function saveTeam()
  {
    if ($_POST)
    {
      $this->team_model->saveTeam($_POST);
    }
    redirect('Team');
  }

  function delete()
  {
    $id=(isset($_GET['id']))?$_GET['id']+0:0;
    $this->team_model->deleteTeam($id);

    redirect('Team');
  }


}
