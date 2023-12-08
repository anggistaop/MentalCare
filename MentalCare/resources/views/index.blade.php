<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,600&display=swap"
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
    <title>MentalCare</title>
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
            <button class="login"><a href="{{ route('login') }}">Masuk Akun</a></button>
            <div class="hamburger">&#9776;</div>
        </nav>
        </header>
    <main>
        <div class="background">
            <div class="custom-content">
                <div class="custom-content-container">
                    <div class="text-wrapper-1">Solusi Kesejahteraan Mental Anda</div>
                    <p class="p1">
                        Selamat datang di rumah kami untuk kesejahteraan kesehatan mental dan emosional. MentalCare berkomitmen
                        untuk memberikan sumber daya, informasi, dan dukungan yang Anda butuhkan. Mari jelajahi perjalanan menuju
                        kesehatan mental yang lebih baik.
                    </p>
                    <button class="consult-now">
                        <a href="#">Konsultasi Sekarang</a>
                    </button>
                </div>
                <img id="home" src="{{asset('img/home.png')}}" alt="Home Image">
            </div>            
            <a href="whatsapp.com">
                <img src="{{asset('img/whatsapp 1.png')}}" class="whatsapp" alt="Gambar WhatsApp">
            </a>
        </div>
        
        <!-- about mentalcare -->
    <section class="about" id="about">
      <div class="container p-xxl-5 d-flex align-items-center">
        <div
          class="row d-md-flex justify-content-center align-items-center pt-md-5 pb-md-5"
        >
          <div class="col-md-5">
            <img
              src="{{ asset('img/Tentang kami 1.png') }}"
              alt="about me"
              class="img-fluid mb-5 mb-md-0"
            />
          </div>
          <div class="col-md-6 col-lg-5 ps-md-5 text-center text-md-start">
            <h1 class="logo-about mt-2 mb-4">MentalCare</h1>
            <p class="content">
              Selamat datang di MentalCare, rumah online Anda untuk perawatan
              kesehatan mental yang peduli. MentalCare adalah platform yang
              didedikasikan untuk memberikan bantuan, dukungan, dan sumber daya
              yang Anda butuhkan untuk merawat dan memahami kesehatan mental
              Anda. MentalCare diciptakan untuk menghilangkan stigma seputar
              masalah kesehatan mental dan memberikan akses mudah ke informasi
              dan layanan yang dapat membantu Anda merasa lebih baik.
            </p>
          </div>
        </div>
      </div>
      <!-- about layanan -->
      <div class="halaman-layanan">
      <div class="layanan container-fluid p-xxl-5 bg-light">
        <div class="container text-center">
          <h3 class="mt-md-4">Kenapa Memilih MentalCare?</h3>
          <div class="row pt-4 gx-4 gy-4 justify-content-center mt-5">
            <div class="col-md-3 box pb-xxl-5">
              <div class="card p-4 pt-5 align-items-center text-white">
                <img src="{{ asset('img/connection 1.png') }}" alt="" class="card-image" />
                <div class="card-body">
                  <h5 class="card-title">Online</h5>
                  <p class="card-text">
                    Anda bisa Bercerita di mana saja, Kapan saja
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 box pb-xxl-5">
              <div class="card p-4 pt-5 align-items-center text-white">
                <img src="{{ asset('img/secret 1.png') }}" alt="" class="card-image" />
                <div class="card-body">
                  <h5 class="card-title">Rahasia</h5>
                  <p class="card-text">Kamu Bercerita, Kami Jaga Rahasia</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 box pb-xxl-5">
              <div class="card p-4 pt-5 pb-0 align-items-center text-white">
                <img src="{{ asset('img/operator 1.png') }}" alt="" class="card-image" />
                <div class="card-body">
                  <h5 class="card-title">Layanan Profesional</h5>
                  <p class="card-text">
                    Menyediakan Akses ke Profesional Kesehatan Mental
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
        <section class="konsultasi-page">
            <div class="konsultasii">          
            <h1 class="judul">Layanan Konseling</h1>
            <p class="subjudul">MentalCare menawarkan layanan konseling kesehatan mental yang berfokus pada kebahagiaan dan kesejahteraan anda bersama tim profesional yang telah kami sediakan siap membantu dalam mengatasi  masalah yang memengaruhi kesehatan mental anda.</p>
                <div class="layanan-container">
                    <div class="layanan-item">
                        <div class="item">
                            <img id="ki-img" src="{{ asset('img/layanan konseling individu.png') }}" alt="konseling individu img">
                            <h1 class="judul-1">Konseling Individu</h1>
                            <p class="sb">Sering merasa cemas, insecure atau masalah lainnya? Yuk mulai langkah pertamamu bersama konsultasi bersama Psikolog Profesional MentalCare</p>
                       
                            <button class="selengkapnya">
                                <a href="{{ route('konselingIndividu') }}">selengkapnya</a>
                            </button>
                        </div>
                        <div class="item">
                            <img id="ki-img" src="{{ asset('img/layanan konseling pasangan.png') }}" alt="konseling individu img">
                            <h1 class="judul-1">Konseling Pasangan</h1>
                            <p class="sb">Sedang mengalami masalah dengan pasangan? Diskusikan masalahmu dan temukan solusinya bersama Psikolog Profesional MentalCare</p>
                         
                            <button class="selengkapnya">
                                <a href="{{ route('konselingPasangan') }}">selengkapnya</a>
                            </button>
                        </div>
                        <div class="item">
                            <img id="ki-img" src="{{ asset('img/layanan konseling keluarga.png') }}" alt="konseling individu img">
                            <h1 class="judul-1">Konseling Keluarga</h1>
                            <p class="sb">Proses konsultasi yang melibatkan anggota keluarga dengan tujuan menyelesaikan masalah demi tercapainya keluarga yang harmonis.</p>
                        
                            <button class="selengkapnya">
                                <a href="{{ route('konselingKeluarga') }}">selengkapnya</a>
                            </button>
                        </div>
                    </div>
                </div>  
            </div>
    </section>   
    <section class="psikolog" id="psikolog">
        <div class="psikolog-hero">
          <h1>Psikolog MentalCare</h1>
          <div class="psikolog-container">
            <a  href="../../psikolog/psikolog.html" class="profile-card">
              <div class="profile-image">
                <img src="{{ asset('img/profile1.png') }}" alt="" class="profile-img" />
              </div>
              <div class="text-data">
                <span class="jobs">Psikolog Klinis Umum</span>
                <span class="name">Faradiba, M.Psi., Psikolog</span>
                <span class="experience">4 Tahun</span>
                <span class="kepuasan">100% Puas</span>
              </div>
            </a>
  
            <a href="../../psikolog/psikolog.html" class="profile-card">
              <div class="profile-image">
                <img src="{{ asset('img/profile2.png') }}" alt="" class="profile-img" />
              </div>
              <div class="text-data">
                <span class="jobs">Psikolog Klinis Dewasa</span>
                <span class="name">Fauzan, M.Psi., Psikolog</span>
                <span class="experience">10 Tahun</span>
                <span class="kepuasan">100% Puas</span>
              </div>
            </a>
  
            <a href="../../psikolog/psikolog.html" class="profile-card">
              <div class="profile-image">
                <img src="{{ asset('img/profile3.png') }}" alt="" class="profile-img" />
              </div>
              <div class="text-data">
                <span class="jobs">Psikolog Klinis Umum</span>
                <span class="name">Enji, M.Psi., Psikolog</span>
                <span class="experience">8 Tahun</span>
                <span class="kepuasan">100% Puas</span>
              </div>
            </a>
          </div>
        </div>
      </section>
      <section class="artikel-cards" id="artikel">
        <div class="container">
          <div class="container-fluid">
            <div class="row d-flex justify-content-center">
              <div class="col text-center py-4 mt-4">
                <div class="judul-art">
                  <h2>Artikel Kesehatan Mental</h2>
                </div>
              </div>
            </div>
            <div
              class="row row-cols-1 row-cols-md-2 g-5 d-flex justify-content-center p-2 p-md-5"
            >
              <div class="col">
                <div class="blog-item bg-transparent rounded overflow-hidden">
                  <div class="blog-img position-relative overflow-hidden">
                    <img
                      class="img-fluid rounded-4"
                      src="{{ asset('img/artikel 1.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="py-4">
                    <div class="d-flex mb-3"></div>
                    <h4 class="mb-3">
                      Saat Merasa Depresi, Kapan Kita Harus ke Psikolog ?
                    </h4>
                    <div class="isi-art">
                      <p>
                        Depresi adalah ketika seseorang tidak lagi merasakan
                        kehidupan yang sepenuhnya hidup. Kondisi ini tentunya
                        jangan sampai dibiarkan terlalu lama atau akan semakin
                        banyak lagi makna hidup yang akan dilewatkan.
                      </p>
                    </div>
                    <a href="{{ route('artikel1') }}" class="btn button-card py-2">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="blog-item bg-transparent rounded overflow-hidden">
                  <div class="blog-img position-relative overflow-hidden">
                    <img
                      class="img-fluid rounded-4"
                      src="{{ asset('img/artikel 2.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="py-4">
                    <div class="d-flex mb-3"></div>
                    <h4 class="mb-3">
                      Ketika Sekadar Menjalani Hidup Aja Rasanya Sangat Sulit
                    </h4>
                    <div class="isi-art">
                      <p>
                        Pernah nggak sih suatu hari kamu ngerasain capek yang
                        benar - benar sampai nggak bisa melakukan apapun? Rasanya
                        badan lemah letih dan otak nggak mau diajak kerjasama
                        untuk berpikir. Yuk disimak dulu.
                      </p>
                    </div>
                    <a href="{{ route('artikel2') }}" class="btn button-card py-2">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="blog-item bg-transparent rounded overflow-hidden">
                  <div class="blog-img position-relative overflow-hidden">
                    <img
                      class="img-fluid rounded-4"
                      src="{{ asset('img/artikel 3.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="py-4">
                    <div class="d-flex mb-3"></div>
                    <h4 class="mb-3">
                      Mengatasi Berbagai Perasaan dan Pikiran Negatif yang Hadir
                    </h4>
                    <div class="isi-art">
                      <p>
                        Sebenarnya lumrah banget yang namanya manusia punya
                        pikiran yang nggak nyaman seperti kesepian, kecemasan,
                        perasaan takut sendiri, hingga galau nggak karuan. Di
                        artikel kali ini, mari mencoba mengurai berbagai cara
                        untuk menghadapi pikiran yang negatif ini.
                      </p>
                    </div>
                    <a href="{{ route('artikel3') }}" class="btn button-card py-2">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="blog-item bg-transparent rounded overflow-hidden">
                  <div class="blog-img position-relative overflow-hidden">
                    <img
                      class="img-fluid rounded-4"
                      src="{{ asset('img/artikel 4.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="py-4">
                    <div class="d-flex mb-3"></div>
                    <h4 class="mb-3">Yakin Dia Adalah yang Terbaik untukmu?</h4>
                    <div class="isi-art">
                      <p>
                        Seumur hidup memang terlalu lama untuk berjuang sendirian
                        dalam rumah tangga, berharap pasangan berubah, menahan
                        sendiri beban hingga memaksakan segala keadaan biar tetap
                        utuh. Jangan lupa tanyakan pada diri sendiri apakah dia
                        orang yang tepat?
                      </p>
                    </div>
                    <a href="{{ route('artikel4') }}" class="btn button-card py-2">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="testimoni" id="testimoni">
        <div class="judul-testimoni">
          <h1>Kata Mereka yang Telah Bersama MentalCare</h1>
          <p class="p-testi">Sekarang Giliranmu Berproses</p>
        </div>
        <div class="testimoni-container">
          <img class="panah" src="{{ asset('img/left-arrow 1.png') }}"></img>
          <div class="profile-cardd">
            <div class="profile-image">
              <img src="{{ asset('img/profile3.png') }}" alt="" class="profile-img" />
            </div>
            <div class="text-data">
              <h2>Anonymous</h2>
              <p>
                Sangat membantu proses penyembuhan dan psikolog sangat mengerti
              </p>
            </div>
          </div>
  
          <div class="profile-cardd">
            <div class="profile-image">
              <img src="{{ asset('img/profile1.png') }}" alt="" class="profile-img" />
            </div>
            <div class="text-data">
              <h2>Anonymous</h2>
              <p>
                Sangat membantu proses penyembuhan dan psikolog sangat mengerti
              </p>
            </div>
          </div>
          <img class="panah" src="{{ asset('img/arrow.png') }}"></img>
        </div>
      </section>         
    </main>
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
<script src="{{asset('js/nav-hamburger.js')}}"></script>
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