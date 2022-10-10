<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <div class="container"> 
  <a href="tambah.php" class="btn btn-primary">Tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php 
    include "koneksi.php";

    $no=1;
    $sql = mysqli_query($koneksi, "SELECT * FROM bio order by id_bio") or die(mysqli_error());
    while ($data = mysqli_fetch_array($sql)) {

  ?>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td><?php echo $data['pekerjaan']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td>
      <a href="edit.php?id=
            <?php echo $data['id_bio']; ?>" class="btn btn-warning">Edit</a>|
      <a href="hapus.php?id=
            <?php echo $data['id_bio']; ?>" class="btn btn-danger">Danger</a>
      
      </td>
    </tr>

    <?php 
      $no++;
    }
     ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>