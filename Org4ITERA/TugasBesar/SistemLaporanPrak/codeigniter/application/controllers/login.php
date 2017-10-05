<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
class login extends CI_Controller
{

  public function index()
  {
    $this->load->view('login');
  }
  public function procLogin()
  {
    extract($_POST);

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
            $data = array(
              'message' => "Welcome ,".$_POST['username']
            );
        }else {
          $data = array(
            'message' => "Wrong Password"
          );
        }
      }
    }
    $this->load->view('home',$data);
  }
}

?>
