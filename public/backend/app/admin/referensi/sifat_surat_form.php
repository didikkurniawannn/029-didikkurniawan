<!DOCTYPE html>
<html lang="en">

<head>
  <!-- HTML base URL. Remove upon app developing. -->
  <?php include "../../../_base.php" ?>
  <title>Form Sifat Surat | <?= $app_data->app_name ?></title>
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
            <h4 class="text-themecolor">Form Sifat Surat</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $app_data->app_name ?></li>
                <li class="breadcrumb-item">Referensi</li>
                <li class="breadcrumb-item active">Form Sifat Surat</li>
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
                <form action="app/admin/utilitas/sifat_surat" method="post" id="form_data" class="form-horizontal needs-validation" novalidate>
                  <div class="form-body">
                    <div class="alert alert-secondary p-y-8 text-muted">
                      <i>*) Wajib diisi</i>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="nama_modul">Nama Modul<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="text" id="nama_modul" name="nama_modul" class="form-control" placeholder="Ketikkan nama modul" value="Dashboard" required>
                        <div class="invalid-feedback">
                          Nama Modul tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="parent_modul">Parent Modul<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <select id="parent_modul" name="parent_modul" class="form-select select2" data-placeholder="-- Pilih Parent Modul --" required>
                          <?php for ($i = 0; $i < count($daftar_modul); $i++) : ?>
                          <option value="<?= $daftar_modul[$i]->nama; ?>"><?= $daftar_modul[$i]->nama; ?></option>
                          <?php endfor; ?>
                        </select>
                        <div class="invalid-feedback">
                          Harap pilih Parent Modul
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="alias_modul">Alias<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="text" id="alias_modul" name="alias_modul" class="form-control" placeholder="Ketikkan nama alias modul" value="dashboard" required>
                        <div class="invalid-feedback">
                          Alias tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="url_modul">URL<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="text" id="url_modul" name="url_modul" class="form-control" placeholder="Ketikkan URL modul" value="/" required>
                        <div class="invalid-feedback">
                          URL tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="urutan_modul">Urutan<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="text" id="urutan_modul" name="urutan_modul" class="form-control" placeholder="Ketikkan nomor urut modul" value="0" required>
                        <div class="invalid-feedback">
                          Urutan tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="icon_modul">Icon Class</label>
                      <div class="col-md-9">
                        <input type="text" id="icon_modul" name="icon_modul" class="form-control" placeholder="Ketikkan icon class modul" value="icon-speedometer">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="kelompok_modul">Kelompok</label>
                      <div class="col-md-9">
                        <input type="text" id="kelompok_modul" name="kelompok_modul" class="form-control" placeholder="Ketikkan kelompok modul" value="main">
                      </div>
                    </div>
                  </div>
                  <div class="form-actions m-t-30">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="offset-sm-2 col-md-9">
                            <button type="button" class="btn btn-secondary" onclick="goBack()"><i class="fa fa-arrow-left"></i> Kembali</button>
                            <button type="submit" class="m-s-5 btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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
