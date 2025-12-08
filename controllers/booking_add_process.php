<?php
session_start();
include "../config/database.php";

$user_id = $_SESSION['user_id'];

$nama = $_POST['nama_lengkap'];
$ktp = $_POST['no_ktp'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$unit = $_POST['unit'];
$tanggal = $_POST['tanggal'];
$metode = $_POST['metode_pembelian'];
$dp = $_POST['dp'];
$jenis_pembayaran = $_POST['jenis_pembayaran'];
$catatan = $_POST['catatan'];

$bukti = "";

// Upload bukti transfer jika ada
if (!empty($_FILES['bukti_transfer']['name'])) {
    $file_name = time() . "_" . $_FILES['bukti_transfer']['name'];
    $file_tmp = $_FILES['bukti_transfer']['tmp_name'];

    move_uploaded_file($file_tmp, "../assets/bukti/" . $file_name);
    $bukti = $file_name;
}

// Simpan ke tabel booking
mysqli_query($connect,
    "INSERT INTO booking 
    (user_id, nama_lengkap, no_ktp, telepon, email, alamat, 
     unit, tanggal, metode_pembelian, dp, jenis_pembayaran, bukti_transfer, catatan)
     VALUES 
    ('$user_id', '$nama', '$ktp', '$telepon', '$email', '$alamat',
     '$unit', '$tanggal', '$metode', '$dp', '$jenis_pembayaran', '$bukti', '$catatan')"
);

header("Location: ../user/dashboard.php");
exit;
?>
