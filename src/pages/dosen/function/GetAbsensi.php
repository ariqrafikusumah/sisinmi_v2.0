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
    $jumlah_hadir = $_POST['jumlah_hadir'];
    $query = "INSERT INTO berita_acara (jumlah_hadir) VALUES ('$jumlah_hadir')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        ?><script>alert("User berhasil ditambahkan!");</script><?php
    } else {
        ?><script>alert("User gagal ditambahkan!");</script><?php
    }
}

$query_absensi = "SELECT jumlah_hadir FROM absensi";
$result_absensi = mysqli_query($koneksi, $query_absensi);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

mysqli_close($koneksi);
?>
