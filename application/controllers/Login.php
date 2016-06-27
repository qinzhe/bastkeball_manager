<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');

  }

  function index()
  {

    if($this->session->userdata('login')){
      redirect(site_url('Home'));
    }else{
      $this->load->view('Login/index');
    }


  }
  function login()
  {
    $data=$_POST;
    $res=$this->login_model->loginUser($data);
    if ($res)
    {
      $info=[
        "id"=>$res->user_id,
        "name"=>$res->name,
        "email"=>$res->email,
        "login"=>TRUE,
      ];
      $this->session->set_userdata($info);
      redirect('Home');
    }
    else
    {
      echo "error";
    }
  }

  function register()
  {
    $data=$_POST;
    var_dump($data);
    if ($this->login_model->registerUser($data)==true)
    {
        redirect('Login');
    }
    else
    {
      redirect('Login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('Login');
  }
  function hello()
  {
    echo "hello";
  }

}
