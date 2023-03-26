<?php
// koneksi database
include "../config/database.php";

// ambil data yang di-post dari form modal
$bap_id = $_GET['bap_id'];
$jumlah_hadir = $_POST['jumlah_hadir'];
$id_karyawan = $_POST['id_karyawan'];
$nama_matakuliah = $_POST['nama_matakuliah'];
$tanggal = $_POST['tanggal'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$topik = $_POST['topik'];
$hasil_pembelajran = $_POST['hasil_pembelajran'];


// update data absensi
$query = "UPDATE absensi SET 
    jumlah_hadir='$jumlah_hadir',
    id_karyawan='$id_karyawan',
    nama_matakuliah='$nama_matakuliah',
    tanggal='$tanggal',
    jam_mulai='$jam_mulai',
    jam_selesai='$jam_selesai',
    topik='$topik',
    hasil_pembelajran='$hasil_pembelajran'
    WHERE bap_id='$bap_id'";

if (mysqli_query($koneksi, $query)) {
    // jika berhasil, kembalikan ke halaman sebelumnya
    echo "<script>alert('Data absensi berhasil diupdate.');window.location='../pages/dosen/_table-dosen.php';</script>";
} else {
    // jika gagal, tampilkan pesan error
    echo "<script>alert('Terjadi kesalahan saat mengupdate data absensi: " . mysqli_error($koneksi) . "');window.location='../pages/dosen/_table-dosen.php';</script>";
}
mysqli_close($koneksi);
