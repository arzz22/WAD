<?php
require 'functions1.php';

if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Parfum</title>
</head>

<body>
    <h1>Tambah Data Parfum</h1>

    <form action="" method="post">
        <label for="jenis">Jenis :</label>
        <input type="text" name="jenis" id="jenis" required>

        <label for="gender">Gender :</label>
        <input type="text" name="gender" id="gender" required>

        <label for="produk">Produk :</label>
        <input type="text" name="produk" id="produk" required>

        <label for="deskripsi">Deskripsi :</label>
        <input type="text" name="deskripsi" id="deskripsi" required>

        <label for="harga">Harga :</label>
        <input type="text" name="harga" id="harga" required>

        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required>

        <button type="submit" name="submit">Tambahkan Data</button>
    </form>

</body>

</html>