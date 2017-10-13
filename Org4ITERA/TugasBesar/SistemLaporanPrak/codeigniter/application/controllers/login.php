<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
class login extends CI_Controller
{

  public function index()
  {
    $this->load->view('loogin');
  }
  public function procLogin()
  {
    extract($_POST);
		$this->load->model('Model');

    $query = $this->Model->getDataUser($_POST['username'])->result_array();

    if($query == null){
       $data = array(
         'message' => "Login Failure !!"
       );
    }else{
      foreach ($query as $key => $value) {
        # code...
        $username = $value['username'];
        $password = $value['password'];
        if($password == $_POST['password']){
           $this->load->view('mainn');
        }else {
          $data = array(
            'message' => "Wrong Password"
          );
        }
      }
    }
  }
}

?>
