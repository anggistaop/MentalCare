@extends('admin.user.template')
    <title>@yield('title', 'ubah data-psi')</title>

@section('content')

      <!-- Page Content -->
      <div class="primary-bg" id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4"
        >
          <div class="d-flex align-items-center">
            <i
              class="fas fa-align-left text-black fs-4 me-3"
              id="menu-toggle"
            ></i>
            <h2 class="fs-2 m-0">Dashboard</h2>
          </div>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a
                  class="nav-link second-text fw-bold"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  aria-expanded="false"
                >
                  <i class="fas fa-user me-2"></i>Admin
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- form ubah data -->

        <div class="col-md-6 p-4">
          <h2 class="my-3">Ubah Data</h2>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="nama-lengkap" class="col-sm-3 col-form-label"
                >Nama Lengkap</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="nama-lengkap"
                  name="nama-lengkap"
                  autofocus
                  autocomplete="off"
                  value=""
                />
                <div class="invalid-feedback"></div>
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="tgl-lahir" class="col-sm-3 col-form-label"
                >Tanggal Lahir</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="tgl-lahir"
                  name="tgl-lahir"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="Alamat" class="col-sm-3 col-form-label"
                >Alamat</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="Alamat"
                  name="Alamat"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="No-hp" class="col-sm-3 col-form-label"
                >No. Hp</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="No-hp"
                  name="No-hp"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="email" class="col-sm-3 col-form-label"
                >Email</label
              >
              <div class="col-sm-9">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="password" class="col-sm-3 col-form-label"
                >Password</label
              >
              <div class="col-sm-9">
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="rekam-medis" class="col-sm-3 col-form-label"
                >Rekam medis</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="rekam-medis"
                  name="rekam-medis"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="hasil" class="col-sm-3 col-form-label"
                >Hasil</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="hasil"
                  name="hasil"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>

@endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
  </body>
</html>