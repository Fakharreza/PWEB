$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault(); // Hindari pengiriman form

        var formData = $(this).serialize(); // Ambil data form
        // Kirim data form menggunakan AJAX ke PHP
        $.ajax({
            type: 'POST',
            url: 'login_process.php',
            data: formData,
            success: function(response) {
                if (response.trim() == "success") {
                    window.location.href = 'index.html'; // Redirect ke halaman beranda setelah login berhasil
                } else {
                    alert("Login gagal. Cek kembali username dan password.");
                }
            }
        });
    });
});
