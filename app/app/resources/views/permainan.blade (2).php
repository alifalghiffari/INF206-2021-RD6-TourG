<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/a.png">
    <title>Tournament</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
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
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/aktivitas') }}">Aktivitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/pemberitahuan') }}">Pemberitahuan</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hai, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/profil') }}">Profil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>  
            </li>
        </ul>
    </div>
  </div>
</nav>

<!--Halaman-->

<section class="tournament mt-5">
<div class='container'>
<form method="post" action="/permainan/{{Auth::user()->id}}/game" class="form">
            @csrf
            <div class='form-group row'>
            <label class='labelan' style="color: white; font-weight: 500;" for='teman'>Teman</label><br>
            <input class='inputan' id='teman' name='teman' type="text" value="{{ old('teman') }}" required autofocus><br>

            <label class='labelan' style="color: white; font-weight: 500;" for='lokasi'>Lokasi</label><br>
            <input class='inputan' id='lokasi' name='lokasi' type="text" value="{{ old('lokasi') }}" required autofocus><br>

            <label class='labelan' style="color: white; font-weight: 500;" for='jadwal'>Jadwal</label><br>
            <input class='inputan' id='jadwal' name='jadwal' type="text" value="{{ old('jadwal') }}" required autofocus><br>

            <p style="color: red; font-weight: 300;" > <br/>*Perhatikan baik-baik saat mengisi data </p>
            <button id="submit-btn" type="submit" class='btn-primary' name="submit" value="Simpan" >Simpan</button>
            </div>
        </form>
        </div>
</section>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>