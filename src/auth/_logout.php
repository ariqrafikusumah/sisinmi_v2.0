<?php 
 
session_start();
session_destroy();
 
header("Location: ../../index.php?alert=logout&pesan=Berhasil-logout");
 
?>