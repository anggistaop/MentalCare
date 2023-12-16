<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/konseling.css') }}">
    <title>@yield('title')</title>
    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
</head>
<body>
    <header>
        <nav>
            <div class="logo">MentalCare</div>
            <ul class="nav-links">
            <li><a href="{{ route('index') }}">Beranda</a></li>
              <li class="dropdown">
                  <span>Konseling </span>
                  <div class="dropdown-content">
                    <a href="{{ route('konselingIndividu') }}">Individu</a>
                    <a href="{{ route('konselingPasangan') }}">Pasangan</a>
                    <a href="{{ route('konselingKeluarga') }}">Keluarga</a>
                  </div>
              </li>
              <li><a href="{{ route('psikolog') }}">Psikolog</a></li>
              <li><a href="{{ route('index') }}#artikel">Artikel</a></li>
              <li><a href="{{ route('index') }}#testimoni">Testimoni</a></li>
              <li><a href="{{ route('index') }}#about">Tentang Kami</a></li>
            </ul>
            <a class="account" href="{{ route('account') }}">
                <img src="{{ asset('img/account 1.png') }}" class="account" alt="Gambar Akun Pengguna">
            </a>
            <div class="hamburger">&#9776;</div>
        </nav>
    </header>
    @yield('content')
    <script src="{{ asset('js/nav-hamburger.js') }}"></script>
</body>
<footer class="footer-container">
    <div class="footer-content">
        <div class="footer-logo">
            <h1>MentalCare</h1>
            <p>
                Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok,<br> 
                Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
            </p>
  </div>
  <div class="footer-social">
    <ul>
      <li>
        <a href="#" class="link">
          <i class="bx bxl-facebook-circle bx-md"></i>
        </a>
      </li>
      <li>
          <a href="#" class="link">
              <i class="bx bxl-tiktok bx-md"></i>
            </a>
        </li>
        <li>
            <a href="#" class="link">
                <i class="bx bxl-instagram-alt bx-md"></i>
            </a>
        </li>
    </ul>
    <div class="footer-bottom">
        <p>© MentalCare, All Right Reserved</p>
    </div>
</div>
</div>
</footer>
</html>