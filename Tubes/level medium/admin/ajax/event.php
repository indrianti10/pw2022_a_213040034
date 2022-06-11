<?php  
usleep(500000);
require '../functions.php';
$keyword = $_GET["keyword"];


$query =    "SELECT * 
            FROM dream_luxion
            WHERE 
            events LIKE '%$keyword%'OR
            Genre LIKE '%$keyword%' OR
            Tempat LIKE '%$keyword%' 
            ";
;
$eventt = query($query);
?>

<table class="table table-bordered border-dark text-center">
        
      <thead class="table-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama Event</th>
          <th scope="col">Genre</th>
          <th scope="col">Tempat</th>
          <th scope="col">Tanggal Mulai</th>
          <th scope="col">Tanggal Berakhir</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; ?>
        <?php foreach ($eventt as $row) :?>
        <tr>
        
          <th><?= $i;?></th>
          <td><img src="img/<?= $row["Gambar"]; ?>" 
          width="100"></td>
          <td><?= $row["events"];?></td>
          <td><?= $row["Genre"];?></td>
          <td><?= $row["Tempat"];?></td>
          <td><?= $row["Tanggal_mulai"];?></td>
          <td><?= $row["Tanggal_berakhir"];?></td>
          <td>
            <a href="ubah.php?id=<?= $row["id"];?>"><button type="button" class="btn btn-primary">Ubah</button></a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm(' apakah anda yakin menghapus data ini?');">
            <button type="button" class="btn btn-danger" > Hapus</button> 
            </a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
</table>