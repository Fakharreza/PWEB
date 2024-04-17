$(document).ready(function() {
    // Tangani pengiriman formulir login
    $('#loginForm').submit(function(event) {
        event.preventDefault(); // Hindari pengiriman form secara default
        
        var formData = $(this).serialize(); // Ambil data form
        
        // Kirim data form menggunakan AJAX ke login_process.php
        $.ajax({
            type: 'POST',
            url: 'login_process.php',
            data: formData,
            success: function(response) {
                // Tampilkan pesan balasan dari server
                alert(response);
                // Redirect ke halaman beranda jika login berhasil
                if (response.includes("berhasil")) {
                    window.location.href = 'index.html';
                }
            }
        });
    });

});
