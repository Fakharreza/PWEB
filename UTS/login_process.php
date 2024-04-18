<?php
    include "koneksi.php";  
    session_start();

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $_SESSION['username'] = $username;
    
    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    $cek = mysqli_num_rows($result);

    
    if ($cek){
        echo "Anda berhasil login"; ?>
        <a href="beranda.php">Halaman Home</a>
    <?php
    } else {
        echo "Username atau Password anda salah, silahkan "; ?>
        <a href="index.html">Login Kembali</a>
    <?php
        echo mysqli_error($conn); 
    }
?>
