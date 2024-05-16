Pembaruan pada pintasan keyboard … Pada Kamis, 01 Agustus 2024, pintasan keyboard Drive akan diperbarui untuk memberi Anda navigasi huruf pertamaPelajari lebih lanjut
<?php
require_once "koneksi.php";

$sql = "DELETE FROM diary WHERE id=" . $_GET['id'];
if (mysqli_query($conn, $sql)) {
    header("refresh:3;url=index.php");
    echo "<p>Data berhasil dihapus.</p>";
}
else {
    echo "<p>Ups, data gagal dihapus :(</p>";
}
?>