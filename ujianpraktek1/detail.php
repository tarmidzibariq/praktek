<?php
include 'koneksi.php';
    $id = $_GET['id_produk'];
    $sql    = "SELECT * FROM product WHERE id_produk='$id'";
    $query  = mysqli_query($connect, $sql);
    $pel = mysqli_fetch_assoc($query);

if ( mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

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
    <!-- FONT LOBSTER -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style-detail.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">TopShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
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
        <div class="container">
            <div class="row m-auto">
                <div class="col-md-7">
                    <img src="<?php echo $pel['gambar']?>" alt="">
                    <!-- <img src="https://s3-ap-southeast-1.amazonaws.com/avana-shop-files/72096/images/large/de420c2d978fdbe9e94e" alt=""> -->
                </div>
                <div class="col-md-5">
                    <div class="text">
                        <p><?php echo $pel['nama_produk']?></p>
                        <p>IDR <?php echo number_format($pel['harga'])?></p>
                        <p class="mt-5"><i class="fas fa-tags"></i> INFORMASI PRODUK</p>
                        <div class="text2">Detail:<?php echo $pel['detail']?></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="text3">Tersisa <?php echo $pel['stock']?></div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn">Beli</button>
                            </div>
                        </div>
                        

                        
                    </div>
                    <!-- <div class="text">
                        <p>AHHA MASK Indo Pride Edition "PARANG HITAM"</p>
                        <p>IDR 89.500</p>
                        <p class="mt-5"><i class="fas fa-tags"></i> INFORMASI PRODUK</p>
                        <div class="text2">BAHAN KATUN BISA DICUCI</div>
                        <button class="btn">Beli</button>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

































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