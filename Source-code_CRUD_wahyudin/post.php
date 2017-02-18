<?php 

//buat tampilan inset/update database(crud)
echo "<a href='update.html'>buat data</a>  <br><br><br><br>";



//buat include supaya tidak buat koneksi db lagi
//dan sudah dipilih db nya
include("koneksi.php");

//pilih tabel database nya.
$d1=mysql_query("SELECT * FROM wahyu")
	or die(mysql_error());

//pecah data tabel db pakai fetch array / fetch row
//lanjut di tampilkan pakai echo
while($d2=mysql_fetch_array($d1)){
	echo "id : $d2[id]<br>";
	echo "nama : $d2[nama]<br>";
	echo "alamat : $d2[alamat] <br><br><br>";
	}

?>