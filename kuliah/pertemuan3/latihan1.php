<?php
// pengulangan
// for
// while
// do..while
// foreach (pengulangan khusus array)

for ($i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}
echo "<hr>";

$i = 0;
while ($i < 5) {
    echo "Hello World! <br>";
    $i++;
    // while : selama kondisi bernilai true lakukan apapun di dalamnya
    //         tidak di jalankan sama sekali jika false
}
echo "<hr>";

$i = 10;
do {
    echo "Hello World <br>";
    $i++;
} while ($i < 5);
// do while : dijalankan sekali meskipun jika false
// do : lakukan setelah bernilai trus 
//      jalankan baru cek kondisi.
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>

    <style>
       .warna-baris {
           background-color: silver;
       } 
    </style>
</head>
<body>
    <table border="1" cellpadding = "10" cellspacing="0">
        <!-- penulisan ke-1 -->
        <?php 
        
        for($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for($j = 1; $j <= 5; $j++ ){
               echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    

        <!-- penulisan ke-2 -->
    <table border="1" cellpadding = "10" cellspacing="0">
       <?php for($i = 1; $i <= 3; $i++) : ?>
        <tr>
            <?php for($j = 1; $j <= 5; $j++ ) : ?>
               <td> <?php echo "$i,$j"; ?></td>;
            <?php endfor;?>
        </tr>
        <?php endfor?>
    </table>
    <br>

    <!-- memberi warna -->
    <table border="1" cellpadding = "10" cellspacing="0">
       <?php for($i = 1; $i <= 3; $i++) : ?>
         <?php if ($i %2 == 0 ) : ?>
            <tr class = "warna-baris">
                <?php else : ?>
                <tr?>
         <?php endif; ?>
                <?php for ($j =1; $j<=5; $j++ ) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
                </tr>
       <?php endfor; ?>
    </table>

</body>
</html>