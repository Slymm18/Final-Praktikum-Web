<?php
session_start();

// Jika user belum login, paksa kembali ke login.php
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] == "") {
    header("Location: index.php");
    exit;
}
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perumahan Arunika | Nyaman dan Modern</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="#">Perumahan Arunika</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#rooms">Unit</a></li>
        <li class="nav-item"><a class="nav-link" href="#facilities">Fasilitas</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
        <li><a class="nav-link" href="booking-add.php" class="btn btn-warning mb-3">Beli</a></li>
        <li><a class="nav-link" href="../auth/logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero d-flex align-items-center text-center text-white">
    <video autoplay muted loop id="video-bg">
      <source src="../assets/img/video-bg.mp4" type="video/mp4">
    </video>
    <div class="container content-overlay">
      <h1 class="display-4 fw-bold">Selamat Datang di Perumahan Arunika</h1>
      <p class="lead">Tempat terbaik untuk beristirahat dan menikmati kenyamanan.</p>
      <a href="#rooms" class="btn btn-warning mt-3">Lihat Kamar</a>
    </div>
  </section>

<!-- About -->
<section id="about" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-3 mb-md-0">
        <img src="../assets/img/dena.jpg" class="img-fluid rounded" alt="Hotel">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold">Tentang Perumahan Arunika</h2>
        <p>Perumahan Arunika menawarkan pengalaman menginap yang modern dan nyaman dengan layanan ramah dan fasilitas lengkap. Lokasi kami strategis di pusat kota, cocok untuk wisata maupun perjalanan bisnis.</p>
        <ul>
          <li>150+ rumah modern</li>
          <li>Restoran & kolam renang</li>
          <li>Layanan 24 jam</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Rooms -->
<section id="rooms" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Find Your Perfect Pleace</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <a href="../page/unit A1.html" style="text-decoration:none; color:inherit;">
          <div class="card h-100 shadow-sm">
            <img src="../assets/img/Unit A1.jpeg" class="card-img-top" alt="Kamar Deluxe">
            <div class="card-body">
              <h5 class="card-title">Unit A1</h5>
              <p class="card-text">Tempat tidur king size, AC, TV, dan pemandangan kota.</p>
            </div>
            <div class="card-footer bg-white">
              <strong>DP | Rp 700.000</strong>
            </div>
          </div>
        </a>
      </div>
    
      <div class="col-md-4">
        <a href="../page/unit A2.html" style="text-decoration:none; color:inherit;">
          <div class="card h-100 shadow-sm">
            <img src="../assets/img/Unit A2.jpeg" class="card-img-top" alt="Suite Premium">
            <div class="card-body">
              <h5 class="card-title">Unit A2</h5>
              <p class="card-text">Ruang tamu terpisah, minibar, dan layanan kamar eksklusif.</p>
            </div>
            <div class="card-footer bg-white">
              <strong>DP | Rp 1.200.000</strong>
            </div>
          </div>
        </a>
      </div>
    
      <div class="col-md-4">
        <a href="../page/unit A3.html   " style="text-decoration:none; color:inherit;">
          <div class="card h-100 shadow-sm">
            <img src="../assets/img/Unit A3.jpeg" class="card-img-top" alt="Standard Room">
            <div class="card-body">
              <h5 class="card-title">Unit A3</h5>
              <p class="card-text">Nyaman dan bersih, cocok untuk perjalanan singkat.</p>
            </div>
            <div class="card-footer bg-white">
              <strong>DP | Rp 500.000</strong>
            </div>
          </div>
        </a>
      </div>
    </div>    
</section>

<!-- Facilities -->
<section id="facilities" class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Fasilitas Kami</h2>
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="p-3 border rounded shadow-sm">Kolam Renang</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-3 border rounded shadow-sm">Restoran</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-3 border rounded shadow-sm">Gym</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-3 border rounded shadow-sm">Wi-Fi Gratis</div>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-3 mb-md-0">
        <h2 class="fw-bold">Hubungi Kami</h2>
        <p>Jika Anda ingin melakukan pemesanan atau memiliki pertanyaan, silakan isi formulir atau hubungi kontak berikut.</p>
        <ul class="list-unstyled">
          <li><strong>Telepon:</strong> 0411-123-456</li>
          <li><strong>WhatsApp:</strong> +62 812-3456-7890</li>
          <li><strong>Email:</strong> info@hotelarunika.com</li>
        </ul>
      </div>
      <div class="col-md-6">
        <form class="p-4 border rounded bg-white">
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Pesan</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-3 bg-dark text-white text-center">
  <p class="mb-0">© 2025 Hotel Arunika. Semua Hak Cipta Dilindungi.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
