<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun | Perumahan Arunika</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url('../assets/img/login.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .register-box {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 20px;
      padding: 40px 30px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      width: 350px;
    }
  </style>
</head>
<body>

<div class="register-box">
  <h3 class="text-center mb-4 text-primary">Daftar Akun Baru</h3>

  <form action="auth/proses_register.php" method="post">
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name="username" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Kata Sandi</label>
      <input type="password" class="form-control" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Daftar</button>

    <p class="text-center mt-3">
      Sudah punya akun?
      <a href="../index.php">Login</a>
    </p>
  </form>
</div>

</body>
</html>
