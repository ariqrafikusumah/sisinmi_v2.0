<?php
// menghubungkan php dengan koneksi database
include '../../config/database.php';

if (isset($_GET['alert']) && isset($_GET['pesan'])) {
    $alert = $_GET['alert'];
    $pesan = $_GET['pesan'];
    if ($alert == "success") {
        ?><div class="alert alert-success"><?= $pesan ?></div><?php
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_matakuliah = $_POST['kode_matakuliah'];
    $query = "INSERT INTO berita_acara (kode_matakuliah) VALUES ('$kode_matakuliah')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        ?><script>alert("User berhasil ditambahkan!");</script><?php
    } else {
        ?><script>alert("User gagal ditambahkan!");</script><?php
    }
}

$query_matakuliah = "SELECT kode_matakuliah, nama_matakuliah FROM matakuliah";
$result_matakuliah = mysqli_query($koneksi, $query_matakuliah);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

mysqli_close($koneksi);
?>
