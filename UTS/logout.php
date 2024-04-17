<?php
session_start();
session_unset(); // Hapus semua data session
session_destroy(); // Hapus session

// Redirect ke halaman login setelah logout
header("Location: login.html");
exit();
?>
