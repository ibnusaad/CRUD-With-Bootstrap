<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <?php 
  include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM bio where id_bio='$_GET[id]'") or die(mysqli_error());
    $data = mysqli_fetch_array($sql);
  ?>
  <div class="container"> 
<form name="tambah" method="post" action="edit_proses.php"
enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $data['id_bio'];?>">
<div class="mb-3 col-md-5">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" value="<?php echo $data['nama'];?>">
</div>
<div class="mb-3 col-md-5">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" ><?php echo $data['alamat'];?></textarea>
</div>
<div class="mb-3 col-md-5">
  <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
  <input type="text" name="pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan" value="<?php echo $data['pekerjaan'];?>">
</div>
<div class="mb-3 col-md-5">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" value="<?php echo $data['email'];?>">
</div>
<input type="submit" name="edit" value="Edit" class="btn btn-primary">
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>