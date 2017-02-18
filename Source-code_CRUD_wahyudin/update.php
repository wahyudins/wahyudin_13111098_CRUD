<?php 

include 'koneksi.php';

	$d= $_POST['id'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$alamat = $_POST['alamat'];

	mysql_query("UPDATE siswa SET nama='$nama', alamat='$alamat', nim='$nim' WHERE id='$d' ") ;
	
	header("location:index.php?");
?>