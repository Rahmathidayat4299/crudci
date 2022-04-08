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

	public function formEdit()
	{
		$this->load->view('form_edit');
	}
}
