<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <div class="container"> 
<form name="tambah" method="post" action="tambah_proses.php"
enctype="multipart/form-data" class="form-horizontal">
<div class="mb-3 col-md-5">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
</div>
<div class="mb-3 col-md-5">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3 col-md-5">
  <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
  <input type="text" name="pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan">
</div>
<div class="mb-3 col-md-5">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
</div>
<input type="submit" name="tambah" value="tambah" class="btn btn-primary">
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>