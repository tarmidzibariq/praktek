<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $id = $_POST['id_produk'];
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $gambar = $_POST['gambar'];   
    $detail = $_POST['detail'];   

    $sql = "UPDATE product SET nama_produk='$nama', harga='$harga', stock='$stock', gambar='$gambar', detail='$detail' WHERE id_produk='$id'";
    $query =mysqli_query($connect,$sql);
    if ($query) {
    header('Location: input.php');
    }else{
    header('location: edit.php?status=gagal');
    }
}
?>