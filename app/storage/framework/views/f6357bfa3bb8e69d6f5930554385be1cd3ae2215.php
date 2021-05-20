<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<!--navigasi-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a class="navbar-brand">
        <img src="images/Green and Red Diagonal Lines Sports Logo.png" width="74" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/aktivitas')); ?>">Aktivitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/pemberitahuan')); ?>">Pemberitahuan</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="btn btn-login" href="#" role="button">Login</a>
            </li>
        </ul>
    </div>
  </div>
</nav>

<!--Halaman-->
<section class="tournament mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
              <div class="card" style="width: 15rem;">
                <img widht="150" src="images/icons8-tennis-player-90.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Tennis</h5>
                  <a href="<?php echo e(url('/permainan')); ?>" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
    </div>
            <div class="col">
              <div class="card" style="width: 15rem;">
                <img width="150" src="https://img.icons8.com/ios-glyphs/90/000000/badminton-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Badminton</h5>
                  <a href="<?php echo e(url('/permainan')); ?>" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
    </div>
</section>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html><?php /**PATH D:\RPL-RD6\app_laravel\resources\views/menu.blade.php ENDPATH**/ ?>