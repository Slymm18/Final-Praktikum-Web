<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Perumahan Arunika</title>
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

    .login-box {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 20px;
      padding: 40px 30px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      width: 350px;
    }

    /* Tombol biru seperti tombol daftar */
    .btn-login {
      background: #0d6efd;
      color: white;
      width: 100%;
      border-radius: 10px;
    }

    .btn-login:hover {
      background: #0b5ed7;
    }
  </style>
</head>

<body>

  <div class="login-box">
    <h2 class="text-center text-primary mb-4">Login Perumahan Arunika</h2>

    <form action="auth/proses_login.php" method="post">

      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" name="password" required>
      </div>

      <button type="submit" class="btn btn-login mt-3">Masuk</button>

    </form>

    <p class="text-center mt-3">
      Belum punya akun?
      <a href="auth/register.php" class="text-primary fw-bold">Daftar Akun</a>
    </p>
  </div>

</body>
</html>
