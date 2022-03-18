<?php 
//studi khasus

$mahasiswa = [
    ["Widya Dwi Indrianti","213040034", "widyaindrianti06@gmail.co", "Teknik Informatika"], 
    ["Putri legiani", "213040039", "legi@gmail.com", "Teknik Informatika"],
    ["Aufaa Husnaini", "213040034", "aufaa@gmail", "Teknik Informatika"]

];



?>

<?php foreach($mahasiswa as $mhs) {
    ?>
    <ul>
        <li>Nama : <?php echo $mhs [0]; ?></li>
        <li>NPM : <?php echo $mhs [1];?></li>
        <LI>Email : <?php echo $mhs [2];?></LI>
        <li>Jurusan : <?php echo $mhs [3];?></li>
    </ul>
<?php  } ?>