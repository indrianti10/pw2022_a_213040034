<?php 
//Array Associative
//definisinya sama sperti aaray numerik,kecuali
//key-nya adalah string yang kita buat sendiri

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

];

//echo $mahasiswa[1]["Email"];
?>

<br><br><br>
<hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/"<?= $mhs["Gambar"];?> alt="">
        </li>
        <li>Nama : <?= $mhs['Nama'];?></li>
        <li>NPM : <?= $mhs['NPM'];?></li>
        <li>Jurusan : <?= $mhs['Jurusan'];?></li>
        <li>Email : <?= $mhs['Email'];?></li>
    </ul>
    <?php endforeach; ?>
   
</body>
</html>