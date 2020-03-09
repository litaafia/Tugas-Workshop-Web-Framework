<!-- contoh fungsi controller -->
<?php
// untuk mencegah akses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');
 
// extends controller baru dengan CI_Controller
// nama class harus diawali dengan huruf besar dan nama class harus sesuai dengan nama controller
class Belajar extends CI_Controller {

    // untuk menjalankan fungsi yang diinginkan. biasanya pada
    // fungsi construct() diletakkan fungsi untuk memanggil helper
    // atau library
	function __construct(){
        parent::__construct();
        $this->load->helper('html');
		
	}

    // method index menggunakan fuungsi echo
	public function index(){
		echo "ini method index pada controller belajar";
	}
    
    // code ini untuk membuka file view_belajar.php
    // variabel data nama_web untuk dipanggil pada view_belajar
	public function halo(){
        $data['nama_web'] = "litaa.com";
        $data['judul'] = "Ayo Belajar CodeIgniter bareng Lita di";
		$this->load->view('view_belajar', $data);
    }
    
    // method litu
    public function litu(){
        echo "cemungut ea";
    }
    
 
}