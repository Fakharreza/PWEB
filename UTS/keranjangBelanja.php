<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="jquery-3.7.1.js"></script>
    <link rel="stylesheet" type="text/css" href="styleSlide.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="beranda.php">Beranda</a>
        <a href="keranjangBelanja.php">Keranjang</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <ul>
        <h2>Keranjang Belanja</h2>
            <?php
            $belitiket1 = $_COOKIE['belitiket1'] ?? 0;
            $belitiket2 = $_COOKIE['belitiket2'] ?? 0;
            $belitiket3 = $_COOKIE['belitiket3'] ?? 0;

            echo "Jumlah Tiket konser A: " . $belitiket1 . "<br>";
            echo "Jumlah Tiket konser B: " . $belitiket2 . "<br>";
            echo "Jumlah Tiket konser C: " . $belitiket3 . "<br>";
            ?>
        </ul>
    </div>
    <div class="footer">
        <p>&copy; 2024 - Fakhar Reza Alamsyah</p>
    </div>
</body>
</html>
