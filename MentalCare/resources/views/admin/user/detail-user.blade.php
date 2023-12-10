<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../assets/styles/admin.css" />
    <title>detail-psi</title>
  </head>

  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-color" id="sidebar-wrapper">
        <div
          class="sidebar-heading text-center py-4 logo-text fs-4 border-bottom"
        >
          MentalCare
        </div>
        <div class="list-group list-group-flush my-3">
          <a
            href="../dashboard.html"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white"
            ><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a
          >
          <a
            href="../user/user.html"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white"
            ><i class="fas fa-user me-2"></i>User</a
          >
          <a
            href="../psikolog/psikolog.html"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white"
            ><i class="fas fa-users me-2"></i>Psikolog</a
          >
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white"
            ><i class="fas fa-calendar-times me-2"></i>Jadwal</a
          >
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
            ><i class="fas fa-power-off me-2"></i>Logout</a
          >
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

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

        <!-- detail profile -->

        <div class="col p-5">
          <div class="mb-3" style="max-width: 540px">
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Anonymous</h5>
                  <div class="card-text">
                    <p>Nama Lengkap  </p><p> :</p>
                    <p>John Doe</p>
                  </div>
                  <div class="card-text">
                    <p>Tanggal Lahir </p><p> :</p>
                    <p>12 Desember 1999</p>
                  </div>
                  <div class="card-text">
                    <p>Alamat        </p><p> :</p>
                    <p>Yogyakarta</p>
                  </div>
                  <div class="card-text">
                    <p>No Hp         </p><p> :</p>
                    <p>5234905238324</p>
                  </div>
                  <div class="card-text">
                    <p>Email         </p><p> :</p>
                    <p>john@gmail.com</p>
                  </div>
                  <div class="card-text">
                    <p>Rekam medis   </p><p> :</p>
                    <p>bipolar</p>
                  </div>
                  <div class="card-text">
                    <p>Hasil         </p><p> :</p>
                    <p>Pengobatan level ringan</p>
                  </div>
                  <a href="./form-user.html" class="btn btn-warning">Edit</a>
                  <button
                    type="submit"
                    class="btn btn-danger ms-2"
                    onclick="return confirm('apakah anda yakin')"
                  >
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>

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