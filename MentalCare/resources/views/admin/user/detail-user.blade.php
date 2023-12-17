@extends('admin.template')
    <title>@yield('title', 'detail-psi')</title>

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

        <!-- detail profile -->

        <div class="col p-5">
          <div class="mb-3" style="max-width: 540px">
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $user->username }}</h5>
                  <div class="card-text">
                    <p>Nama Lengkap  </p><p> :</p>
                    <p>{{ $user->namaLengkap }}</p>
                  </div>
                  <div class="card-text">
                    <p>Tanggal Lahir </p><p> :</p>
                    <p>{{ $user->tanggalLahir }}</p>
                  </div>
                  <div class="card-text">
                    <p>Alamat        </p><p> :</p>
                    <p>{{ $user->alamat }}</p>
                  </div>
                  <div class="card-text">
                    <p>No Hp         </p><p> :</p>
                    <p>{{ $user->nomorHP }}</p>
                  </div>
                  <div class="card-text">
                    <p>Email         </p><p> :</p>
                    <p>{{ $user->email }}</p>
                  </div>
                  <div class="card-text">
                    <p>Rekam medis   </p><p> :</p>
                    <p>{{ $user->rekamMedis }}</p>
                  </div>
                  <div class="card-text">
                    <p>Hasil         </p><p> :</p>
                    <p>{{ $user->hasil }}</p>
                  </div>
                  <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
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