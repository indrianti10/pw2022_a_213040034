<?php  

// ARRAY
// array adalah variable yang dapat menampung lebih dari satu nilai sekaligus

// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"]; //cara baru
$bulan = array("Januari", "Februari", "Maret", "April"); //cara lam
$myArray = [100, "Indri", true];

//mencetak ARRAY
//Mencetak 1 elemen/nilai menggunakan index, index dimulai dari 0
//elemen pertama adalah 0
echo $hari [1];
echo "<br>";
echo $bulan[2];
echo"<hr>";

//mencetak semua elmen pada array
// var_dump() atau print_r()
//khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

//Mencetak menggunakan Looping
//for
//count() untuk menghitung secara otomatis jika di array di rubah
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";$b;
    echo "<br>";
}
echo "<hr>";


echo "<hr>";

//foreach (khusu untuk array)
//array jamak
//as singular
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

foreach  ($hari as $key => $value) {
echo "key : $key, Value : $value:";
echo "<br>";
//Memanipilaasi isi array
//Menambah elemen baru di akhir array 
$hari[]="Sabtu";
$hari[count($hari)]= "Minggu";
var_dump($hari);
}
?>











