<?php
require_once "koneksiberita.php";

if(isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];

    $sql = "SELECT b.id, b.judul, b.isi 
            FROM berita b
            INNER JOIN kategori k ON b.id_kategori = k.id
            WHERE k.nama = '$kategori'";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita <?php echo $kategori; ?></title>
    <script>
        function confirmDelete(id) {
            if (confirm("Hapus data ini?") == true) {
                window.location.href = 'hapusberita.php?id=' + id;
            }
        }
    </script>
</head>
<body>
    <h1>Berita <?php echo $kategori; ?></h1>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h2>".$row['judul']."</h2>";
            echo "<p>".$row['isi']."</p>";
            echo '<td><a href="editberita.php?id=' . $row['id'] . '">Edit</a>';
            echo " |";
            echo '<a href="#" onclick="confirmDelete(' . $row['id'] . ')">Hapus</a></td>';
            echo "<hr>";
        }
    } else {
        echo "Belum ada berita pada kategori ini.";
    }
    ?>
</body>
</html>

<?php
} else {
    header("Location: indexberita.php");
}
?>
