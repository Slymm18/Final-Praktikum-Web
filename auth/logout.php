<?php
session_start();

session_unset();
session_destroy();

// Hapus cookie jika ada
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/');
}
if (isset($_COOKIE['password'])) {
    setcookie('password', '', time() - 3600, '/');
}

// Redirect ke index utama (di root project)
header("Location: ../index.php");
exit;
?>
