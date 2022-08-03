<?php
// Panggil koneksi database
require_once "connection.php";

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($dbconnect, "DELETE FROM tb_parkir WHERE id='$id'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: Form.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: Form.php?alert=1');
	}	
}							
?>