<?php
include "../config/database.php";

$id = $_GET['id'];

mysqli_query($connect, 
    "UPDATE booking SET status='Ditolak' WHERE id='$id'"
);

header("Location: dashboard.php");
exit;
?>
