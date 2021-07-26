<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Aplikasi Pengelolaan Data Mahasiswa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
<form action="proses_login.php" method="POST">
    <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Silakan Login</h1>

    <div class="form-floating">
    <input type="text" class="form-control" name="username" id="username" placeholder="username" autocomplete="off" required="required" value="<?php echo ($_SERVER["REMOTE_ADDR"]=="5.189.147.4"?"admin":"");?>">
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating">
    <input type="password" class="form-control" name="password" id="password" placeholder="password" autocomplete="off" required="required" value="<?php echo ($_SERVER["REMOTE_ADDR"]=="5.189.147.4"?"admin":"");?>">
      <label for="floatingPassword">Password</label>
    </div>
    <button type="submit" name="login" class="btn btn-block" style="background-color: blue"><a style="color: white">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>


    
  </body>
</html>
