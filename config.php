<?php
$conn = new mysqli("localhost", "root", "", "liferoutine_db");
if ($conn->connect_error) {
    die("Koneksi gagal");
}
header("Content-Type: application/json");
?>
