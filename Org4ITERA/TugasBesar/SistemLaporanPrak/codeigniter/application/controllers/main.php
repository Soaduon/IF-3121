<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
class main extends CI_Controller
{

  public function index()
  {
    $this->load->view('loogin');
  }
  public function nilai()
  {
    $query = $this->Model->getNilai()->result_array();

    if($query == null){
      $data = array(
        'message' => "Nilai Kosong!!",
        'nilai' => $query
      );
    }else {
      $data = array(
        'message' => "",
        'nilai' => $query
      );
    }
    $this->load->view('nilaimhs',$data);
  }
  public function mhs()
  {
    $query = $this->Model->getUser()->result_array();

    if($query == null){
      $data = array(
        'message' => "User Kosong!!",
        'nilai' => $query
      );
    }else {
      $data = array(
        'message' => "",
        'nilai' => $query
      );
    }
    $this->load->view('datamhs',$data);
  }
  public function input()
  {
    $this->load->view('inputmhs');
}
  public function procInput(){
extract($_POST);

    $dataInsert = array(
      'nim' => $_POST['nim'],
      'nama' => $_POST['nama'],
      'username' => $_POST['username'],
      'password' => $_POST['password']
    );
    $queryInput = $this->Model->setNilai($dataInsert,'tbl_user');

    if($queryInput){
      $data = array(
        'message' => "Input Success!!"
      );
    }else{
      $data = array(
        'message' => "Input Failure!!"
      );
    }
    $this->load->view('inputmhs',$data);
  }
  public function procEdit(){
    extract($_POST);

    $dataUpdate = array(
      'nim' => $_POST['nim'],
      'nama' => $_POST['nama'],
      'username' => $_POST['username'],
      'password' => $_POST['password']
    );
    $queryInput = $this->Model->updateNilai('nim',$_POST['nim'],'tbl_user',$dataUpdate);

    if($queryInput){
      $data = array(
        'message' => "Update Success!!"
      );
    }else{
      $data = array(
        'message' => "Update Failure!!"
      );
    }
    $this->load->view('datamhs',$data);
  }
}
?>
