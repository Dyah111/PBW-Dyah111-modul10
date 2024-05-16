<?php
require_once "koneksiberita.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];

$sql = "INSERT INTO berita (judul, isi, id_kategori) VALUES ('$judul', '$isi', '$kategori')";
if (mysqli_query($conn, $sql)) {
    header("Location: indexberita.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
