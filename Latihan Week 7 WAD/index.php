<?php
require 'functions1.php';
$toko_parfum_arya = query("SELECT * FROM toko_parfum_arya");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #BFE4FF;
        }

        .jumbotron {
            background: linear-gradient(to bottom, #CDFFD8, #94B9FF);
            color: #0D3028;
            text-align: center;
            padding: 2rem;
            border-bottom: 5px solid #CDFFD8;
        }

        table {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }

        th,
        td {
            text-align: center;
            vertical-align: middle !important;
        }

        img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 5px;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .add-button {
            margin-top: 1rem;
        }
    </style>
    <title>Toko Parfum Arya</title>
</head>

<body>
    <div class="jumbotron">
        <h1>Selamat Datang di Toko Parfum Arya</h1>
        <p>Nikmati koleksi parfum terbaru kami dengan kualitas terbaik.</p>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Jenis</th>
                    <th>Gender</th>
                    <th>Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1; ?>
                <?php foreach ($toko_parfum_arya as $row) : ?>
                    <tr>
                        <td><?= $n; ?></td>
                        <td><img src="Image/<?= $row["gambar"]; ?>" alt=""></td>
                        <td><?= $row["jenis"]; ?></td>
                        <td><?= $row["gender"]; ?></td>
                        <td><?= $row["produk"]; ?></td>
                        <td><?= $row["deskripsi"]; ?></td>
                        <td>Rp <?= number_format($row["harga"], 0, ',', '.'); ?></td>
                        <td class="action-buttons">
                            <a href="ubah1.php?id=<?= $row["id"]; ?>" class="btn btn-info btn-sm">Ubah</a>
                            <a href="hapus1.php?id=<?= $row["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin menghapus data ini ?');">Hapus</a>
                        </td>
                    </tr>
                    <?php $n++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="d-flex justify-content-center add-button">
            <a href="tambah1.php" class="btn btn-primary">Tambah Data Parfum</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
