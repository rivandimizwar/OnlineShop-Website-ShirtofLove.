<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShirtofLove</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/page-style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <header>
      <nav class="navbar">
        <a href="#" class="navbar-logo">Shirtof<span>Love</span>.</a>
        <div class="navbar-nav">
          <a href="#home">Home</a>
          <a href="#about">Tentang Kami</a>
          <a href="#produk">Produk</a>
          <a href="#contact">Kontak</a>
        </div>
        <div class="navbar-extra">
          <a href="#" id="search"><i data-feather="search"></i></a>
          <a href="#" id="shopping-cart"
            ><i data-feather="shopping-cart"></i
          ></a>
          <a href="#" id="menu"><i data-feather="menu"></i></a>
          <a href="#" id="login"><i data-feather="user"></i></a>
        </div>
      </nav>
    </header>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Tentukan <span>Gaya</span> Dirimu Yang Sesungguhnya</h1>
        <p>
          Selamat datang di ShirtofLove, platform fashion online terdepan yang
          didedikasikan untuk membantu Anda menemukan gaya diri sendiri yang
          sesungguhnya. Dengan beragam fitur interaktif dan intuitif, menawarkan
          pengalaman belanja yang unik dan personal.
        </p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang-kami.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa pakaian kami merupakan pilihan yang tepat?</h3>
          <p>
            Galeri Inspirasi kami menampilkan berbagai gaya fashion dari seluruh
            dunia, memungkinkan Anda untuk mengeksplorasi dan menemukan
            inspirasi gaya yang sesuai dengan kepribadian Anda. Dari gaya kasual
            hingga formal, vintage hingga modern, kami memiliki semuanya.
          </p>
          <p>
            Fitur Mix & Match kami memungkinkan Anda untuk mencoba berbagai
            kombinasi pakaian dan aksesori secara virtual, membantu Anda
            menemukan kombinasi yang sempurna yang mencerminkan gaya Anda.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Produk Section start -->
    <section id="produk" class="produk">
      <h2><span>Produk</span> Kami</h2>
      <p>
        Kami juga menawarkan Konsultasi Gaya Personal dengan tim stylist
        profesional kami. Mereka siap membantu Anda menavigasi dunia fashion dan
        menemukan gaya yang paling mewakili diri Anda.
      </p>

      <div class="row">
        <div class="produk-card">
          <img src="img/produk/gaun.jpg" alt="Gaun" class="produk-card-img" />
          <h3 class="produk-card-title">Gaun</h3>
        </div>
        <div class="produk-card">
          <img src="img/produk/jaket.jpg" alt="Jaket" class="produk-card-img" />
          <h3 class="produk-card-title">Jaket</h3>
        </div>
        <div class="produk-card">
          <img
            src="img/produk/kacamata.jpg"
            alt="Kacamata"
            class="produk-card-img"
          />
          <h3 class="produk-card-title">Kacamata</h3>
        </div>
        <div class="produk-card">
          <img src="img/produk/kaos.jpg" alt="Kaos" class="produk-card-img" />
          <h3 class="produk-card-title">Kaos</h3>
        </div>
        <div class="produk-card">
          <img
            src="img/produk/streetwear.jpg"
            alt="Streetwear"
            class="produk-card-img"
          />
          <h3 class="produk-card-title">Streetwear</h3>
        </div>
        <div class="produk-card">
          <img src="img/produk/jas.jpg" alt="Jas" class="produk-card-img" />
          <h3 class="produk-card-title">Jas</h3>
        </div>
      </div>
    </section>
    <!-- Produk Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Dengan mengklik tombol Hubungi Kami, Anda akan diarahkan ke formulir
        kontak yang mudah digunakan. Di sini, Anda dapat menulis pesan Anda,
        baik itu pertanyaan, umpan balik, atau laporan masalah, dan tim kami
        akan merespons dalam waktu 24 jam.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126907.08080630552!2d106.71967643963379!3d-6.28392946145947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ec2422b0b3%3A0x39a0d0fe47404d02!2sJakarta%20Selatan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1705080312454!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="process_contact.php" method="post">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" name="nama" placeholder="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" name="email" placeholder="E-Mail" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" name="no_hp" placeholder="No HP" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
      <div class="social">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#produk">Produk</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">rivandimizwar</a> . | &copy;2024.</p>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Login Icons -->
    <script>
      document.getElementById("login").addEventListener("click", function () {
        // Ganti dengan logika atau fungsi untuk mengarahkan ke halaman login
        window.location.href = "login.php";
      });
    </script>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascipt -->
    <script src="js/script.js"></script>
  </body>
</html>
