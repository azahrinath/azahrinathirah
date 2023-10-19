<?php
  // Konfigurasi koneksi ke database
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "catering";

  // Membuat koneksi ke database
  $koneksi = mysqli_connect($server, $username, $password, $database);

  // Memeriksa apakah koneksi berhasil
  if (!$koneksi) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
  }
?>
