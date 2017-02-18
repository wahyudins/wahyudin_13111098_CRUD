<?php

include 'koneksi.php';
$a=$_POST['id'];
$b=$_POST['nama'];
$c=$_POST['alamat'];

mysql_query("INSERT INTO wahyu VALUES ('$a','$b','$c')");
header("location:index.php?pesan=update");

?>