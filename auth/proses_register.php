<?php
include "../config/database.php";

$username = $_POST['username'];
$password = $_POST['password']; // sesuai permintaan kamu: tanpa hash

$query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')";
mysqli_query($connect, $query);

header("Location: login.php?registered=success");
exit;
?>
