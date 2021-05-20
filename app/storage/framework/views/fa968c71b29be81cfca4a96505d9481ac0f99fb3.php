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
            <a class="nav-link active" aria-current="page" href="<?php echo e(url('/pemberitahuan')); ?>">Pemberitahuan</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <div class="dropdown">
  <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <a class="btn" href="#"><img src="images/user.png" width="35" alt=""></a>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="<?php echo e(url('/login')); ?>">Profil</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Log Out</a></li>
  </ul>
</div>
            </li>
        </ul>
    </div>
  </div>
</nav>

<!--Halaman-->
<section class="tournament mt-5">
    <div class="container">
        <div class="row">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Pemberitahuan <span class="badge bg-secondary">1</span>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Hafizul</strong>, Mengajak anda bermain Tennis <br>Minggu, 23 mei 2021 <br>Lapangan Punge
                </div>
                <section class="buttonnotf mb-2">
                  <div class="container">
                <a class="btn btn-secondary-b" href="<?php echo e(url('/batal')); ?>" role="button">Tolak</a>
                <a class="btn btn-primary-b" href="<?php echo e(url('/aktivitas')); ?>" role="button">Terima</a>
              </section>
              </div>
              </div>
            </div>
            <section class="buttontour mt-3">
            <a class="btn btn-secondary-a" href="<?php echo e(url('/')); ?>" role="button">Kembali</a>
          </section>
    </div>
</div>
</section>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html><?php /**PATH C:\Users\MSI Modern\Downloads\appRaravel\appRaravel\app_laravel\resources\views/Pemberitahuan.blade.php ENDPATH**/ ?>