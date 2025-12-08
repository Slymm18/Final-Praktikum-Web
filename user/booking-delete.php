<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: ../auth/login.php"); exit; }

include "../config/database.php";

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM booking WHERE id='$id'");

header("Location: dashboard.php");
exit;
?>
