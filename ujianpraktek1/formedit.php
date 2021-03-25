<?php
include 'koneksi.php';
    $id = $_GET['id'];
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="style-formedit.css">

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
    <!-- form -->
    <section id="hero">
        <div class="container">
            <div class="hero fw-bold">
                <p><i class="fas fa-edit ps-3"></i></i></i><span class="ms-2">Edit Produk </span></p>
            </div>
            <form action="edit.php" method="POST">
                <div class="row ms-3 me-3 justify-content-evenly font">
                    <div class="col-md-5">

                        <!-- <label for="exampleFormControlInput1" class="form-label">Nomor</label> -->
                        <input type="hidden" class="form-control" id="id" name="id_produk"
                            value="<?php echo $pel['id_produk']?>" />

                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                            <input type="text" class="form-control" id="" placeholder="Masukan URL" name="gambar"
                                value="<?php echo $pel['gambar']?>">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="" name="nama_produk"
                                value="<?php echo $pel['nama_produk']?>">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Detail</label>
                            <input type="text" class="form-control" id="" name="detail"
                                value="<?php echo $pel['detail']?>">
                        </div>
                        <a href="input.php" class="btn btn-merah">kembali</a>
                        <button type="submit" name="simpan" value="simpan" class="btn btn-hijau">Submit</button>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="" name="harga"
                                value="<?php echo $pel['harga']?>">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="" name="stock"
                                value="<?php echo $pel['stock']?>">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- tutup form -->





















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