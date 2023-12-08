<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,600&display=swap"
      rel="stylesheet"
    />

    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
    <!-- mycss -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
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
                <li><a href="#artikel">Artikel</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#about">Tentang Kami</a></li>
            </ul>
            <a class="account" href="#">
                <img src="{{ asset('img/account 1.png') }}" class="account" alt="Gambar Akun Pengguna">
            </a>
            <div class="hamburger">&#9776;</div>
        </nav>
        </header>
        @yield('content')
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
<script src="{{ asset('js/nav-hamburger.js') }}"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>