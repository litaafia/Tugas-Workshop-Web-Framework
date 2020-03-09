<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	// 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	// code ini berisi method yang akan diakses controller walau tanpa menyertakan method
	public function index(){		
		$this->load->view('v_download');
	}

	// method ini dijalankan ketika link 'downdload file' di klik
	public function lakukan_download(){				
		force_download('gambar/calendar-512.png',NULL);
	}	

}