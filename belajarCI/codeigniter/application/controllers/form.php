<!-- controller dari v_form.php -->
<?php 

class Form extends CI_Controller{

	// code ini untuk me load library bernama form_validation
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	// code ini berfungsi menampilkan v_form.php
	function index(){
		$this->load->view('v_form');
	}

	// code ini berfungsi memastikan tiap form telah terisi
	// tentukan dulu form yang akan diberi validasi
	// set_rules berfungsi untuk menetapkan peraturann untuk form
	function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');
		}
	}
}