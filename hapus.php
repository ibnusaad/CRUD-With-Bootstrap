<?php 
	include "koneksi.php";

	mysqli_query($koneksi,"delete from bio where id_bio='$_GET[id]'") or die (mysqli_error());

	echo "Data telah dihapus";
	echo "<meta http-equiv='refresh'
	content='1; url=index.php'>";
 ?>