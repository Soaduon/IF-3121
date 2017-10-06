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
	public function Login (){
		$this->load->view('Login');
	}
}
?>
