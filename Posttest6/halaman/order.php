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
  <title>Order</title>

  <!-- Merujuk ke file CSS eksternal untuk gaya tampilan -->
  <link rel="stylesheet" href="../order.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <div class="head">
        <h2 style="color: #e87732;" align="center" >Place an Order</h2>
        <div class="title" style="display: flex; justify-content: center;">
        <p class="right-align">
        <?php 
          $hari = array(
            "Wednesday" => "Rabu"
          );
          date_default_timezone_set("Asia/Makassar");
          echo $hari[date("l")]. date(", d F Y, H:i:s");
        ?>
      </p>
      </div>
      </div>
      <div class="table-box">
        <table>
          <tr>
            <td class="">No</td>
            <td class="">Name</td>
            <td class="">DateTime</td>
            <td class="">Quantity</td>
            <td class="">Address</td>
            <td class="">Message</td>
            <td class="">Foto</td>
            <td class="">Action</td>
          </tr>

          <?php
          // Mengambil data pesanan dari database
          $query = mysqli_query($koneksi, "SELECT * FROM pesanan");
          $no = 1;

          while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$row[name]</td>";
            echo "<td>$row[datetime]</td>";
            echo "<td>$row[quantity]</td>";
            echo "<td>$row[address]</td>";
            echo "<td>$row[message]</td>";
            echo "<td>
            <img
              src = '../databaseImages/$row[foto]' 
              class = 'gambar-cover'
              alt = 'Gambar'
            >
          </td>";
            echo "<td class='action'>
            <a href='../halaman/ubah.php?id=$row[id]' class='ubah'><img src='ubah.jpg'></a>
            <a href='../aksi/hapus.php?id=$row[id]' class='hapus'><img src='hapus.jpg'></a>
            </td>";
            echo "</tr>";
            $no++;
          }
          ?>

        </table>
        <div class="tombol">
          <a href="tambah.php">Add Order</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>