<?php
$connect = mysqli_connect("localhost", "root", "", "db_rumah");

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
