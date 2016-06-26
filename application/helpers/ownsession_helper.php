
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('comebacklogin'))
{
  function comebacklogin() {
    $get = & get_instance();
    $islogged = $get->session->userdata('login');
    if(!$islogged ) {
       redirect('Login');
    }
  }
}
