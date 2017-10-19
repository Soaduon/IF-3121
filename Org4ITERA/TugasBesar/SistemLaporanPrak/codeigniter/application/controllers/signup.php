<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
class signup extends CI_Controller
{

  public function index()
  {
    $this->load->view('SignUP');
  }
  public function ProcSignUp()
  {
    $this->load->view('SignUP');  
  }
  public function cancel()
  {
    $this->load->view('Home');  
  }
}

?>
