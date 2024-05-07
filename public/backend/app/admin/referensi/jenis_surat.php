<!DOCTYPE html>
<html lang="en">

<head>
  <!-- HTML base URL. Remove upon app developing. -->
  <?php include "../../../_base.php" ?>
  <title>Jenis Surat | <?= $app_data->app_name ?></title>
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
            <h4 class="text-themecolor">Jenis Surat</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $app_data->app_name ?></li>
                <li class="breadcrumb-item">Referensi</li>
                <li class="breadcrumb-item active">Jenis Surat</li>
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
              <table class="table table-striped datatable w-100">
                  <thead>
                    <tr>
                      <th style="min-width: 100px; width: 100px;">
                        <button class="btn btn-primary btn-sm open_form" type="button"><i class="fa fa-plus"></i> Tambah</button>
                      </th>
                      <th>Kode</th>
                      <th>Jenis Surat</th>
                      <th>Aktif</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?= $utils->action_group_default; ?></td>
                      <td>01</td>
                      <td>Surat Dinas</td>
                      <td>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Aktif/Non Aktif"><span class="fas fa-check text-success"></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td><?= $utils->action_group_default; ?></td>
                      <td>02</td>
                      <td>Surat Dinas Pengaturan</td>
                      <td>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Aktif/Non Aktif"><span class="fas fa-check text-success"></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td><?= $utils->action_group_default; ?></td>
                      <td>03</td>
                      <td>Surat Dinas Penugasan</td>
                      <td>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Aktif/Non Aktif"><span class="fas fa-check text-success"></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td><?= $utils->action_group_default; ?></td>
                      <td>04</td>
                      <td>Surat Dinas Khusus</td>
                      <td>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Aktif/Non Aktif"><span class="fas fa-check text-success"></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td><?= $utils->action_group_default; ?></td>
                      <td>05</td>
                      <td>Surat Dinas Bimbingan</td>
                      <td>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Toggle Aktif/Non Aktif"><span class="fas fa-check text-success"></span></a>
                      </td>
                    </tr>
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
