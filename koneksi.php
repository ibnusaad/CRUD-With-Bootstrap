<?php 
	
	$host		= "localhost";
	$user		= "root";
	$pass		= "";
	$nama_db 	= "biodata";

	$koneksi = mysqli_connect($host, $user, $pass, $nama_db);

	if (mysqli_connect_errno()) {
			echo "koneksi gagal" .mysqli_connect_errno();
		}	
 ?>