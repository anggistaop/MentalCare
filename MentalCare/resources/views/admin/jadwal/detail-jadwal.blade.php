@extends('admin.template')
    <title>@yield('title', 'detail-jadwal')</title>

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

        <!-- Detail Jadwal -->

        <div class="col p-5">
          <div class="mb-3" style="max-width: 540px">
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $jadwal->psikolog }}</h5>
                  <p class="card-text">Kategori : {{ $jadwal->kategori }}</p>
                  <p class="card-text">Jadwal Terapi : {{ $jadwal->tanggal }}</p>

                  <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST">
                    <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ms-2" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                </form>

                </div>
              </div>
            </div>
          </div>
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