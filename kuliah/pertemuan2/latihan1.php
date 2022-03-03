
<!-- // Pertemuan 2, membahas sintaks php
// Nilai: integer, String, boolean
// standar output
// echo, print
// var_dump

// penulisan sintaks php : -->
<!-- 1. PHP di dalam HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP </title>
</head>
<body>
    <h1> hello, selamat datang <?php echo "Widya Dwi Indrianti" ?></h1>
    <p><? echo "ini adalah paragraf"?></p>
</body>
</html>
2. HTML di dalam PHP
<?php
echo "<h1> Hallo, Selamat Datang Widya Dwi Indrianti <h1>"
?>
<hr> -->

<?php
echo 10;
echo "<hr>";

// variable
// wadah untuk menyimpan NILAI
// namanya bebas, tidak boleh diawali angka
// tidak boleh spasi
$nama = 'Indri';
echo $nama;
echo "<br>";
// bisa ditimpa / pverwrite
$nama = 'Widya';
echo $nama;
echo "<hr>";

// String
// '', ""
echo "jum'at";
echo "<br>";
// escape character
// \
echo 'Indri : "Jum\'at"';
echo "<br>";
echo "Indri : \"Jum'at\"";
echo "<hr>";

// Interpolasi
// Mencetak isi variable
// hanya digunakan oleh ""
echo "Hello nama saya $nama";
echo "<br>";
$price = 200;
echo "Price; $$price";
echo "<hr>";

// OPERATOR
// aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
 echo (1 + 2) * 3 - 4; //KaBaTaKu
echo "<br>";
$alas = 10;
$tinggi = 20;
$luas_segi_tiga = ($alas + $tinggi) / 2;
echo $luas_segi_tiga;
echo "<br>";
echo 3 % 2;
echo "<hr>";

// concat
// peggabung string
//  .
$nama_depan ='Widya';
$nama_belakang = 'Indrianti';
echo $nama_depan . " " . $nama_belakang;
echo "<hr>";

// perbandingan
// <, >, <=, >=, ==, !=
echo 1<5;
echo "<br>";
echo 10 == "10";
echo "<br>";
var_dump (1 < 5);
echo "<hr>";

// identitas / strict comparison
// ===, !==
echo 10 === "10";
echo "<br>";
var_dump(1 === "1");
echo "<hr>";


// identitas / Decrement
// penambahan / pengurangan
// ++, --
$x = 10;
echo ++$x;
echo "<br>";
echo $x++;
echo "<hr>";

// logika 
// &&, ||, !
$x = 10;
var_dump($x <20 && $x % 2 == 0);
echo "<br>";
$x = 30;
var_dump($x <30 && $x % 2 == 0);
echo "<br>";
$x = 10;
var_dump($x <20 && $x % 2 == 0);
echo "<hr>";

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;
echo "<br>";
$nama = "Widya";
$nama .= " ";
$nama .= "Indri";
echo $nama;
echo "<hr>";

?>