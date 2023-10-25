<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Savory Catering</title>
</head>
<body>
    <header>
        <!-- Tampilan Navbar -->
        <nav>
            <div class="container">
                <h1>Savory Catering</h1>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="aboutme.html">About Me</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="halaman/order.php">Order</a></li>
                     <!-- Tombol Mode Gelap -->
                     <li><button id="mode-gelap-toggle">Mode</button></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Tampilan Home -->
    <section id="home" class="hero">
        <div class="container">  
            <div class="logo">
                <img src="logo.png" alt="Logo Savory Catering">
            </div>
            <h2>Welcome to Savory Catering</h2>
            <p>Enjoy our delicious dishes for your every special occasion.</p>
            <a href="#menu" class="btn">Lihat Menu</a>
        </div>
        
    </div>
    </section>
  

    <!-- Tampilan Daftar Menu Makanan -->
    <section id="menu" class="menu">
        <div class="container">
            <h2>Our Menu</h2>
            <div class="menu-items">
                <!-- Menu 1 -->
                <div class="menu-item">
                    <img src="breakfast.png" alt="Menu 1">
                    <h3>Breakfast</h3>
                </div>
                
                <!-- Menu 2 -->
                <div class="menu-item">
                    <img src="lunch.png" alt="Menu 2">
                    <h3>Lunch</h3>
                </div>
                
                <!-- Menu 3 -->
                <div class="menu-item">
                    <img src="dinner.png" alt="Menu 3">
                    <h3>Dinner</h3>
                </div>
                
                <!-- Menu 4 -->
                <div class="menu-item">
                    <img src="dessert.png" alt="Menu 4">
                    <h3>Dessert</h3>
                </div>  
            </div>
        </div>
    </section>

    <!-- Tampilan Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Our Contact</h2>
            <p>Silakan hubungi kami untuk pemesanan atau informasi lebih lanjut.</p>
            <a href="mailto:azahrinathiraha051@gmail.com" class="btn">Email Kami</a>
        </div>
    </section>

    <!-- Pop-up Box Alert -->
    <div id="alert-box" class="alert">
        <p>Mode Gelap Aktif!</p>
    </div>

    <!-- Tampilan Hak Cipta  -->
    <footer>
        <div class="container">
            <p>&copy; 2023 Savory Catering. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
    // Mode Gelap
    const tombolModeGelap = document.getElementById('mode-gelap-toggle');
    const body = document.body;
    const alertBox = document.getElementById('alert-box');

    // Fungsi untuk mengaktifkan atau menonaktifkan mode gelap
    function aktifkanModeGelap() {
        body.classList.toggle('mode-gelap');

        // Tampilkan pop-up box alert ketika mode gelap aktif
        if (body.classList.contains('mode-gelap')) {
            alertBox.style.display = 'block';

            // Sembunyikan pop-up box setelah beberapa detik
            setTimeout(function() {
                alertBox.style.display = 'none';
            }, 1000); // Pop-up box akan hilang setelah 3 detik
        }
    }

    // Event listener untuk tombol pengalihan mode gelap
    tombolModeGelap.addEventListener('click', aktifkanModeGelap);

    // Event listener untuk tombol Menu item
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(function(menuItem) {
        menuItem.addEventListener('click', function() {

            // Tambahkan tindakan yang sesuai ketika salah satu menu makanan diklik
            alert('Sebuah item menu diklik.');
        });
    });

    // Event listener untuk tombol "About Me" di navbar
    const tombolAboutMe = document.querySelector('nav li:nth-child(2) a');

    tombolAboutMe.addEventListener('click', function(e) {
        e.preventDefault(); // Mencegah perpindahan halaman default

        // Menampilkan konfirmasi dengan tombol "Oke" dan "Batal"
        const konfirmasi = confirm('Apakah Anda ingin melihat "About Me"?');

        if (konfirmasi) {
            // Jika pengguna mengklik "Oke," pindah ke halaman "aboutme.html"
            window.location.href = 'aboutme.html';
        } else {
            // Jika pengguna mengklik "Batal," tidak ada tindakan tambahan
            alert('Anda membatalkan untuk melihat "About Me".');
        }
    });

    </script>

</body>
</html>