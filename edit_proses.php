<?php 
	
	include "koneksi.php";

	mysqli_query($koneksi, "UPDATE bio SET 
		nama = '$_POST[nama]',
		alamat = '$_POST[alamat]',
		pekerjaan = '$_POST[pekerjaan]',
		email = '$_POST[email]'
		WHERE id_bio='$_POST[id]'") or die(mysqli_error());

echo "data di edit";
echo "<meta http-equiv='refresh'
content='1; url=index.php'>";

?>