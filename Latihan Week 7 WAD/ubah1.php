<?php
require 'functions1.php';

// Ambil data di URL
$id = $_GET["id"];

// Query data mtoko_prafum_arya berdasarkan ID
$prfm = query("SELECT * FROM toko_parfum_arya WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    // Cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'index.php';
        </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Parfum</title>
</head>

<body>
    <h1>Ubah Data Parfum</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $prfm["id"]; ?>">

        <label for="jenis">Jenis :</label>
        <input type="text" name="jenis" id="jenis" required value="<?= $prfm["jenis"]; ?>">

        <label for="gender">Gender :</label>
        <input type="text" name="gender" id="gender" required value="<?= $prfm["gender"]; ?>">

        <label for="produk">Produk :</label>
        <input type="text" name="produk" id="produk" required value="<?= $prfm["produk"]; ?>">

        <label for="deskripsi">Deskripsi :</label>
        <input type="text" name="deskripsi" id="deskripsi" required value="<?= $prfm["deskripsi"]; ?>">

        <label for="harga">Harga :</label>
        <input type="text" name="harga" id="harga" required value="<?= $prfm["harga"]; ?>">

        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required value="<?= $prfm["gambar"]; ?>">

        <button type="submit" name="submit">Ubah Data</button>
    </form>

</body>

</html>
