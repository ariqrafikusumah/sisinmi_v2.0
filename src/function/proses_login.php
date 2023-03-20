<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/database.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];


// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah email dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['role'] == "admin") {

		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location: ../pages/admin/_dashboard-admin.php");

		// cek jika user login sebagai pegawai
	} else if ($data['role'] == "dosen") {
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "dosen";
		// alihkan ke halaman dashboard pegawai
		header("location: ../pages/dosen/_dashboard-dosen.php");

		// cek jika user login sebagai pengurus
	} else if ($data['role'] == "baak") {
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "baak";
		// alihkan ke halaman dashboard pengurus
		header("location:../pages/baak/_dashboard-baak.php");
	} else if ($data['role'] == "kaprodi") {
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "kaprodi";
		// alihkan ke halaman dashboard pegawai
		header("location:../pages/kaprodi/_dashboard-kaprodi.php");

		// cek jika user login sebagai pengurus
	} else {

		// alihkan ke halaman login kembali
		header("location: ../auth/_login.php?pesan=gagal");
	}
} else {
	header("location: ../auth/_login.php?pesan=gagal");
}
