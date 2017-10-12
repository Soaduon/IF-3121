<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
class home extends CI_Controller
{

  public function index()
	{
		# code...
		$this->load->view('Home');
	}
	public function contactus (){
		$this->load->view('contactus');
	}
	public function JadwalPraktikum (){
		$this->load->view('JadwalPraktikum');
	}
  public function Informasi(){
    $this->load->view('informasi');
  }
  public function Panduan(){
    $this->load->view('panduan');
  }
  public function nilai(){
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
    $this->load->view('nilai',$data);
  }
	public function Login (){
		$this->load->view('Login');
	}
}
?>
