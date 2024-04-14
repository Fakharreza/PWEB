<?php
$pesan = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $pesan = "<p style='color: green;'>Email valid: " . htmlspecialchars($email) . "</p>";
    } else {
        $pesan = "<p style='color: red;'>Email tidak valid. Silakan coba lagi.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validasi Email</title>
</head>
<body>
    <h2>Form Validasi Email</h2>
    <?php echo $pesan; ?>

    <form method="POST" action="">
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>