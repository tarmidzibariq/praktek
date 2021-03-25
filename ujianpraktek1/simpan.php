<?php
    include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $id = $_POST['id_produk'];
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stock = $_POST['stock'];
        $gambar = $_POST['gambar'];
        $detail = $_POST['detail'];
        $sql = "INSERT INTO product (id_produk,nama_produk,harga,stock,gambar,detail) 
        VALUES ('$id','$nama','$harga','$stock','$gambar','$detail')";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: input.php');
        }else{
            header('location: simpan.php?status=gagal');
        }

        





    }
?>