<?php

// cek login
if (isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

include "function.php";
$gambar = $_GET['gambar'];
global $conn;
unlink("asset/img/$gambar");
mysqli_query($conn, "DELETE FROM artikel WHERE gambar = '$gambar'");

mysqli_affected_rows($conn);
header("Location: admin.php");
exit;
