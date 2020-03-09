
<!-- aktifkan helper html codeigniter dengan memanggil langsung pada controller -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selamatdatang extends CI_Controller {

	// untuk memanggil helper html
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}

	// method index
	public function index(){
		$this->load->view('welcome');
	}
}