<?php
// koneksi database
include "../config/database.php";

// ambil data yang di-post dari form modal
$absensi_id = $_GET['absensi_id'];
$npm = $_POST['npm'];
$kode_matakuliah = $_POST['kode_matakuliah'];
$tanggal = $_POST['tanggal'];
$jumlah_hadir = $_POST['jumlah_hadir'];
$nilai = $_POST['nilai'];
$nilai_bobot = $_POST['nilai_bobot'];


// update data absensi
$query = "UPDATE absensi SET 
    npm='$npm',
    kode_matakuliah='$kode_matakuliah',
    tanggal='$tanggal',
    jumlah_hadir='$jumlah_hadir',
    nilai='$nilai',
    nilai_bobot='$nilai_bobot'
    WHERE absensi_id='$absensi_id'";

if (mysqli_query($koneksi, $query)) {
    // jika berhasil, kembalikan ke halaman sebelumnya
    echo "<script>alert('Data absensi berhasil diupdate.');window.location='../pages/baak/_table-baak.php';</script>";
} else {
    // jika gagal, tampilkan pesan error
    echo "<script>alert('Terjadi kesalahan saat mengupdate data absensi: " . mysqli_error($koneksi) . "');window.location='../pages/baak/_table-baak.php';</script>";
}
mysqli_close($koneksi);
