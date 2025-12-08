<?php
include "../config/database.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($connect, "SELECT * FROM booking WHERE id='$id'")
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h3 class="fw-bold mb-3">Detail Booking Rumah</h3>

<table class="table table-bordered">

<tr><th>Nama Pembeli</th><td><?= $data['nama_lengkap']; ?></td></tr>
<tr><th>No KTP</th><td><?= $data['no_ktp']; ?></td></tr>
<tr><th>Telepon</th><td><?= $data['telepon']; ?></td></tr>
<tr><th>Email</th><td><?= $data['email']; ?></td></tr>
<tr><th>Alamat</th><td><?= $data['alamat']; ?></td></tr>

<tr><th>Unit Rumah</th><td><?= $data['unit']; ?></td></tr>
<tr><th>Tanggal Booking</th><td><?= $data['tanggal']; ?></td></tr>
<tr><th>Metode Pembelian</th><td><?= $data['metode_pembelian']; ?></td></tr>
<tr><th>DP</th><td>Rp <?= number_format($data['dp']); ?></td></tr>
<tr><th>Jenis Pembayaran DP</th><td><?= $data['jenis_pembayaran']; ?></td></tr>

<tr><th>Bukti Transfer</th>
<td>
<?php if ($data['bukti_transfer'] != "") { ?>
    <img src="../assets/bukti/<?= $data['bukti_transfer']; ?>" width="300">
<?php } else { echo "Tidak ada bukti"; } ?>
</td>
</tr>

<tr><th>Catatan</th><td><?= $data['catatan']; ?></td></tr>
<tr><th>Status</th><td><?= $data['status']; ?></td></tr>

</table>

<a href="dashboard.php" class="btn btn-secondary mt-3">Kembali</a>

</body>
</html>
