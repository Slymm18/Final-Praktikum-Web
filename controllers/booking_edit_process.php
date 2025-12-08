<?php
include "../config/database.php";

$id = $_POST['id'];
$unit = $_POST['unit'];
$tanggal = $_POST['tanggal'];
$catatan = $_POST['catatan'];

mysqli_query($connect,
    "UPDATE booking SET 
     unit='$unit', 
     tanggal='$tanggal', 
     catatan='$catatan'
     WHERE id='$id'"
);

header("Location: ../user/dashboard.php");
exit;
?>
