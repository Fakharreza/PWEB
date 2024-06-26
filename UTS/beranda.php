<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="jquery-3.7.1.js"></script>
    <link rel="stylesheet" type="text/css" href="styleSlide.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleSlideShow.css">
    <script>
        $(document).ready(function() {
            $('.btn-kategori').click(function() {
                var input = $(this).next('input[type="number"]');
                if (input.is(':visible')) {
                    input.hide();
                    $('.btn-kategori').prop('disabled', false); 
                    $('.btn.btn-primary').hide();
                } else {
                    $('input[type="number"]').hide();
                    input.show();
                    $('.btn-kategori').prop('disabled', true);
                    $(this).prop('disabled', false); 
                    $('.btn.btn-primary').show(); 
                }
            });
        });


        $(document) .ready(function(){
            $("#kotak2").hide(); 
            $("#flip").click(function(){ 
                $("#kotak2").slideToggle("slow"); 
            });
          
        });
        var i = 0;
        $(document).ready(function () {
            $(" #slider img").hide();
            showNextImage();
            setInterval("showNextImage()", 6000);
        });
        function showNextImage() {
            i++;
            
            $("#sliderImage" + i)
                .appendTo("#slider")
                .fadeIn(1100)
                .delay(5000)
                .fadeOut(5000);
            
            $("#title" + i)
                .appendTo("#slider")
                .fadeIn(1100)
                .delay(5000)
                .fadeOut(5000);
            if (i == 3) {
                i = 0;
            }
        }
    </script>
</head>
<body>
    <div class="navbar">
        <a href="beranda.php">Beranda</a>
        <a href="keranjangBelanja.php">Keranjang</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="container">
        <h1>Selamat Datang !  </h1>
        <ul>
            <div id="slider">
                <img id="sliderImage1" src="img/reality.jpg" />
                <img id="sliderImage2" src="img/reality2.jpg" />
                <img id="sliderImage3" src="img/reality3.jpg" />
            </div>
            <div id=flip>Pilih Tiket yang Ingin Dibeli</div>
            <div id="kotak2">
                <form action="prosesBeli.php" method="post">
                    <button type="button" class="btn-kategori" id="cat1">CAT 1 - Rp 100.000</button>
                    <input type="number" name="belitiket1" id="belitiket1" value="0" min="0" max="100" style="display: none;"/>
                    
                    <button type="button" class="btn-kategori" id="cat2">CAT 2 - Rp 150.000</button>
                    <input type="number" name="belitiket2" id="belitiket2" value="0" min="0" max="100" style="display: none;"/>
                    
                    <button type="button" class="btn-kategori" id="festival">Festival - Rp 200.000</button>
                    <input type="number" name="belitiket3" id="belitiket3" value="0" min="0" max="100" style="display: none;"/>
                    
                    <button type="submit" class="btn btn-primary" style="display: none;">Beli Tiket</button>
                </form>
            </div>            
        </ul>
    </div>

    <div class="footer">
        <p>&copy; 2024 - Fakhar Reza Alamsyah</p>
    </div>
</body>
</html>
