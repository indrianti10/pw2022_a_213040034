<?php 
//studi khasus
//Array associative
// Array yang indexnya berupa 

$mahasiswa = [
    ["Nama" =>"Widya Dwi Indrianti", 
    "NPM" =>"213040034",
    "Email" => "widyaindrianti06@gmail.co", 
    "Jurusan"=>"Teknik Informatika"], 

    [ "Nama"=>"Putri legiani", 
    "NPM"=>"213040039", 
    "Email"=>"legi@gmail.com", 
    "Jurusan"=>"Teknik Informatika"],

    ["Nama"=>"Aufaa Husnaini", 
    "NPM"=>"213040034", 
    "Email"=> "aufaa@gmail", 
    "Jurusan"=> "Teknik Informatika"]

];
// var_dump ($mahasiswa [0]["Email"]);
?>

<?php foreach($mahasiswa as $mhs) {
    ?>
    <ul>
        <li>Nama : <?php echo $mhs ["Nama"]; ?></li>
        <li>NPM : <?php echo $mhs ["NPM"];?></li>
        <LI>Email : <?php echo $mhs ["Email"];?></LI>
        <li>Jurusan : <?php echo $mhs ["Jurusan"];?></li>
    </ul>
<?php  } ?>