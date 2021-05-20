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
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('/aktivitas')); ?>">Aktivitas</a>
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
        <div class="row">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Aktivitas
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Aktivitas 1</strong><br>--Halaman--
                </div>
              </div>
            </div>
            <section class="buttontour mt-3">
            <a class="btn btn-secondary-a" href="<?php echo e(url('/menu')); ?>" role="button">Batalkan</a>
            <a class="btn btn-primary-a" href="<?php echo e(url('/menu')); ?>" role="button">Selesai</a>
          </section>
          </div>
        </div>
</section>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html><?php /**PATH D:\RPL-RD6\app_laravel\resources\views/aktivitas.blade.php ENDPATH**/ ?>