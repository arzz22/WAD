<?php   
// koneksi ke database
$connect = mysqli_connect("localhost:3308", "root", "", "toko_parfum");

// penanganan kesalahan koneksi
if (!$connect) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $connect;

     //ambil data dari tiap elemen dalam form
     $jenis = htmlspecialchars($data["jenis"]);
     $gender = htmlspecialchars($data["gender"]);
     $produk = htmlspecialchars($data["produk"]);
     $deskripsi = htmlspecialchars($data["deskripsi"]);
     $harga = htmlspecialchars($data["harga"]);
     $gambar = htmlspecialchars($data["gambar"]);

     //query insert data
    $query = "INSERT INTO toko_parfum_arya(jenis, gender, produk, deskripsi, harga, gambar)
    VALUES
    ('$jenis','$gender','$produk', '$deskripsi','$harga', '$gambar')";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM toko_parfum_arya WHERE id = $id");
    return mysqli_affected_rows($connect);
}

function ubah($data) {
    global $connect;

    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $jenis = htmlspecialchars($data["jenis"]);
    $gender = htmlspecialchars($data["gender"]);
    $produk = htmlspecialchars($data["produk"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
   $query = "UPDATE toko_parfum_arya SET
               jenis = '$jenis',
               gender = '$gender',
               produk = '$produk',
               deskripsi = '$deskripsi',
               harga = '$harga',
               gambar = '$gambar' 
            WHERE id = $id";
   mysqli_query($connect, $query);
   return mysqli_affected_rows($connect);
}
?>