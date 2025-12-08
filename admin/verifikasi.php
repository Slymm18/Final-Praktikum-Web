<?php
include "../config/database.php";

$id = $_GET['id'];

mysqli_query($connect, 
    "UPDATE booking SET status='Diterima' WHERE id='$id'"
);

header("Location: dashboard.php");
exit;
?>
