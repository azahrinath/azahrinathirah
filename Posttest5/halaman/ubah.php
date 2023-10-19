<?php
  // Memasukkan file koneksi.php untuk mengatur koneksi ke database
  require "../koneksi.php";

  // Mengambil nilai "id" dari URL
  $id = $_GET["id"];

  // Membuat kueri SQL untuk mengambil data pesanan berdasarkan ID
  $sql = "SELECT * FROM pesanan WHERE id=$id";

  // Mengeksekusi kueri ke database
  $query = mysqli_query($koneksi, $sql);

  // Mengambil data hasil kueri dalam bentuk array asosiatif
  $row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>

  <!-- Merujuk ke file CSS eksternal untuk gaya tampilan -->
  <link rel="stylesheet" href="../crud.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <!-- Formulir untuk mengubah data pesanan -->
      <form action="../aksi/ubah.php?id=<?php echo $row["id"] ?>" method="POST" enctype="multipart/form-data">
        <!-- Judul form -->
        <h3 style="color: #f1bf9f;">Change order</h3>

        <!-- Input untuk "Name" -->
        <div class="inputBox">
          <label for="">Name</label>
          <input type="text" name="name" value="<?php echo $row["name"] ?>" required>
        </div>

        <!-- Input untuk "DateTime" -->
        <div class="inputBox">
          <label for="">DateTime</label>
          <input type="datetime-local" name="datetime" value="<?php echo $row["datetime"] ?>" required>
        </div>

        <!-- Input untuk "Quantity" -->
        <div class="inputBox">
          <label for="">Quantity</label>
          <input type="number" name="quantity" value="<?php echo $row["quantity"] ?>" required>
        </div>

        <!-- Input untuk "Address" -->
        <div class="inputBox">
          <label for="">Address</label>
          <input type="text" name="address" value="<?php echo $row["address"] ?>" required>
        </div>

        <!-- Input untuk "Message" -->
        <div class="inputBox">
          <label for="">Message</label>
          <input type="text" name="message" value="<?php echo $row["message"] ?>" required>
        </div>

        <!-- Tombol "Change" untuk mengirim data perubahan -->
        <input type="submit" value="Change" name="ubah">

        <!-- Hyperlink untuk kembali ke halaman pesanan -->
        <a href="../halaman/order.php">back</a>
      </form>
    </div>
  </div>
</body>

</html>
