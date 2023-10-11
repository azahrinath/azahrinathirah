<?php
session_start(); // Mulai atau lanjutkan sesi

// Inisialisasi variabel dengan nilai default
$name = "";
$datetime = "";
$people = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dapatkan data dari formulir
    $name = $_POST["name"];
    $datetime = $_POST["datetime"];
    $people = $_POST["people"];
    $message = $_POST["message"];

    // Simpan data dalam sesi
    $_SESSION["name"] = $name;
    $_SESSION["datetime"] = $datetime;
    $_SESSION["people"] = $people;
    $_SESSION["message"] = $message;
} else {
    // Jika tidak ada data baru yang dikirimkan, coba ambil data dari sesi jika ada
    if (isset($_SESSION["name"])) {
        $name = $_SESSION["name"];
    }
    if (isset($_SESSION["datetime"])) {
        $datetime = $_SESSION["datetime"];
    }
    if (isset($_SESSION["people"])) {
        $people = $_SESSION["people"];
    }
    if (isset($_SESSION["message"])) {
        $message = $_SESSION["message"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- ... (konten lainnya) ... -->

    <div id="order-result">
    <h3>Order Confirmation</h3><br>
    <table>
        <tr>
            <th>Name</th>
            <th>Date and Time</th>
            <th>How many people</th>
            <th>Message / Special Requirements</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $datetime; ?></td>
            <td><?php echo $people; ?></td>
            <td><?php echo $message; ?></td>
        </tr>
    </table>
</div>

    <!-- JavaScript untuk menampilkan hasil inputan -->
    <script>
        // Setelah halaman dimuat, tampilkan div dengan ID "order-result"
        window.addEventListener("load", function() {
            document.getElementById("order-result").style.display = "block";
        });
    </script>
</body>
</html>