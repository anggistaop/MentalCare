@extends('admin.template')
    <title>@yield('title', 'tambah-data')</title>

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
          <h2 class="my-3">Edit Data</h2>
          <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="namaLengkap" class="col-sm-3 col-form-label"
                >Nama Lengkap</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="namaLengkap"
                  name="namaLengkap"
                  value="{{ $user->namaLengkap }}"
                  autofocus
                  autocomplete="off"
                />
                <div class="invalid-feedback"></div>
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="tanggalLahir" class="col-sm-3 col-form-label"
                >Tanggal Lahir</label
              >
              <div class="col-sm-9">
                <input
                  type="date"
                  class="form-control"
                  id="tanggalLahir"
                  name="tanggalLahir"
                  value="{{ $user->tanggalLahir }}"
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="alamat" class="col-sm-3 col-form-label"
                >Alamat</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="alamat"
                  name="alamat"
                  value="{{ $user->alamat }}"
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="nomorHP" class="col-sm-3 col-form-label"
                >No. Hp</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="nomorHP"
                  name="nomorHP"
                  value="{{ $user->nomorHP }}"
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="username" class="col-sm-3 col-form-label"
                >Username</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  name="username"
                  value="{{ $user->username }}"
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
                  value="{{ $user->email }}"
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
                  value="{{ $user->password }}"
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <label for="rekamMedis" class="col-sm-3 col-form-label"
                >Rekam medis</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  id="rekamMedis"
                  name="rekamMedis"
                  value="{{ $user->rekamMedis }}"
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
                  value="{{ $user->hasil  }}"
                />
              </div>
            </div>
            <div class="form-group row mt-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit Data</button>
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