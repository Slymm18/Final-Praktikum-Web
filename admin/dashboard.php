<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit;
}

include "../config/database.php";

$booking = mysqli_query($connect, "SELECT * FROM booking ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR ADMIN -->
<nav class="navbar navbar-expand-lg bg-dark shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="dashboard.php">ADMIN PANEL</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <span class="nav-link text-white">
                    Admin: <b><?= $_SESSION['username']; ?></b>
                </span>
            </li>
            <li class="nav-item">
                <a class="nav-link text-warning fw-bold" href="../auth/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">

    <h3 class="fw-bold mb-4">Daftar Booking Rumah</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Unit</th>
                <th>Tanggal</th>
                <th>Metode</th>
                <th>DP</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php 
        $no = 1;
        while ($row = mysqli_fetch_assoc($booking)) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_lengkap']; ?></td>
                <td><?= $row['unit']; ?></td>
                <td><?= $row['tanggal']; ?></td>
                <td><?= $row['metode_pembelian']; ?></td>
                <td>Rp <?= number_format($row['dp']); ?></td>
                <td>
                    <?php if ($row['status'] == "Pending") { ?>
                        <span class="badge bg-warning">Pending</span>
                    <?php } elseif ($row['status'] == "Diterima") { ?>
                        <span class="badge bg-success">Diterima</span>
                    <?php } elseif ($row['status'] == "Ditolak") { ?>
                        <span class="badge bg-danger">Ditolak</span>
                    <?php } ?>
                </td>
                <td class="text-center">

                    <a href="detail.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">Detail</a>

                    <a href="verifikasi.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">Setujui</a>

                    <a href="tolak.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Tolak</a>

                    <a href="delete.php?id=<?= $row['id'] ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>

</div>

</body>
</html>
