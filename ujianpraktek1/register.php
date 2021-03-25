<?php
    include 'koneksi.php';

if (isset($_POST["regis"])) {
    if(registrasi($_POST) > 0 ){
        
    }
}


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Style Regis -->
  <link rel="stylesheet" href="style-register.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- FONT ROBOTO SLAB -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Roboto+Slab:wght@100;700&display=swap" rel="stylesheet">

  <!-- roboto -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <title>Hello, world!</title>
</head>

<body>
  <!-- navbar -->
  <section id="utama">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md sebagian1">
          <div class="kotak1 float-end">
            <div class="isi">
              <i class="fas fa-user-circle"></i>
              <p>Get access to your Orders, <br> Wishlist and Recomendations</p>
              

            </div>
          </div>
        </div>
        <div class="col-md sebagian2">
          <div class="kotak2 float-start">
            <form action="" method="post">
              
              <p class=" text-center fw-bold"><i class="fas fa-shopping-cart"></i> SIGN IN</p>
              <div class="form1">
                <label for="">USERNAME</label><br>
                <input type="text" name="username" class="form-control" style="background-color: transparent; border: none; border-radius: 0px; border-bottom: 1px solid #5352ed; box-shadow: none;" placeholder="masukan username">

                <label for="">EMAIL</label><br>
                <input type="email" name="email" class="form-control" style="background-color: transparent; border: none; border-radius: 0px; border-bottom: 1px solid #5352ed; box-shadow: none;" placeholder="masukan email">

                <label for="" class="mt-3">PASSWORD</label><br>
                <input type="password" name="password" class="form-control" style="background-color: transparent; border: none; border-radius: 0px; border-bottom: 1px solid #5352ed; box-shadow: none;" placeholder="masukan password">

                <label for="" class="mt-3">KONFIRMASI PASSWORD</label><br>
                <input type="password" name="password2" class="form-control" style="background-color: transparent; border: none; border-radius: 0px; border-bottom: 1px solid #5352ed; box-shadow: none;" placeholder="konfirmasi password">

                <button class="btn" name="regis">SIGN UP</button>
                <a href="login.php"style="text-decoration:none; font-size:14px;">sudah punya akun? login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- tutup navbar -->




















  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>