<?php
session_start();
include('../config/database.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($email) && !empty($password)) {
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['role'] = $row['role'];

      if ($_SESSION['role'] == 'admin') {
        header('location: ../pages/admin/_dashboard-admin.php');
      } else if ($_SESSION['role'] == 'dosen') {
        header('location: ../pages/admin/_dashboard-dosen.php');
      } else if ($_SESSION['role'] == 'baak') {
        header('location: ../pages/admin/_dashboard-baak.php');
      } else if ($_SESSION['role'] == 'kaprodi') {
        header('location: ../pages/admin/_dashboard-kaprodi.php');
      } else {
        header('location: index.php');
      }
    } else {
      echo "Email dan password tidak ditemukan.";
    }
  } else {
    echo "Email dan password tidak boleh kosong.";
  }
}
?>
