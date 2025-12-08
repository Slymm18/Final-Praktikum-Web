<?php
if (!isset($_SESSION)) { session_start(); }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" href="dashboard.php">Perumahan Arunika</a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <span class="nav-link text-white">
            Selamat datang, <strong><?php echo $_SESSION['username']; ?></strong>
          </span>
        </li>

        <li class="nav-item">
          <a class="nav-link text-warning fw-bold" href="../auth/logout.php">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
