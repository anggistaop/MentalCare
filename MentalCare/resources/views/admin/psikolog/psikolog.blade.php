@extends('admin.template')
    <title>@yield('title', 'daftar-psikolog')</title>

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

        <div class="container-fluid px-4">
          <div class="row g-3 my-2">
            <div class="col-md-3">
              <div
                class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center rounded"
              >
                <div>
                  <h3 class="fs-2">{{ $totalUser }}</h3>
                  <p class="fs-5">User</p>
                </div>
                <i class="fas fa-user fs-1 primary-text p-3"></i>
              </div>
            </div>

            <div class="col-md-3">
              <div
                class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center rounded"
              >
                <div>
                  <h3 class="fs-2">{{ $totalPsikolog }}</h3>
                  <p class="fs-5">Psikolog</p>
                </div>
                <i class="fas fa-users fs-1 primary-text p-3"></i>
              </div>
            </div>

            <div class="col-md-3">
              <div
                class="p-3 bg-card shadow-sm d-flex justify-content-around align-items-center rounded"
              >
                <div>
                  <h3 class="fs-2">{{ $totalJadwal }}</h3>
                  <p class="fs-5">Jadwal</p>
                </div>
                <i class="fas fa-calendar-times fs-1 primary-text p-3"></i>
              </div>
            </div>
          </div>

          <div class="row my-5">
            <div class="row d-flex justify-content-between">
              <div class="col-md-8">
                <h3 class="fs-4 mb-3">Daftar Psikolog</h3>
              </div>
              <div class="col-md-4 text-end">
                <a href="{{ route('psikolog.create') }}" class="btn btn-primary fs-7 mb-3">Tambah Data</a>
              </div>
            </div>
            <div class="col">
              <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                  <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategory</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($psikologs as $psikolog)
                  <tr>
                    <th scope="row">{{ $psikolog->id }}</th>
                    <td>
                      <img src="{{ asset('/storage/psikologs/'.$psikolog->image) }}" alt="profile-img" />
                    </td>
                    <td>{{ $psikolog->name }}</td>
                    <td>{{ $psikolog->category }}</td>
                    <td>
                      <a href="{{ route('psikolog.show', $psikolog->id) }}" class="btn btn-primary"
                        >Detail</a
                      >
                    </td>
                  </tr>
                  @empty
                  <div class="alert alert-danger">
                    Data Psikolog belum Tersedia.
                  </div>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

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