<?php
$host = "localhost"; // Host MySQL
$user = "root"; // Username MySQL
$pass = "dyah1112$"; // Password MySQL
$db = "berita"; // Nama Database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
