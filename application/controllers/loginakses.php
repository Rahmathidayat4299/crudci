<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginakses extends CI_Controller {

	Public Function __construct() 
    {
        Parent::__construct();
        $this->load->Model('M_Mahasiswa');
    }

	public function index()
	{
		$recordMhs = $this ->M_Mahasiswa->getDataMahasiswa();
		// echo"<pre>";
		// echo print_r($recordMhs);
		// echo"<pre>";
		$DATA = array('data_mhs'=> $recordMhs);
		$this->load->view('home',$DATA);
	}

	public function formInput()
	{
		$this->load->view('form_input');
	}

	public function formEdit($id)
	{
		$recordMhs = $this-> M_Mahasiswa->GetDataMhsDetail($id);
		echo "<pre>";
		echo print_r($recordMhs);
		echo "<pre>";
		$DATA = array('data_mhs' =>$recordMhs);
		$this->load->view('form_edit',$DATA);
	}

	public function AksiInsert()
	{
		$nim = $this ->input->post('nim');
		$nama = $this ->input->post('nama');
		$jurusan = $this ->input->post('jurusan');
		$DataInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan,

		);		
		// echo "<pre>";
		// echo print_r($DataInsert);
		// echo "<pre>";
		$this->M_Mahasiswa->InsertDataMahasiswa($DataInsert);
		redirect (base_url('index.php/loginakses/'));
	}

	public function AksiEdit()
	{
		$nim = $this ->input->post('nim');
		$nama = $this ->input->post('nama');
		$jurusan = $this ->input->post('jurusan');
		$DataUpdate = array(
			'nama' => $nama,
			'jurusan' => $jurusan,

		);
		$this->M_Mahasiswa->EditDataMhs($DataUpdate,$nim);
		redirect (base_url('index.php/loginakses/'));
	}

	public function AksiDeleteData($nim){
		$this -> M_Mahasiswa->DeleteDataMhs($nim);
		redirect (base_url('index.php/loginakses/'));

	}


	
}
