<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('behasil registrasi');
               </script>";
    }else {
        echo mysqli_error($conn);
    }
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

    <title>Halaman Registrasi</title>
  </head>
  <body>
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Registrasi</h5>
            <form action="" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email"  name="email" class="form-control" id="email" required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="password2" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password2" class="form-control" id="password2" required>
                </div>
            
                <button type="submit" name="register" style="width: 350px; margin-left:11px;"
                class="btn btn-outline-light">Registrasi</button>

                <p style="color: white; text-align:center; margin-top:5px;" >Sudah punya akun? 
                <a href="login.php"
                 style="color:green; text-decoration-line: none; margin-top :5px;">
                 Login disini</a></p>
                
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