<?php  
$mahasiswa = [
    ["Gambar" => "indri.jpg",
    "Nama" =>"Widya Dwi Indrianti", 
    "NPM" =>"213040034",
    "Email" => "widyaindrianti06@gmail.com", 
    "Jurusan"=>"Teknik Informatika"], 

    ["Gambar" => "m.jpg",
    "Nama"=>"Maek Lee", 
    "NPM"=>"213040099", 
    "Email"=>"mark@gmail.com", 
    "Jurusan"=>"Teknik Informatika"],

    ["Gambar" => "rj.jpg",
     "Nama"=>"Huang Renjun", 
    "NPM"=>"213040007", 
    "Email"=> "renjun@gmail.com", 
    "Jurusan"=> "Teknik Informatika"],

    ["Gambar" => "je.jpg",
     "Nama"=>"Lee Jeno", 
    "NPM"=>"213040023", 
    "Email"=> "jeno@gmail.com", 
    "Jurusan"=> "Teknik Informatika"],

    ["Gambar" =>"h.jpg",
     "Nama"=>"Lee Haechan", 
    "NPM"=>"213040066", 
    "Email"=> "fullsun@gmail.com", 
    "Jurusan"=> "Teknik Informatika"],

    ["Gambar" => "ja.jpg",
     "Nama"=>"Na Jaemin", 
    "NPM"=>"213040042", 
    "Email"=> "nana@gmail.com", 
    "Jurusan"=> "Teknik Informatika"],

    ["Gambar" => "che.jpg",
     "Nama"=>"Zhong Chenle", 
    "NPM"=>"213040030", 
    "Email"=> "chenle@gmail.com", 
    "Jurusan"=> "Teknik Informatika"],

    ["Gambar" =>"ji.jpg",
     "Nama"=>"Park Jisung", 
    "NPM"=>"213040014", 
    "Email"=> "jisung@gmail.com", 
    "Jurusan"=> "Teknik Informatika"]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
     <?php foreach ($mahasiswa as $mhs) : ?> 
        <li>
            <a href="latihan2.php?nama=<?= $mhs["Nama"];?>&npm=<?= $mhs["NPM"];?>
            &email=<?= $mhs["Email"];?>&jurusan=<?= $mhs["Jurusan"];?>
            &gambar=<?= $mhs["Gambar"];?>"><?= $mhs["Nama"];?></a>
        </li>
     <?php endforeach; ?>
     </ul>
</body>
</html>


           