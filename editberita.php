<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
</head>
<body>
    <?php
    require_once "koneksiberita.php";
    // Retrieve data from the database
    $sql = "SELECT id, judul, isi FROM berita WHERE id=" . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <h1>Edit Berita</h1>
        <form action="proseseditberita.php?id=<?php echo $_GET['id'] ?>" method="POST">
            Judul: <input type="text" name="judul" value="<?php echo $data['judul']; ?>"><br>
            Isi Berita: <textarea name="isi" rows="4" cols="50"><?php echo $data['isi']; ?></textarea><br>
            Kategori:
            <select name="kategori">
                <option value="1">Olahraga</option>
                <option value="2">Politik</option>
            </select><br>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>