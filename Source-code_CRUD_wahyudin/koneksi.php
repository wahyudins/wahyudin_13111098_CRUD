<?php 

//buat koneksi ke mysql
$kon=mysql_connect("localhost","root","").mysql_error();

//setelah terkoneksi mysql, lanjut pilih database
$db=mysql_select_db("crud");


?>