<!DOCTYPE html>
<html>
<head>
	<title>Wahyu-CRUD-</title>
</head>
<body>
<h1>Welcome to my aps</h1>
<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
?>

<!-- buat text dan menampilkan buuton me link ke post.php-->
<h3>silahkan pilih menu dibawah untuk lanjut halaman::</h3>

<button onclick="window.location='post.php'">klik ini</button>

</body>
</html>