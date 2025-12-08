<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: index.php"); exit; }

include "../config/database.php";
include "components/navbar.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM booking WHERE id='$id'"));
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <h3 class="fw-bold mt-4">Edit Booking</h3>

  <form action="../controllers/booking_edit_process.php" method="post">

    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <div class="mb-3">
      <label class="form-label">Unit</label>
      <input type="text" name="unit" class="form-control" value="<?= $data['unit']; ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal</label>
      <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal']; ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Catatan</label>
      <textarea name="catatan" class="form-control"><?= $data['catatan']; ?></textarea>
    </div>

    <button class="btn btn-primary">Update</button>
  </form>

</div>

</body>
</html>
