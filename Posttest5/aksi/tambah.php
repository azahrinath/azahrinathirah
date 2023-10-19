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

    // Membuat kueri SQL untuk menambahkan data pesanan baru ke database
    $sql = "INSERT INTO pesanan (name, datetime, quantity, address, message) VALUES ('$name', '$datetime', '$quantity', '$address', '$message')";

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
?>
