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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- FONT LOBSTER -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     
    <link rel="stylesheet" href="style-input.css">
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
    <!-- tabel -->
    <section id="hero">
    <div class="container  mb-5">
        
        <div class="hero">
            <p><i class="fas fa-list ps-3"></i> <span class="ms-2 fw-bold">Produk</span></p>
            <a href="tambah.html" class=" btn text-white  ms-3"><i class="fas fa-folder-plus pe-2"></i></i> Tambah Baru</a>
        </div>
        <div class="input ms-3 me-3 mt-3 pb-3">
            <table class="table table-bordered border-dark text-dark text-center">
                <tr>
                    <td>NO</td>
                    <td>GAMBAR</td>
                    <td>NAMA PRODUK</td>
                    <td>HARGA</td>
                    <td>STOCK</td>
                    <td>DETAIL</td>
                    <td>ACTION</td>
                </tr>
                
                    <?php
                $sql = "SELECT * FROM product";
                $query = mysqli_query($connect,$sql);
                  
                    while($pel = mysqli_fetch_array($query)){
                        echo"<tr class='text'>";
                        echo"<td>".$pel['id_produk']."</td>";
                        echo "<td><img src='".$pel['gambar']."'style='width:80px; height:80px;'></td>";
                        echo"<td>".$pel['nama_produk']."</td>";
                        echo"<td class='text-center'>Rp ".number_format($pel['harga'])."</td>";
                        echo"<td class='text-center'>".$pel['stock']."</td>";
                        echo"<td>".$pel['detail']."</td>";

                        echo"<td class='text-center'>";
                        echo "<a class='btn btn-dark' href='formedit.php?id=".$pel['id_produk']."'>Edit</a>  ";
                        echo "<a class='btn btn-danger' href='hapus.php?id=".$pel['id_produk']."'>Hapus</a>";
                        echo"</td>";
                        echo"</tr>";    
                    }
                ?>
                
            </table>
        </div>
    </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>