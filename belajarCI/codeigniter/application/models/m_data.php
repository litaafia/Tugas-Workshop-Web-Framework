<?php 
// fungsi ambil data untuk mengambil data pada tabel user di database malasngoding
// fungsi return untuk mengembalikan data yang diambil oleh fungsi ambil_data
class M_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('user');
	}
}