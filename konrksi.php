<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'berita_9999';

$con = mysqli_connect($server,$username,$password) or die("koneksi gagal");
mysqli_select_db($con, $database) or die ("Database belum ada, silahkan import database");
?>