<?php 
//koneksi ke database
 $conn = mysqli_connect("localhost", "root", "", "eventt" );

// function query
 function query ($query) {
     global $conn;
     $result = mysqli_query($conn, $query);
     $rows = [];
     while ($row = mysqli_fetch_assoc($result) ) {
         $rows[] = $row;
        
     }
     return $rows;

 }
// function tambah
 function Tambah($data) {
     global $conn;
      // ambil data dari tiap elemen dalam form
    $events = htmlspecialchars($data ["events"]);
    $Genre = htmlspecialchars($data ["Genre"]);
    $Tempat = htmlspecialchars($data ["Tempat"]) ;
    $Tanggal_mulai = htmlspecialchars($data ["Tanggal_mulai"]);
    $Tanggal_berakhir = htmlspecialchars($data ["Tanggal_berakhir"]);
   
    // upload Gambar
    $Gambar = upload();
    if(!$Gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO dream_luxion
                VALUES
                ('', '$events', '$Genre', '$Tempat', '$Tanggal_mulai', '$Tanggal_berakhir', '$Gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
 }

 function upload() {
     $namaFile = $_FILES['Gambar']['name'];
     $ukuranFile = $_FILES['Gambar']['size'];
     $error = $_FILES['Gambar']['error'];
     $tmpName = $_FILES['Gambar']['tmp_name'];

    //  cek apakah tidak ada yang di upload
    if($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu');
          </script>";
          return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!!');
            </script>";
            return false;
    }

    // cek jika ukuran terlalu besar 
    if( $ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran Gambar terlalu Besar!!');
            </script>";
            return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

// function hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM dream_luxion WHERE id = $id");
    return mysqli_affected_rows($conn);

}


// function ubah
function ubah ($data) {
    global $conn;

    $id=$data["id"];

    $events = htmlspecialchars($data ["events"]);
    $Genre = htmlspecialchars($data ["Genre"]);
    $Tempat = htmlspecialchars($data ["Tempat"]) ;
    $Tanggal_mulai = htmlspecialchars($data ["Tanggal_mulai"]);
    $Tanggal_berakhir = htmlspecialchars($data ["Tanggal_berakhir"]);
    $GambarLama = htmlspecialchars($data["GambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['Gambar']['error'] === 4) {
        $Gambar = $GambarLama;
    } else {
        $Gambar = upload();
    }

    // query insert data
    $query = "UPDATE dream_luxion SET
                events = '$events',
                Genre = '$Genre',
                Tempat = '$Tempat',
                Tanggal_mulai = '$Tanggal_mulai',
                Tanggal_berakhir = '$Tanggal_berakhir',
                Gambar = '$Gambar'
                WHERE id = $id
                ";
                mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function searching
function cari($keyword) {
    $query = "SELECT * FROM dream_luxion
                WHERE 
                events LIKE '%$keyword%'OR
                Genre LIKE '%$keyword%' OR
                Tempat LIKE '%$keyword%' 
                ";

    return query($query);
}

// function registrasi
function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]) );
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    // cek username sudah ada atau belum
    $query = "SELECT username 
              FROM users 
              WHERE username = '$username'";
    $result = mysqli_query($conn,$query);

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah digunakan');
                </script>";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('password tidak sesuai!');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user ke database
    mysqli_query($conn, "INSERT INTO users VALUES ('', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);
}
?>
