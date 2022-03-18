<?php 
//studi khasus

$mahasiswa = [
    ["Widya Dwi Indrianti","213040034", "widyaindrianti06@gmail.co", "Teknik Informatika"], 
    ["Putri legiani", "213040039", "legi@gmail.com", "Teknik Informatika"],
    ["Aufaa Husnaini", "213040034", "aufaa@gmail", "Teknik Informatika"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?php echo $mhs[0]; ?></li>
    <li>NRP : <?php echo $mhs[1]; ?></li>
    <li>Email : <?php echo $mhs[2]; ?></li>
    <li>Jurusan : <?php echo $mhs[3]; ?></li>
</ul>

<?php endforeach; ?>


    
</body>
</html>