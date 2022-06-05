  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
    </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
        <form action="/logout" method="POST">
          @csrf
          <button class="btn btn-dark" type="submit" class="nav-link px-3 bg-dark border-0">
        Logout
        <span data-feather="log-out"></span>
          </button>
        </form>
          </li>
        </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->
