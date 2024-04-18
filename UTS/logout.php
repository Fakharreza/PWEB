<?php
session_start();
// Set cookies kedaluwarsa dengan nilai kosong
setcookie("belitiket1", "", time() - 3600);
setcookie("belitiket2", "", time() - 3600);
setcookie("belitiket3", "", time() - 3600);

// Redirect ke halaman login atau halaman lain yang sesuai
header("location: login.php");

session_unset(); // Hapus semua data session
session_destroy(); // Hapus session


header("Location: index.html");
exit();
?>
