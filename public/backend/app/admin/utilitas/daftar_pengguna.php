<!DOCTYPE html>
<html lang="en">

<head>
  <!-- HTML base URL. Remove upon app developing. -->
  <?php include "../../../_base.php" ?>
  <title>Daftar Pengguna | <?= $app_data->app_name ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../../../_head.php" ?>
</head>

<body class="skin-blue fixed-layout">
  <!-- ============================================================== -->
  <!-- Preloader -->
  <!-- ============================================================== -->
  <div class="preloader">
    <?php include "../../../_preloader.php" ?>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header -->
    <!-- ============================================================== -->
    <header class="topbar">
      <?php include "../../../_topbar.php" ?>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <?php include "../../../_sidebar.php" ?>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
          <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Daftar Pengguna</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $app_data->app_name ?></li>
                <li class="breadcrumb-item">Utilitas</li>
                <li class="breadcrumb-item active">Daftar Pengguna</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped datatable">
                  <thead>
                    <tr>
                      <th style="min-width: 100px; width: 100px;">
                        <button class="btn btn-primary btn-sm open_form" type="button"><i class="fa fa-plus"></i> Tambah</button>
                      </th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Nama Lengkap</th>
                      <th>Role</th>
                      <th>Login Terakhir</th>
                      <th>Aktif</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for($i = 0; $i < count($daftar_pengguna); $i++) : ?>
                    <tr>
                      <td><?= $utils->action_group_default; ?></td>
                      <td><?= $daftar_pengguna[$i]->username; ?></td>
                      <td><?= $daftar_pengguna[$i]->email; ?></td>
                      <td><?= $daftar_pengguna[$i]->nama; ?></td>
                      <td><?= $daftar_pengguna[$i]->role; ?></td>
                      <td>2021-08-26 09:23</td>
                      <td>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Aktif/Non Aktif"><span class="fas fa-check text-success"></span></a>
                      </td>
                    </tr>
                    <?php endfor; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-muted">
      <?php include "../../../_footer.php" ?>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <?php include "../../../_scripts.php" ?>
</body>

</html>
