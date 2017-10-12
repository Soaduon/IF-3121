<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
class CRUD extends CI_Controller
{

  public function index()
  {
    # code...
    $this->load->view('home');
  }
  public function viewData(){
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
    $this->load->view('LihatNilai',$data);
  }
  public function viewInput(){
    $this->load->view('InputNilai');
  }
  public function viewEdit(){
    $query = $this->Model->getNilai()->result_array();
    $data = array(
      'data' => $query
    );
    $this->load->view('EditNilai',$data);
  }
  public function viewDelete(){
    $query = $this->Model->getNilai()->result_array();
    $data = array(
      'data' => $query
    );
    $this->load->view('DeleteNilai',$data);
  }
  public function procInput(){
    extract($_POST);

    $dataInsert = array(
      'nama' => $_POST['nama'],
      'nim' => $_POST['nim'],
      'nilai' => $_POST['nilai']
    );
    $queryInput = $this->Model->setNilai($dataInsert,'tbl_nilai');

    if($queryInput){
      $data = array(
        'message' => "Input Success!!"
      );
    }else{
      $data = array(
        'message' => "Input Failure!!"
      );
    }
    $this->load->view('Notification',$data);
  }
  public function procEdit(){
    extract($_POST);

    $dataUpdate = array(
      'nama' => $_POST['nama'],
      'nim' => $_POST['nim'],
      'nilai' => $_POST['nilai']
    );
    $queryInput = $this->Model->updateNilai('nim',$_POST['nim'],'tbl_nilai',$dataUpdate);

    if($queryInput){
      $data = array(
        'message' => "Update Success!!"
      );
    }else{
      $data = array(
        'message' => "Update Failure!!"
      );
    }
    $this->load->view('Notification',$data);
  }
  public function procDel(){
    extract($_POST);

    $queryInput = $this->Model->deleteNilai('nim',$_POST['nim'],'tbl_nilai');

    if($queryInput){
      $data = array(
        'message' => "Delete Success!!"
      );
    }else{
      $data = array(
        'message' => "Delete Failure!!"
      );
    }
    $this->load->view('Notification',$data);
  }

}

 ?>
