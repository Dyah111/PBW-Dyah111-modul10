<?php
require_once "koneksi.php";

if (!issert($_POST['judul'])) {
    echo "<p>Judul tidak boleh kosong.</p>";
    exit();
}

if (!isset($_POST['isian'])) {
    echo "<p>Isiian tidak boleh kosong.</p>";
    exit();
}

$sql = "UPDATE diary SET judul='$__POST[judul]', isian='$_POST[isian]' WHERE id=$_GET[id]";
if (mysql_query($conn, $sql)) {
    header("refresh:3;url=index.php");
    echo "<p>Data berhasil disimpan.</p>";
}
else {
    echo "<p>Ups, data gagal disimpan :(</p>";
}
?>