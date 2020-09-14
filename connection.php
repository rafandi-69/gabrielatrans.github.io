<?php 
///membuat koneksi ke database
$server="localhost"; ///nama server
$username="u5514040_rafandi"; ///nama username mysql
$password="karebet212"; ///password, kosongkan jika tidak ada
$database="u5514040_trans"; ///nama database yang dipilih


mysqli_connect($server,$username,$password,$database)or die("gagal, database tidak ditemukan");
?>