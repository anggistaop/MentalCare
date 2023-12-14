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
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <title>@yield('title')</title>
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
            href="{{ route('dashboard') }}"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white"
            ><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a
          >
          <a
            href="{{ route('user')  }}"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white"
            ><i class="fas fa-user me-2"></i>User</a
          >
          <a
            href="{{ route('psikolog') }}"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white"
            ><i class="fas fa-users me-2"></i>Psikolog</a
          >
          <a
            href="{{ route('jadwal') }}"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-white"
            ><i class="fas fa-calendar-times me-2"></i>Jadwal</a
          >
          <a
            href="{{ route('auth.logout') }}"
            class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
            ><i class="fas fa-power-off me-2"></i>Logout</a
          >
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      @yield('content')

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