<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="jquery-3.7.1.js"></script>
    <link rel="stylesheet" type="text/css" href="styleSlide.css"/>
    <link rel="stylesheet" href="style.css">
    <script>
        $(document) .ready(function(){
            
            $("#flip").click(function(){ 
                $("#kotak2").slideToggle("slow"); 
            });
          
        });
    </script>
</head>
<body>
    <div class="container">
        <ul>
        <h2>Keranjang Belanja</h2>
            <?php
            $belitiket1 = $_COOKIE['belitiket1'];
            $belitiket2 = $_COOKIE['belitiket2'];
            $belitiket3 = $_COOKIE['belitiket3'];

            echo "Jumlah Tiket konser A: " . $belitiket1 . "<br>";
            echo "Jumlah Tiket konser B: " . $belitiket2 . "<br>";
            echo "Jumlah Tiket konser C: " . $belitiket3 . "<br>";
            ?>
        </ul>
        <a href="beranda.html">Kembali</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
