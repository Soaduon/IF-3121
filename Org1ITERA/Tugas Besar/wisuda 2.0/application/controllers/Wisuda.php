<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisuda extends CI_Controller{

	public function pengumuman(){
		$query = $this->Site_model->getArtikel()->result_array();
		$data = array(
			'list' => $query
			);
		$this->load->view('pengumuman',$data);
	}

	public function viewArtikel(){
		extract($_GET);
		$query = $this->Site_model->getArtikelAt($id)->result_array();
		$url = null;
		foreach ($query as $key => $value) {
			# code...
			$url = $value['artikel'];
		}
		$this->load->view($url);
	}
	
	public function index()
	{	$data['nama']="Guest";
		$data['logged_in']=0;
		$this->session->set_userdata($data);
	
		$this->load->view('Template',$data);
		
	}
	public function dashboard(){
		$check = $this->session->userdata('logged_in');
		if($check==0){
			$data['nama']="Guest";
			$this->load->view('Template',$data);
		}
		else{
			$type = $this->session->userdata('type');
			if($type=="mhs"){
				$data['nama']=$this->session->userdata('nama');
				$this->load->view('Template',$data);
			}
			else{

			}
			
		}
	}
	public function profile(){
		$check = $this->session->userdata('logged_in');
		if($check==1){
			if($this->session->userdata('type')=="mhs"){
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$data['sidangta_1']=$this->session->userdata('sidangta_1');
				$data['sidangta_2']=$this->session->userdata('sidangta_2');
				$data['kkn']=$this->session->userdata('kkn');
				$data['kp']=$this->session->userdata('kp');
				$this->beranda($data);

			}
		
		elseif($this->session->userdata('type')=="staff"){
				$data['nama']=$this->session->userdata('nama');
				$data['id']=$this->session->userdata('id');
				$data['jabatan']=$this->session->userdata('jabatan');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$this->load->view('staff/Staff_page',$data);

			}
			elseif($this->session->userdata('type')=="dosen"){
				$data['nama']=$this->session->userdata('nama');
				$data['id']=$this->session->userdata('id');
				$data['jabatan']=$this->session->userdata('jabatan');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$this->load->view('dosen/Dosen_page',$data);

			}

		}
		else if($check==0){
				$this->load->view('Login');
			}
	
	}
	public function daftar(){
		$check = $this->session->userdata('logged_in');
		if($check==1){
			if($this->session->userdata('type')=="mhs"){
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$data['sidangta_1']=$this->session->userdata('sidangta_1');
				$data['sidangta_2']=$this->session->userdata('sidangta_2');
				$data['kkn']=$this->session->userdata('kkn');
				$data['kp']=$this->session->userdata('kp');
				$this->load->view('mhs/Daftarwisuda',$data);

			}
		}
		else if($check==0){
				$this->load->view('Login');
			}
	}


	public function validasi_pembayaran_page(){
		$check = $this->session->userdata('logged_in');
		if($this->session->userdata('type')=="mhs"){

				$data['foto']=$this->session->userdata('foto');
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['prodi']=$this->session->userdata('prodi');
				$data['sidangta_1']=$this->session->userdata('sidangta_1');
				$data['sidangta_2']=$this->session->userdata('sidangta_2');
				$data['kkn']=$this->session->userdata('kkn');
				$data['kp']=$this->session->userdata('kp');
				$data['res']=NULL;
				$data['error']=NULL;
				$data['msg']=NULL;
				$tmp=NULL;
				$this->load->model('Site_model');
                		$value = $this->Site_model->getValidasiPendaftar($data['nim'])->result_array();
                		foreach ($value as $key => $d) {
                			$tmp = $d['nim'];
                			$data['bukti_pembayaran'] = $d['bukti_pembayaran'];
                			$data['validasi_pembayaran'] = $d['validasi_pembayaran'];
                			$data['validasi_keuangan'] = $d['validasi_keuangan'];
                			$data['validasi_dosen'] = $d['validasi_dosen'];
               	
                		}
				if($data['sidangta_1']=="belum"||$data['sidangta_2']=="belum"||$data['kp']=="belum"||$data['kkn']=="belum"){
					$this->load->view('mhs/Daftarerror',$data);
				}
				else{
					if($tmp==NULL||$tmp==''){
						$data['msg']=0;
						$this->load->view('mhs/Validasi_pembayaran',$data);
					}else{
						$data['msg']=1;
					$this->load->view('mhs/Validasi_pembayaran',$data);
					}
				}
			}
		else if($check==0){
				$this->load->view('Login');
			}
	
	}
	public function page_login(){
		
		$check = $this->session->userdata('logged_in');
		if($check==1){
			if($this->session->userdata('type')=="mhs"){
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['jenis_kelamin']=$this->session->userdata('jenis_kelamin');
				$data['alamat']=$this->session->userdata('alamat');
				$data['foto']=$this->session->userdata('foto');
				$data['sidangta_1']=$this->session->userdata('sidangta_1');
				$data['sidangta_2']=$this->session->userdata('sidangta_2');
				$data['kp']=$this->session->userdata('kp');
				$this->beranda($data);
			}
		}
		else if($check==0){
				$this->load->view('Login');
			}
	}
	public function beranda($data){
		$this->load->view('mhs/Afterlogin',$data);
	}

	public function Login(){
		extract($_POST);
		$this->load->model('Site_model');
		$query = $this->Site_model->getDataUser($_POST['username'])->result_array();
		if($query==NULL){
			
		}
		else{
			foreach ($query as $key => $value) {
				# code...
				$user_login=array(
					'username' =>$value['username'],
					'password' =>$value['password'],
					'type' =>$value['type'],
					'logged_in' =>1
					);
				$this->session->set_userdata($user_login);
			}
			if($user_login['username']!=$_POST['username']||$user_login['password']!=$_POST['password']){	
				$this->load->view('Loginerror');
			}
			else{
				if($user_login['type']=="mhs"){
					$query2 = $this->Site_model->getDataMhs($user_login['username'])->result_array();
					foreach ($query2 as $key => $data) {
						# code...
						$mhs_login=array(
							'nim'=>$data['nim'],
							'nama'=>$data['nama'],
							'jenis_kelamin'=>$data['jenis_kelamin'],
							'telp'=>$data['telp'],
							'alamat' =>$data['alamat'],
							'foto'=>$data['foto'],
							'sidangta_1'=>$data['sidangta_1'],
							'sidangta_2'=>$data['sidangta_2'],
							'kkn'=>$data['kkn']
							);
						$this->session->set_userdata($mhs_login);

					}
					
					redirect('wisuda/page_login');
				}
				else{
					redirect('wisuda/dashboard');
					//$this->load->view('Afterlogin');
				}
			}
		}
		
	}
	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

	public function submit_daftar(){
		extract($_POST);
		$this->load->model('Site_model');
		$tbl='tbl_daftarwisuda';
		$value=array(
			'nama' => $_POST['Nama'],
			'email' => $_POST['Email'],
			'handphone' => $_POST['No_handphone'],
			'nim' => $_POST['Nim'],
			'prodi' => $_POST['Prodi']
			);
		$res=$this->Site_model->daftar($tbl,$value);
		if($res>=1){
			$data=array(
				'nama' => $this->session->userdata('nama'),
				
				'foto' => $this->session->userdata('foto'),
				'res' => $res
				);
			$this->load->view('mhs/Daftarwisuda',$data);
		}
		else{
			$data=array(
				'nama' => $this->session->userdata('nama'),
			
				'foto' => $this->session->userdata('foto'),
				'res' => $res
				);
			$this->load->view('mhs/Daftarwisuda',$data);
		}
	}
	public function getListPendaftar(){
		$this->load->model('Site_model');
		$query = $this->Site_model->getPendaftar()->result_array();
		$data=array('data'=>$query,'foto'=>$this->session->userdata('foto'),'nama'=>$this->session->userdata('nama'));
		$this->load->view('staff/List_pendaftar',$data);
	}
	public function getDataPendaftar($nim){
		
		$this->load->model('Site_model');
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		$data=array('data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('staff/Profile_pendaftar',$data);
	}
	public function getValidasiPendaftar($nim){
		$this->load->model('Site_model');
		$query = $this->Site_model->getValidasiPendaftar($nim)->result_array();
		$data=array('data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'),'button1'=>NULL,
			'button' =>NULL, 'update' => NULL, 'update1' => NULL
			);
		$this->load->view('staff/Validasi_pendaftar',$data);
	}
	public function changeValidasiKeuangan($res,$nim){
		$this->load->model('Site_model');
		$query = $this->Site_model->getValidasiPendaftar($nim)->result_array();
		$data=array('data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'), 'button1'=>$res,'update'=>NULL,'button'=>NULL);
		$this->load->view('staff/Validasi_pendaftar',$data);
	}
	public function updateValidasiKeuangan($nim){
		extract($_POST);
		$this->load->model('Site_model');
		$upd = $this->Site_model->updateValidasiKeuangan($nim,$_POST['validasi_keuangan']);
		$query = $this->Site_model->getValidasiPendaftar($nim)->result_array();
		$data=array('data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'), 'update1'=>$upd,'button1'=>NULL,'update'=>NULL,'button'=>NULL);
		$this->load->view('staff/Validasi_pendaftar',$data);
	}
	public function changeValidasiPembayaran($res,$nim){
		$this->load->model('Site_model');
		$query = $this->Site_model->getValidasiPendaftar($nim)->result_array();
		$data=array('data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'), 'button'=>$res,'update1'=>NULL,'button1'=>NULL);
		$this->load->view('staff/Validasi_pendaftar',$data);
	}
	public function updateValidasiPembayaran($nim){
		extract($_POST);
		$this->load->model('Site_model');
		$upd = $this->Site_model->updateValidasiPembayaran($nim,$_POST['validasi_pembayaran']);
		$query = $this->Site_model->getValidasiPendaftar($nim)->result_array();
		$data=array('data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'), 'update'=>$upd,'button'=>NULL,'update1'=>NULL, 'button1'=> NULL);
		$this->load->view('staff/Validasi_pendaftar',$data);
	}

	public function submit_bukti($nim){
		
                $config['upload_path']          = './assets/bukti_pembayaran';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 30000;
                $config['file_name']			=$nim;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {		$this->load->model('Site_model');
            			$value = $this->Site_model->getValidasiPendaftar()->result_array();
                        $error = array('nama'=>$this->session->userdata('nama'),'foto'=>$this->session->userdata('foto'),'nim'=>$this->session->userdata('nim'),'error' => $this->upload->display_errors());
                        $this->load->view('mhs/Validasi_pembayaran', $error);

                }
                else
                {		$this->load->model('Site_model');
                		$value = $this->Site_model->getValidasiPendaftar($nim)->result_array();
                		foreach ($value as $key => $d) {
                			# code...
                		$vd = array(
                			'bukti_pembayaran' => $d['bukti_pembayaran'],
                			'validasi_pembayaran' => $d['validasi_pembayaran'],
                			'validasi_keuangan' => $d['validasi_keuangan'],
                			'validasi_dosen' => $d['validasi_dosen']
                			);	
                		}
                        $data = array('value'=>$vd,'nama'=>$this->session->userdata('nama'),'foto'=>$this->session->userdata('foto'),'nim'=>$this->session->userdata('nim'),'upload_data' => $this->upload->data());
                        
                        $File_name = $this->upload->data('file_name');
                        $query = $this->Site_model->uploadimg($File_name,$nim);
                        if($query>=1){
                        	$data['query'] = $query; 
                        	$this->load->view('mhs/Upload_sukses', $data);
                        }else{
                        	$error['error'] ="Gagal update database";
                        	 $this->load->view('mhs/Validasi_pembayaran', $error);
                        }						
                        
                }
        }
		
        public function getListBimbingan(){
		 $this->load->model('Site_model');
		 $query = $this->Site_model->getListBimbingan($this->session->userdata('id'))->result_array();
		 $data=array('data'=>$query,'foto'=>$this->session->userdata('foto'),'nama'=>$this->session->userdata('nama'));
		 $this->load->view('dosen/List_bimbingan',$data);
	}
	public function getDataBimbingan($nim){
		$this->load->model('Site_model');
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		$data=array('valid'=>NULL,'res'=>NULL,'button'=>0,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
	}
	public function ubahBimbingan($nim){
		$this->load->model('Site_model');
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		$data=array('valid'=>NULL,'button'=>1,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
	}
	public function updateValidasiBimbingan($nim){
		extract($_POST);
		$this->load->model('Site_model');
		$data = array(
			'kp' => $_POST['kp'],
			'kkn' => $_POST['kkn'],
			'sidangta_1' => $_POST['sidangta_1'],
			'sidangta_2' => $_POST['sidangta_2']
			);
		$mytable='tbl_mhs';
		$res = $this->Site_model->UpdateBimbingan($mytable,$data,$nim);
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		$data=array('valid'=>NULL,'res'=>$res,'button'=>0,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
	}
	public function ValidasiBimbingan($nim){
		$this->load->model('Site_model');
		$res=$this->Site_model->ValidasiDosen($nim);
		$query = $this->Site_model->getDataPendaftar($nim)->result_array();
		if($res>=1){
		
		$data=array('valid'=>1,'res'=>NULL,'button'=>0,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
		}
		else{
		$data=array('valid'=>2,'res'=>NULL,'button'=>0,'data'=>$query,'fotostaff'=>$this->session->userdata('foto'),'namastaff'=>$this->session->userdata('nama'));
		$this->load->view('dosen/Profile_pendaftar',$data);
		}
	}
	public function cetakbukti_page($nim){

		$this->load->model('Site_model');
		$value1 = $this->session->userdata();

		if($value1['sidangta_1']=="belum"||$value1['sidangta_2']=="belum"||@$value1['kp']=="belum"||$value1['kkn']=="belum"){
				$data['foto']=$this->session->userdata('foto');
				$data['nama']=$this->session->userdata('nama');
				$data['nim']=$this->session->userdata('nim');
				$data['prodi']=$this->session->userdata('prodi');
				$data['sidangta_1']=$this->session->userdata('sidangta_1');
				$data['sidangta_2']=$this->session->userdata('sidangta_2');
				$data['kkn']=$this->session->userdata('kkn');
				$data['kp']=$this->session->userdata('kp');
				$data['res']=NULL;
				$data['error']=NULL;
				$data['msg']=NULL;
				$tmp=NULL;
					$this->load->view('mhs/Daftarerror',$data);
				}
		else{
			$value2 = $this->Site_model->getValidasiPendaftar($nim)->result_array();
			$data = array('value1' => $value1,'value2'=>$value2 );
			$this->load->view('mhs/Cetak_bukti',$data);
			}
		
	}
	public function downloadbukti($nim){
		$this->load->library('pdf');
		$this->load->model('Site_model');
		$value1 = $this->session->userdata();
		$value2 = $this->Site_model->getValidasiPendaftar($nim)->result_array();
		$data = array('value1' => $value1,'value2'=>$value2 );
		$html=$this->load->view('mhs/Cetak_buktilaporan',$data,TRUE);
		$paper_size='A4';
		$orientation='portrait';
		$this->pdf->set_paper($paper_size,$orientation);
		$this->pdf->create($html,$nim);
	}
	public function pengumuman_page(){
		$this->load->view('Pengumuman');
	}
	public function wisudapertama_page(){
		$this->load->view('Wisuda_Pertama_ITERA');
	}
	public function persyaratan(){
		$this->load->view('Persyaratan');
	}
	public function panduan(){
		$this->load->view('panduan');
	}

}

