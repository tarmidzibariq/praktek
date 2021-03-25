<?php
  session_start();
  include 'koneksi.php';
  // cek cokie
  if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
      $id = $_COOKIE['id'];
      $key = $_COOKIE['key'];

      // ambil username berdasar id
      $result= mysqli_query($connect,"SELECT username FROM user WHERE id=$id");
      $row = mysqli_fetch_assoc($result);

      // cek cookie dan username
      if ( $key === hash('sha256',$row['username'])) {
          $_SESSION['login'] = true;
      }
  }

  if ( isset($_SESSION["login"])) {
      header("Location: index.php");
      exit;
  }

 

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($connect, "SELECT * FROM user WHERE username ='$username'");

  // cek username
  if ( mysqli_num_rows($result) === 1) {
    
    // cek password
    $row =mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ){

      // set session
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST['remember'])) {
        setcookie('id', $row['id'], time() +60);
        setcookie('key', hash('sha256', $row['username']), time()+60);


        
        // setcookie('login','true', time() + 60);  
      }

      header("Location: index.php");
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

  <!-- Style Regis -->
  <link rel="stylesheet" href="style-login.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- FONT LOBSTER -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  <!-- roboto -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <title>Login</title>
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
              <a href="register.php"><button class="btn bg-light ">SIGN UP</button></a>

            </div>
          </div>
        </div>
        <div class="col-md sebagian2">
          <div class="kotak2 float-start">
            <p class="fw-bold text-center"><i class="fas fa-shopping-cart"></i> TopShop</p>
            <!-- jika salah -->
            <!-- <?php if (isset($error)) : ?>
               <div>password / username</div>
              <?php endif; ?> -->

            <form action="" method="post">
              <div class="form1">
                <label for="">USERNAME</label><br>
                <input type="text" name="username" class="form-control" style="background-color: transparent; border: none; border-radius: 0px; border-bottom: 1px solid #5352ed; box-shadow: none;" placeholder="topsq123.gmail.com">

                <label for="" class="mt-3">PASSWORD</label><br>
                <input type="password"name="password" class="form-control" style="background-color: transparent; border: none; border-radius: 0px; border-bottom: 1px solid #5352ed; box-shadow: none;" placeholder="12345">

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="remember" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Ingat 1 menit
                  </label>
                </div>

                <button type="submit" name="login" class="btn">SIGN IN</button>
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