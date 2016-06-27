<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');

  }

  function index()
  {

      $this->load->view('User/index');
  }

  function showList()
  {
    if ($this->input->is_ajax_request())
    {
      $buscar=$this->input->post('buscar');
      $datos=$this->user_model->show($buscar);
      echo json_encode($datos);
    }
    else
    {
      show_404();
    }

  }

  function delete()
  {

  }

  function update()
  {
    $data=$_POST;
    if ($this->input->is_ajax_request())
    {
      if ($this->user_model->updateUser($data)==true) {
          echo "User Updated";
      }else {
        echo "Somenthing Happened";
      }
    }
    else
    {
      show_404();
    }
  }

}
