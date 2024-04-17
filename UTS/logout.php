<?php
session_start();
session_unset(); // Hapus semua data session
session_destroy(); // Hapus session


header("Location: index.html");
exit();
?>
