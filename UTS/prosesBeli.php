<?php
if (isset($_POST['belitiket1']) && isset($_POST['belitiket2'])&&isset($_POST['belitiket3'])){
    setcookie("belitiket1", $_POST["belitiket1"]);
    setcookie("belitiket2", $_POST["belitiket2"]);
    setcookie("belitiket3", $_POST["belitiket3"]);
    header("location: keranjangBelanja.php");
}
?>
