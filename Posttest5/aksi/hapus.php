<?php
  // Memasukkan file koneksi.php untuk mengatur koneksi ke database
  require "../koneksi.php";

  // Mengambil ID pesanan yang akan dihapus dari URL
  $id = $_GET['id'];

  // Membuat kueri SQL untuk menghapus data pesanan berdasarkan ID
  $sql = "DELETE FROM pesanan WHERE id = '$id'";

  // Mengeksekusi kueri ke database
  $result = mysqli_query($koneksi, $sql);

  // Memeriksa apakah penghapusan data berhasil atau tidak
  if ($result) {
    echo "
        <script>
          alert('Data berhasil dihapus');
          document.location.href = '../halaman/order.php';
        </script>
      ";
  } else {
    echo "
        <script>
          alert('Data gagal dihapus');
          document.location.href = '../halaman/order.php';
        </script>
      ";
  }
?>
