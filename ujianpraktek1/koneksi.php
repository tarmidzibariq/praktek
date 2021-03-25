<?php
$host       ="localhost";
$user       ="root";
$password   ="";
$database   ="ujiprak";
$connect    =mysqli_connect($host,$user,$password,$database) or die("Gagal Menghubungkan");
?>
<?php
function registrasi($data){
    global $connect;

    $username = stripslashes($data["username"]);
    $email = $data["email"];
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["password2"]);
    
    // cek konfirmasi password
    if ( $password !== $password2) {
        echo"<script>
        alert('konfirmasi password tidak sesuai');
        </script>";

        return false;
    }

    
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // cek username nya 
    $result = mysqli_query($connect,"SELECT username FROM user WHERE username ='$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
            </script>";
            return false;
    }
    if (empty(['username'] or $data['email'] or $data['password'])) {
        echo"<script>
        alert('Silahkan isi data terlebih dahulu!')
        </script>";
        return false;
    }


    
    $querry =mysqli_query($connect, "INSERT INTO user VALUES('','$username','$email','$password')");
    if ($querry) {
        header('Location: login.php');
    }

    return mysqli_affected_rows($connect);
}
?>