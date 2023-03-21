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
    $npm = $_POST['npm'];
    $query = "INSERT INTO absensi (npm) VALUES ('$npm')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        ?><script>alert("User berhasil ditambahkan!");</script><?php
    } else {
        ?><script>alert("User gagal ditambahkan!");</script><?php
    }
}

$query_mahasiswa = "SELECT npm, nama_lengkap FROM mahasiswa";
$result_mahasiswa = mysqli_query($koneksi, $query_mahasiswa);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

mysqli_close($koneksi);
?>
