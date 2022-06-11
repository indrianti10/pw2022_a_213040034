<?php
session_start();
require 'functions.php';

// cek cookie
// if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
//     $id = $_COOKIE['id'];
//     $key = $_COOKIE['key'];
// }

// ambil username berdasarkan id
// $result = mysqli_query($conn, "SELECT username
//           FROM users 
//           WHERE id= '$id'");
// $row = mysqli_fetch_assoc($result);

// // cek cookie dan username
// if( $key === hash ('sha256', $row['username']) ) {
//     $_SESSION["login"] = true;
// }


// if( isset($_COOKIE["login"]) ) {
//     if( $_COOKIE["login"] == "true") {
//         $_SESSION["login"] = true;
//     }
// }

if( isset($_SESSION["login"]) ) {
    header("location:..//admin/index.php");
    exit;
}


if(isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * 
              FROM users
              WHERE username = '$username'";

    $result = mysqli_query($conn, $query);

    // cek username
    if(mysqli_num_rows($result) === 1) {
        
        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST['remember']) ) {
                // buat cookie

                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("location:..//admin/index.php");
            exit;
        }
    }
    $error = true;

}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <body>
      <img src="..//img" alt="">
      <div class="card-login">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
           <?php if( isset($error) ): ?>
            <p style="color:red; font-style:italic;">username/password salah!</p>
            <?php endif; ?>
            <form action="" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="remeber" checked>
                    <label class="form-check-label" for="remember" style="color:aliceblue;">
                        Remember me
                    </label>
                </div>
    
            <div class=" mb-3 mt-3 ps-2">
                <button type="submit" name="login" style="width: 350px; padding-left: 20px;" class="btn btn-outline-light">Login</button>
            </div>

                <p style="color: white;" >Buat akun? <a href="registrasi.php" style="color:green; text-decoration-line: none;">Registrasi</a></p>
                
            </form>
            
        </div>
       </div>
     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>