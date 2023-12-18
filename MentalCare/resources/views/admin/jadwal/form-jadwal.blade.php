@extends('admin.template')
    <title>@yield('title', 'ubah data-jadwal')</title>

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
                  <i class="fas fa-user me-2"></i>{{ Auth::user()->username }}
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- form ubah data -->

        <div class="col-md-6 p-4">
          <h2 class="my-3">Tambah Data</h2>
          <form action="{{ route('jadwal.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label for="psikolog" class="col-sm-3 col-form-label"
                >Psikolog</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="psikolog"
                  name="psikolog"
                  autofocus
                  autocomplete="off"
                  value=""
                />
                <div class="invalid-feedback"></div>
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="kategori" class="col-sm-3 col-form-label"
                >Kategori</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="kategori"
                  name="kategori"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="tanggal" class="col-sm-3 col-form-label"
                >Jadwal Terapi</label
              >
              <div class="col-sm-9">
                <input
                  type="date"
                  class="form-control"
                  id="tanggal"
                  name="tanggal"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
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