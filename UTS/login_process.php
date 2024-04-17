<?php
session_start();

// Simulasikan validasi login sederhana
$username = "admin";
$password = "password";

if ($_POST['username'] == $username && $_POST['password'] == $password) {
    $_SESSION['username'] = $username; // Simpan username ke dalam session
    echo "success";
    
} else {
    echo "error";
}
?>
