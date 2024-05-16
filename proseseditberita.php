<?php
require_once "koneksiberita.php";

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];

$sql = "UPDATE berita SET judul='$_POST[judul]', isi='$_POST[isi]' WHERE id=$_GET[id]";
if (mysqli_query($conn, $sql)) {
    header("Location: indexberita.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>