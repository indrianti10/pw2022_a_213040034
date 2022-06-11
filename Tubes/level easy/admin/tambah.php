<?php 
require 'functions.php';

// cek apakah tomobol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {

    // Cek Keberhasilan
   if(tambah($_POST) > 0) {
       echo " 
       <script>
            alert('data berhasil ditambakan !');
            document.location.href = 'index.php';
       </script>";
   }else {
       echo "<script>
            alert('data gagal ditambakan !');
            document.location.href = 'index.php';
       </script>";
   }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Tambah</title>
  </head>
  <body1>
<div class="tambah"> 
    <h1>Tambahkan Data</h1>
    <div class="card-body">
    
        <form action="" class="row g-3" method="POST" autocomplete="off" enctype="multipart/form-data">

            <div class="col-md-6">
                <label for="events" class="form-label">Nama Event</label>
                <input type="text" class="form-control" id="events" name="events" required>
            </div>

            <div class="col-md-6">
                <label for="Genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="Genre" name="Genre" required>
            </div>

            <div class="col-md-10">
                <label for="Tempat" class="form-label">Tempat</label>
                <input type="text" class="form-control" id="Tempat" name="Tempat" required>
            </div>

            <div class="col-md-6">
                <label for="Tanggal_mulai" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="Tanggal_mulai" name="Tanggal_mulai" required>
            </div>
            <div class="col-md-6">
                <label for="Tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                <input type="date" class="form-control" id="Tanggal_berakhir" name="Tanggal_berakhir">
            </div>
            <div class="col-md-10">
                <label for="Gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="Gambar" name="Gambar">
            </div>
            <div class="col-4">
             <button type="submit" class="btn btn-primary" name="submit">Tambahkan Event</button>
            </div>
            <div class="col-4">
            <a href="index.php" ><button type="button" class="btn btn-dark">kembali ke admin</button></a>
            </div>
        </form>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body1>
</html>