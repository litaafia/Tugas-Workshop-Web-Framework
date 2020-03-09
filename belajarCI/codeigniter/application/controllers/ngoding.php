<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('lita');
		$this->lita->nama_saya();
                echo "<br/>";
                $this->lita->nama_kamu("Lita");
	}

}