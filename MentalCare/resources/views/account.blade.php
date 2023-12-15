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
    <link rel="stylesheet" href="../assets/styles/account.css" />
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
          <li><a href="#">Beranda</a></li>
          <li class="dropdown">
            <span>Konseling </span>
            <div class="dropdown-content">
              <a href="../konseling/konseling individu/index.html">Individu</a>
              <a href="../konseling/konseling pasangan/index.html">Pasangan</a>
              <a href="../konseling/konseling keluarga/index.html">Keluarga</a>
            </div>
          </li>

          <li><a href="#">Psikolog</a></li>
          <li><a href="#">Artikel</a></li>
          <li><a href="#">Testimoni</a></li>
          <li><a href="#">Tentang Kami</a></li>
        </ul>
        <a class="account" href="./beforelogin/index.html">
          <img
            src="../img/account 1.png"
            class="account"
            alt="Gambar Akun Pengguna"
          />
        </a>
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
            <span class="name">Anonymous</span>
            <span class="email">anonymous@gmail.com</span>
          </div>
          <button class="button">Logout</button>
        </div>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Nama Lengkap</label
            >
            <input
              type="text"
              placeholder="Nama Lengkap"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input
              type="email"
              placeholder="Email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gender</label>
            <input
              type="text"
              placeholder="Gender"
              class="form-control"
              id="exampleInputPassword1"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">TTL</label>
            <input
              type="date"
              placeholder="Tempat Tanggal Lahir"
              class="form-control"
              id="exampleInputPassword1"
            />
          </div>
          <div class="mb-3">
            <label
              class="ubah-password"
              for="exampleInputPassword1"
              class="form-label"
              >Ubah Password</label
            >
            <input
              type="password"
              placeholder="New Password"
              class="form-control"
              id="exampleInputPassword1"
            />
          </div>
          <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
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