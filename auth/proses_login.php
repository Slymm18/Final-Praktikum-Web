<?php
session_start();
include "../config/database.php";

$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($cek);

// Jika user ditemukan
if ($data) {

    $_SESSION['user_id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    // CEK ROLE
    if ($data['role'] === "admin") {
        header("Location: ../admin/dashboard.php");
        exit;
    } else {
        header("Location: ../user/dashboard.php");
        exit;
    }

} else {
    header("Location: login.php?error=1");
    exit;
}
?>
