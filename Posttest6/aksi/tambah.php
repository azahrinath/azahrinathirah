<?php
  // Memasukkan file koneksi.php untuk mengatur koneksi ke database
  require "../koneksi.php";

  // Memeriksa apakah formulir tambah pesanan telah dikirim
  if (isset($_POST["tambah"])) {
    // Mengambil data yang dikirim melalui formulir
    $name = $_POST["name"];
    $datetime = $_POST["datetime"];
    $quantity = $_POST["quantity"];
    $address = $_POST["address"];
    $message = $_POST["message"];

    // Mengambil informasi tentang file gambar yang diunggah
    $gambar = $_FILES["foto"]["name"];
    $tmp = $_FILES["foto"]["tmp_name"];
    
    // Membuat nama baru untuk file gambar dengan UUID (atau ID pesanan jika Anda punya ID pesanan)
    $gambarBaru = uniqid() . '_' . $gambar;

    // Mendefinisikan path tujuan untuk menyimpan file gambar
    $tujuan = '../databaseImages/' . $gambarBaru;

    // Mengecek apakah gambar berhasil diunggah
    if (move_uploaded_file($tmp, $tujuan)) {
      // Membuat kueri SQL untuk menambahkan data pesanan baru ke database
      $sql = "INSERT INTO pesanan (name, datetime, quantity, address, message, foto) VALUES (
        '$name',
        '$datetime',
        '$quantity',
        '$address',
        '$message',
        '$gambarBaru'
      )";

      // Mengeksekusi kueri ke database
      $result = mysqli_query($koneksi, $sql);

      // Memeriksa apakah penambahan data berhasil atau tidak
      if ($result) {
        echo "
          <script>
            alert('Data berhasil ditambah');
            document.location.href = '../halaman/order.php';
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Data gagal ditambah');
            document.location.href = '../halaman/order.php';
          </script>
        ";
      }
    }
  }
?>
