<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
  header("location:..//user/login.php");
  exit;
}

require 'functions.php';

// pagination
// konfiguration
// $jumlahDataPerhalaman = 3;
// $jumlahData = count(query("SELECT * FROM dream_luxion") );
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
// $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1; 
// $awalData = ($jumlahDataPerhalaman * $halamanAktif ) - $jumlahDataPerhalaman;
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

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&family=Permanent+Marker&display=swap" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Blaka&family=Oleo+Script:wght@700&family=Permanent+Marker&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
   
    <title>Halaman Admin</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>

   <!-- navbar -->
    <div class="container">
    <nav class="navbar navbar-expand-lg fixed-top  " style="background-color: black;">
    <div class="brand" style="font-family: Oleo Script, cursive;
                        font-size: 40px;
                        color: beige;
                        margin-left: 30px;">
  Dream Luxion
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <form action="" method="POST">
        <input type="text" name="keyword" size="20" autofocus placeholder="cari event...."
        autocomplete="off" id="keyword" style="margin-left:250px; width:300px;">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
        <img src="img/loading2.gif" class="loader"
        style="width: 30px; 
        position:absolute; 
        top:23px; 
        z-index:-1; 
        left:830px;
        display : none;">
    </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
           <a class="btn btn-outline-secondary" href="tambah.php" role="button" 
           style=" float:right; color:#198754; margin-top:10px; margin-right:15px;" >Tambah Data</a>
        </li>
        <li class="nav-item">
          <a href="..//user/logout.php" role="button" 
          style=" font-size:36px; color:white; padding-right:30px;" ><i class="bi bi-box-arrow-right"></i></a>
      </ul>
    </div>
  </div>
</nav>
    <!-- akhir navbar -->
    <h2 style="padding-top: 100px; 
    font-family: 'Blaka', cursive; 
    text-align:center;
    font-size: 100px;
    text-shadow:0px 5px 8px 0px #639797;">
      Daftar Event</h2>


   
    
     
 
    <br>
    <div id="container">
    <table class="table table-bordered border-dark text-center">
        
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
</div>

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