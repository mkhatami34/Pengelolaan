<?php
$base_url = "http://localhost/pengelolaan/" 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Pengelolaan Data Siswa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Pengelolaan Data</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
        <a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= $base_url ?>admin/dashboard.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?= $active == 'datasiswa' ? 'active' : '' ?>" href="<?= $base_url ?>admin/datasiswa.php">Data Siswa</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?= $active == 'datakelas' ? 'active' : '' ?>" href="<?= $base_url ?>admin/datakelas.php">Data Kelas</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?= $active == 'logout' ? 'active' : '' ?>" href="<?= $base_url ?>admin/logout.php">Logout</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>




    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
