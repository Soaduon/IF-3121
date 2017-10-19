<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
class login extends CI_Controller
{

  public function index()
  {
    $this->load->view('login_3');
  }
  public function procLogin()
  {
    extract($_POST);
		$this->load->model('Model');

    $query = $this->Model->getDataUser($_POST['username'])->result_array();
    if ($username == '' || $password == '') {
      $this->load->view('login_blank');
    } else {
      $flag = 0;
      foreach ($query as $key => $value) {
        # code...
        $username = $value['username'];
        $password = $value['password'];
        if($password == $_POST['password'] && $username == $_POST['username']){
          $this->load->view('mainn');
          $flag = 1;
        }
      }
      if ($flag == 0)  {
        $this->load->view('loginfail');
      }  
    }
  }
}

?>
