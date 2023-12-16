<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <!-- mycss -->
    <link rel="stylesheet" href="{{ asset('css/account.css') }}" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">MentalCare</div>
        <ul>
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
        @auth
        <a href="{{ route('akun.index') }}">
          <img src="{{ asset('img/account 1.png') }}" class="account" alt="Gambar Akun Pengguna">
        </a>
        @else
          <button class="login"><a href="{{ route('login') }}">Masuk Akun</a></button>
        @endauth
      </nav>
    </header>
    <section class="halaman-account">
      <h1>Detail Akun</h1>
      <div class="account-container">
        <div class="profile-card">
          <div class="profile-image">
            <img src="img/profile1.png" alt="" class="profile-img" />
          </div>
          <div class="text-data">
            <span class="name">{{ Auth::user()->username }}</span>
            <span class="email">{{ Auth::user()->email }}</span>
          </div>
          <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" class="button list-group-item list-group-item-action bg-transparent text-danger fw-bold" style="border: none; cursor: pointer;">
                <i class="fas fa-power-off me-2"></i>Logout
            </button>
         </form>
        </div>
        <form action="{{ route('akun.update', Auth::user()->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="namaLengkap" class="form-label"
              >Nama Lengkap</label
            >
            <input
              type="text"
              placeholder="Nama Lengkap"
              class="form-control"
              id="namaLengkap"
              aria-describedby="emailHelp"
              value="{{ Auth::user()->namaLengkap }}"
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              placeholder="Email"
              class="form-control"
              id="email"
              aria-describedby="emailHelp"
              value="{{ Auth::user()->email }}"
            />
          </div>
          <div class="mb-3">
            <label for="nomorHP" class="form-label">Nomor HP</label>
            <input
              type="text"
              placeholder="Nomor HP"
              class="form-control"
              id="nomorHP"
              value="{{ Auth::user()->nomorHP }}"
            />
          </div>
          <div class="mb-3">
            <label for="tanggalLahir" class="form-label">TTL</label>
            <input
              type="date"
              placeholder="Tempat Tanggal Lahir"
              class="form-control"
              id="tanggalLahir"
              value="{{ Auth::user()->tanggalLahir }}"
            />
          {{-- </div>
          <div class="mb-3">
            <label
              class="ubah-password"
              for="password"
              class="form-label"
              >Ubah Password</label
            >
            <input
              type="password"
              placeholder="New Password"
              class="form-control"
              id="password"
            />
          </div>
          <button type="submit" class="btn btn-primary">SAVE CHANGES</button> --}}
        </form>
      </div>
    </section>
    <footer class="footer-container">
      <div class="footer-content">
        <div class="footer-logo">
          <h1>MentalCare</h1>
          <p>
            Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok,<br />
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
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>