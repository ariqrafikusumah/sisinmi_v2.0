<?php
session_start();
include('../config/database.php'); // menghubungkan ke file koneksi.php

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) == 1) { // jika data ditemukan
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['role'] = $row['role'];

    if ($_SESSION['role'] == 'admin') { // jika login sebagai admin
      header('location: ../admin/_dashboard-admin.php');
    } else if ($_SESSION['role'] == 'dosen') { // jika login sebagai dosen
      header('location: ../admin/_dashboard-dosen.php');
    } elseif ($_SESSION['role'] == 'baak') { // jika login sebagai baak
      header('location: ../admin/_dashboard-baak.php');
    } elseif ($_SESSION['role'] == 'kaprodi') { // jika login sebagai kaprodi
      header('location: ../admin/_dashboard-kaprodi.php');
    } else{ // jika login sebagai user
      header('location: form_login.php');
    }
  } else { // jika data tidak ditemukan
    echo "email atau password salah.";
  }
} else {
  echo "email dan password tidak boleh kosong.";
}

?>