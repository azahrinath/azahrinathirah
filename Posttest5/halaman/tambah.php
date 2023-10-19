<?php
  // Memasukkan file koneksi.php untuk mengatur koneksi ke database
  require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>

  <!-- Merujuk ke file CSS eksternal untuk gaya tampilan -->
  <link rel="stylesheet" href="../crud.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <!-- Formulir untuk menambahkan pesanan baru -->
      <form action="../aksi/tambah.php" method="POST" enctype="multipart/form-data">
        <!-- Judul form -->
        <h3 style="color: #f1bf9f;">Add Order</h3>

        <!-- Input untuk "Name" dengan placeholder -->
        <div class="inputBox">
          <label for="">Name</label>
          <input type="text" name="name" placeholder="Arin" required>
        </div>

        <!-- Input untuk "DateTime" dengan placeholder -->
        <div class="inputBox">
          <label for="">DateTime</label>
          <input type="datetime-local" name="datetime" placeholder="2023-10-19T12:00" required>
        </div>

        <!-- Input untuk "Quantity" dengan placeholder -->
        <div class="inputBox">
          <label for="">Quantity</label>
          <input type="number" name="quantity" placeholder="2" required>
        </div>

        <!-- Input untuk "Address" dengan placeholder -->
        <div class="inputBox">
          <label for="">Address</label>
          <input type="text" name="address" placeholder="Jl.Perjuangan" required>
        </div>

        <!-- Input untuk "Message" tanpa placeholder -->
        <div class="inputBox">
          <label for="">Message</label>
          <input type="text" name="message" required>
        </div>

        <!-- Tombol "Add" untuk mengirim data pesanan baru -->
        <input type="submit" value="Add" name="tambah">

        <!-- Hyperlink untuk kembali ke halaman pesanan -->
        <a href="../halaman/order.php">back</a>
      </form>
    </div>
  </div>
</body>

</html>
