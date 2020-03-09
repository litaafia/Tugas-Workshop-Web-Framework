<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar1 extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}

	// fungsi user untuk mengambil data dari m_data.php
	// hasil datanya ditampilkan pada v_user.php
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}

}