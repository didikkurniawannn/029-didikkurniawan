<nav class="navbar top-navbar navbar-expand-md navbar-dark">
  <!-- ============================================================== -->
  <!-- Logo -->
  <!-- ============================================================== -->
  <div class="navbar-header">
    <a class="navbar-brand" href="javascript:void(0)">
      <!-- Logo icon --><b>
        <!-- Light Logo icon -->
        <img src="assets/images/logo-light-icon.webp" alt="homepage" class="light-logo" style="max-height: 50px;" />
      </b>
      <!--End Logo icon -->
      <!-- Logo text --><span class="m-s-6">
        <!-- Light Logo text -->
        <img src="assets/images/logo-light-text.webp" class="light-logo logo-text" alt="homepage" />
      </span>
    </a>
  </div>
  <!-- ============================================================== -->
  <!-- End Logo -->
  <!-- ============================================================== -->
  <div class="navbar-collapse">
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav me-auto">
      <!-- This is  -->
      <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
      <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
    </ul>
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <!-- ============================================================== -->
    <ul class="navbar-nav my-lg-0">
      <li class="nav-item dropdown u-pro">
        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-moon"></i></a>
        <div class="dropdown-menu dropdown-menu-end animated flipInY">
          <!-- text-->
          <a href="javascript:void(0)" class="dropdown-item" onclick="toggleTheme()">Toggle Dark Mode</a>
          <!-- text-->
        </div>
      </li>
      <!-- ============================================================== -->
      <!-- User Profile -->
      <!-- ============================================================== -->
      <li class="nav-item dropdown u-pro">
        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/user-1.webp" alt="user" class=""> <span class="hidden-md-down"><span id="profile_name"></span> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
        <div class="dropdown-menu dropdown-menu-end animated flipInY">
          <!-- text-->
          <a href="app/profil_saya" class="dropdown-item"><i class="ti-user"></i> Profil Saya</a>
          <!-- text-->
          <a href="app/ubah_password" class="dropdown-item"><i class="ti-settings"></i> Ubah Password</a>
          <!-- text-->
          <div class="dropdown-divider"></div>
          <!-- text-->
          <a href="./" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
          <!-- text-->
        </div>
      </li>
      <!-- ============================================================== -->
      <!-- End User Profile -->
      <!-- ============================================================== -->
    </ul>
  </div>
</nav>
