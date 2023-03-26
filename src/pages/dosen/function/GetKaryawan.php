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
    $id_karyawan = $_POST['id_karyawan'];
    $query = "INSERT INTO berita_acara (id_karyawan) VALUES ('$id_karyawan')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        ?><script>alert("User berhasil ditambahkan!");</script><?php
    } else {
        ?><script>alert("User gagal ditambahkan!");</script><?php
    }
}

$query_karyawan = "SELECT id_karyawan, nama_lengkap FROM karyawan";
$result_karyawan = mysqli_query($koneksi, $query_karyawan);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

mysqli_close($koneksi);
?>
