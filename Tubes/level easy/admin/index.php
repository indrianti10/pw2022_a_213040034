<?php 
require 'functions.php';
$eventt = query("SELECT * FROM dream_luxion");

//  tombol cari di tekan
if(isset($_POST["cari"]) ) {
  $eventt = cari ($_POST["keyword"]);

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Style css -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>Admin</h1>
    <h2>Daftar Event</h2>
    <a class="btn btn-primary" href="tambah.php" role="button" style=" float:right; color:black;" >Tambah Data Event</a>

     <form action="" method="POST">
      <input type="text" name="keyword" size="20" autofocus placeholder="search..." 
      autocomplete="off" style="margin-left:5px;">
      <button type="submit" name="cari">Cari</button>
     

    </form>
    <br>
    <table class="table table-bordered border-dark">
        
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
       <th scope="col">Gambar</th>
      <th scope="col">Nama Event</th>
      <th scope="col">Genre</th>
      <th scope="col">Tempat</th>
      <th scope="col">Tanggal Mulai</th>
      <th scope="col">Tanggal Berakhir</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php foreach ($eventt as $row) :?>
    <tr>
    
      <th><?= $i;?></th>
      <td><img src="img/<?= $row["Gambar"]; ?>" 
      width="100"></td>
      <td><?= $row["events"];?></td>
      <td><?= $row["Genre"];?></td>
      <td><?= $row["Tempat"];?></td>
      <td><?= $row["Tanggal_mulai"];?></td>
      <td><?= $row["Tanggal_berakhir"];?></td>
      <td>
        <a href="ubah.php?id=<?= $row["id"];?>"><button type="button" class="btn btn-primary">Ubah</button></a>
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm(' apakah anda yakin menghapus data ini?');">
        <button type="button" class="btn btn-danger" > Hapus</button> 
      </a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>