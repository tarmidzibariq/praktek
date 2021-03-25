<?php

include 'koneksi.php';

if (isset($_GET['id_produk'])) {
    header('Location: index.php');
}
$id = $_GET['id']; 

$sql    = "DELETE FROM product WHERE id_produk='$id'";
$query  = mysqli_query($connect, $sql);

if ($query){
    
    
    echo "<meta http-equiv='refresh' content='1;url=input.php'>";
}else{
    header('Location: hapus.php?status=gagal');
}

?>