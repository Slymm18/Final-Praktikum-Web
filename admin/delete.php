<?php
include "../config/database.php";

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM booking WHERE id='$id'");

header("Location: dashboard.php");
exit;
?>
