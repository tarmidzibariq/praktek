<?php

include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- FONT LOBSTER -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    
    <title>Ujian Praktek</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">TopShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link me-3" href="index.php">&emsp;HOME&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#">&emsp;BROWSE PRODUCTS&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#">&emsp;ABOUT US&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="input.php">&emsp;ADMIN&emsp;</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- tutup navbar -->
    <!-- hero -->
    <section id="hero">
        
        <div class="gradient">
            
        </div>
        <div class="container">
            <h1 class="fw-bold">CHEAPEST FREE SHIPING</h1>
        </div>
        
        
    </section>
    
    <!-- tutup hero -->
    <!-- product -->
    <section id="product">
        <div class="brandproduct">
            <h4 class="text-center">TOP SHOP</h4>
            <div class="garis"></div>
        </div>
       <div class="container">
             <?php
                $id = mysqli_query($connect,'SELECT * FROM product ORDER BY product.id_produk');
                while ($prdk = mysqli_fetch_array($id)){
                    $idp = $prdk['id_produk'];
            ?>
            <div class="card float-start">
                <img src="<?php echo $prdk['gambar'] ?>" alt="">
                <h3 class="text-center mt-3"><?php echo $prdk['nama_produk'] ?></h3>
                <p class="text-center mt-1">Rp. <?php echo number_format($prdk['harga']) ?></p>
            </div>
            <?php
                }
            ?>
       </div>

    </section>



    <!-- tutup product -->


















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>