<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// class yang menerapkan pembuatan library 
class Ngoding extends CI_Controller {
	
	function index(){
		
		// code ini berfungsi untuk me load library yang bernama lita
		$this->load->library('lita');
		// code ini untuk memanggil method yang ada pada library lita
		$this->lita->nama_saya();
				echo "<br/>";
				// code ini untuk memanggil method dengan parameter
                $this->lita->nama_kamu("Lita");
	}

}