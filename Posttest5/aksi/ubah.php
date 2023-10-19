<?php
  // Memasukkan file koneksi.php untuk mengatur koneksi ke database
  require "../koneksi.php";

  // Memeriksa apakah formulir ubah telah dikirim
  if (isset($_POST["ubah"])) {
    // Mengambil ID pesanan dari URL
    $id = $_GET["id"];
    
    // Mengambil data yang dikirim melalui formulir
    $name = $_POST["name"];
    $datetime = $_POST["datetime"];
    $quantity = $_POST["quantity"];
    $address = $_POST["address"];
    $message = $_POST["message"];

    // Membuat kueri SQL untuk memperbarui data pesanan
    $sql = "UPDATE pesanan SET 
      name = '$name',
      datetime = '$datetime',
      quantity = '$quantity',
      address = '$address',
      message = '$message'
      WHERE id = '$id'
    ";

    // Mengeksekusi kueri ke database
    $result = mysqli_query($koneksi, $sql);

    // Memeriksa apakah perubahan berhasil atau tidak
    if ($result) {
      echo "
          <script>
            alert('Data berhasil diubah');
            document.location.href = '../halaman/order.php';
          </script>
        ";
    } else {
      echo "
        <script>
          alert('Data gagal diubah');
          document.location.href = '../halaman/order.php';
        </script>
        ";
    }
  }
?>