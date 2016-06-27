<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('team_model');
    comebacklogin();

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

  function edit()
  {
    $id=(isset($_GET['id']))?$_GET['id']+0:0;
    $data['team']=$this->team_model->selectTeamUpdate($id);
    $this->load->view('Team/edit',$data);

  }

  function search()
  {
    if(isset($_GET['t']))
    {
      $search=$this->input->get('t');
      $data['teams']=$this->team_model->searchTeam($search);
      $this->load->view('Team/index',$data);
    }
  }


}
