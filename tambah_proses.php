<?php 
include 'koneksi.php';
	
	mysqli_query($koneksi, "INSERT INTO bio SET
		nama = '$_POST[nama]',
		alamat = '$_POST[alamat]',
		pekerjaan = '$_POST[pekerjaan]',
		email = '$_POST[email]'
		") or die(mysql_error());

echo "data tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=index.php'>";

 ?>