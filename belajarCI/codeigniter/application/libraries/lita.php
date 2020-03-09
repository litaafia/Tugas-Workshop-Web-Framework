<!-- suatu pustaka yang dapat digunakan pada controller manapun -->
<?php 

class Lita{
	// code ini merupakan method yang dapat dipakai oleh controller lain
	function nama_saya(){
		echo "Nama saya adalah malasngoding !";
	}
	// code ini membutuhkan parameter untuk dijalakan
	function nama_kamu($nama){
		echo "Nama kamu adalah ". $nama ." !";
	}
}