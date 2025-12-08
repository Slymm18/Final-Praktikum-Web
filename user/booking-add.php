<?php
session_start();
if (!isset($_SESSION['user_id'])) { 
    header("Location: ../auth/index.php"); 
    exit; 
}

$unit = isset($_GET['unit']) ? $_GET['unit'] : "";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Booking Rumah Lengkap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2 class="fw-bold mb-4">Form Booking Rumah</h2>

<form action="../controllers/booking_add_process.php" method="post" enctype="multipart/form-data">

  <!-- DATA DIRI PEMBELI -->
  <h5 class="fw-bold mt-3">Data Diri Pembeli</h5>
  <div class="mb-3">
    <label class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama_lengkap" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Nomor KTP</label>
    <input type="text" class="form-control" name="no_ktp" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Nomor WhatsApp / Telepon</label>
    <input type="text" class="form-control" name="telepon" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>

  <div class="mb-3">
    <label class="form-label">Alamat Domisili</label>
    <textarea class="form-control" name="alamat" rows="3" required></textarea>
  </div>


  <!-- DATA PEMESANAN -->
  <h5 class="fw-bold mt-3">Data Pemesanan Rumah</h5>

  <div class="mb-3">
    <label class="form-label">Unit Rumah</label>
    <input type="text" class="form-control" name="unit" value="<?= $unit ?>" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Tanggal Booking</label>
    <input type="date" class="form-control" name="tanggal" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Metode Pembelian</label>
    <select class="form-select" name="metode_pembelian" required>
      <option value="Cash">Cash</option>
      <option value="KPR">KPR</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Jumlah DP (Rp)</label>
    <input type="number" class="form-control" name="dp" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Jenis Pembayaran DP</label>
    <select class="form-select" name="jenis_pembayaran" required>
      <option value="Transfer Bank">Transfer Bank</option>
      <option value="Tunai">Tunai</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Upload Bukti Transfer (Opsional)</label>
    <input type="file" class="form-control" name="bukti_transfer">
  </div>


  <!-- DATA TAMBAHAN -->
  <h5 class="fw-bold mt-3">Catatan Tambahan</h5>
  <div class="mb-3">
    <textarea class="form-control" name="catatan" rows="3" placeholder="Catatan tambahan..."></textarea>
  </div>


  <button type="submit" class="btn btn-primary mt-3">Simpan Booking</button>
  <a href="dashboard.php" class="btn btn-secondary mt-3">Kembali</a>

</form>

</body>
</html>
