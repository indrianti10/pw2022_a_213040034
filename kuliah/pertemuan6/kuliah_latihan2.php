<?php 
$mahasiswa = [
   ["Gambar" => "h.jpg",
    "Nama" =>"Widya Dwi Indrianti", 
    "NPM" =>"213040034",
    "Email" => "widyaindrianti06@gmail.co", 
    "Jurusan"=>"Teknik Informatika"], 

    ["Gambar" => "j.jpg",
    "Nama"=>"Putri legiani", 
    "NPM"=>"213040039", 
    "Email"=>"legi@gmail.com", 
    "Jurusan"=>"Teknik Informatika"],

    ["Gambar" => "kucing.jpg",
     "Nama"=>"Aufaa Husnaini", 
    "NPM"=>"213040018", 
    "Email"=> "aufaa@gmail", 
    "Jurusan"=> "Teknik Informatika"],

    ["Gambar" => "KUCING1.jpg",
     "Nama"=>"Syifa Rizky Mutia", 
    "NPM"=>"213040005", 
    "Email"=> "syifa@gmail", 
    "Jurusan"=> "Teknik Informatika"],

    ["Gambar" => "KUCING2.jpg",
     "Nama"=>"Risma Rahmana Fitri", 
    "NPM"=>"213040020", 
    "Email"=> "risma@gmail", 
    "Jurusan"=> "Teknik Informatika"]

];
// var_dump ($mahasiswa [0]["Email"]);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <div class= "container">
        <h1>Daftar Mahasiswa</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  
    <!-- <ul>
        <li>Nama : <?php echo $mahasiswa ["Nama"]; ?></li>
        <li>NPM : <?php echo $mahasiswa ["NPM"];?></li>
        <LI>Email : <?php echo $mahasiswa ["Email"];?></LI>
        <li>Jurusan : <?php echo $mahasiswa ["Jurusan"];?></li>
    </ul> -->

  <tbody>
  <?= $no =1; 
  foreach($mahasiswa as $mhs) {?>
    <tr class="align-middle">
      <th scope="row"><?= $no++;?></th>
      <td><img src="img/<?php echo $mhs ["Gambar"];?>" width="50" class= "rounded-circle"></td>
      <td><?php echo $mhs ["Nama"];?></td>
      <td><?php echo $mhs ["NPM"]?></td>
      <td><?php echo $mhs ["Email"]?></td>
      <td><?php echo $mhs ["Jurusan"]?></td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
  </tbody>
  <?php  } ?>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
