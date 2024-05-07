<!DOCTYPE html>
<html lang="en">

<head>
  <!-- HTML base URL. Remove upon app developing. -->
  <?php include "../../../_base.php" ?>
  <title>Setting Situs | <?= $app_data->app_name ?></title>
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
            <h4 class="text-themecolor">Setting Situs</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $app_data->app_name ?></li>
                <li class="breadcrumb-item">Utilitas</li>
                <li class="breadcrumb-item active">Setting Situs</li>
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
                <form action="app/admin/utilitas/setting_situs" method="post" id="form_data" class="form-horizontal needs-validation" novalidate data-alert-message="Update setting situs berhasil!">
                  <div class="form-body">
                    <div class="alert alert-secondary p-y-8 text-muted">
                      <i>*) Wajib diisi</i>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="nama_app">Nama App<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="text" id="nama_app" name="nama_app" class="form-control" placeholder="Ketikkan nama aplikasi" value="<?= $app_data->app_name ?>" required>
                        <div class="invalid-feedback">
                          Nama App tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="title_app">Site Title<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="text" id="title_app" name="title_app" class="form-control" placeholder="Ketikkan site title" value="<?= $app_data->app_name ?>" required>
                        <div class="invalid-feedback">
                          Site Title tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="footer_app">Footer<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="text" id="footer_app" name="footer_app" class="form-control" placeholder="Ketikkan teks footer" value="Hak Cipta © <?= date('Y'); ?> <?= $app_data->company_name ?>" required>
                        <div class="invalid-feedback">
                          Footer tidak valid
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="logo_app">Logo<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="file" id="logo_app" name="logo_app" class="form-control" accept="image/jpeg, image/png" required>
                        <span class="form-text">Format file *.jpg atau *.png, ukuran maks. 512 KB</span>
                        <div class="invalid-feedback">
                          Harap upload Logo
                        </div>
                        <br>
                        <img class="m-t-10 w-12" src="assets/images/logo-light-icon.webp" alt="Logo App">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="logo_text">Logo Text<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <input type="file" id="logo_text" name="logo_text" class="form-control" accept="image/jpeg, image/png" required>
                        <span class="form-text">Format file *.jpg atau *.png, ukuran maks. 512 KB</span>
                        <div class="invalid-feedback">
                          Harap upload Logo Text
                        </div>
                        <br>
                        <img class="m-t-10 w-16 light-logo logo-text" src="assets/images/logo-light-text.webp" alt="Logo Text">
                      </div>
                    </div>
                    <div class="form-group row toggler_color_light">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="theme_primary_color">Warna Utama</label>
                      <div class="col-md-3">
                        <input type="color" id="theme_primary_color" name="theme_primary_color" class="form-control-color w-100" value="">
                      </div>
                      <label class="control-label text-start text-md-end col-md-3" for="theme_bg_thead_color">Warna Header Tabel</label>
                      <div class="col-md-3">
                        <input type="color" id="theme_bg_thead_color" name="theme_bg_thead_color" class="form-control-color w-100" value="">
                      </div>
                    </div>
                    <div class="form-group row toggler_color_light">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="theme_accent_color">Warna Aksen</label>
                      <div class="col-md-3">
                        <input type="color" id="theme_accent_color" name="theme_accent_color" class="form-control-color w-100" value="">
                      </div>
                      <label class="control-label text-start text-md-end col-md-3" for="theme_text_thead_color">Warna Text Header Tabel</label>
                      <div class="col-md-3">
                        <input type="color" id="theme_text_thead_color" name="theme_text_thead_color" class="form-control-color w-100" value="">
                      </div>
                    </div>
                    <div class="form-group row toggler_color_dark">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="theme_primary_color_dark">Warna Utama</label>
                      <div class="col-md-3">
                        <input type="color" id="theme_primary_color_dark" name="theme_primary_color_dark" class="form-control-color w-100" value="">
                      </div>
                      <label class="control-label text-start text-md-end col-md-3" for="theme_bg_thead_color_dark">Warna Header Tabel</label>
                      <div class="col-md-3">
                        <input type="color" id="theme_bg_thead_color_dark" name="theme_bg_thead_color_dark" class="form-control-color w-100" value="">
                      </div>
                    </div>
                    <div class="form-group row toggler_color_dark">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label" for="theme_accent_color_dark">Warna Aksen</label>
                      <div class="col-md-3">
                        <input type="color" id="theme_accent_color_dark" name="theme_accent_color_dark" class="form-control-color w-100" value="">
                      </div>
                      <label class="control-label text-start text-md-end col-md-3" for="theme_text_thead_color_dark">Warna Text Header Tabel</label>
                      <div class="col-md-3">
                        <input type="color" id="theme_text_thead_color_dark" name="theme_text_thead_color_dark" class="form-control-color w-100" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="control-label text-start text-md-end col-md-2 col-form-label">Warna Tema Default</label>
                      <div class="col-md-9">
                        <button type="button" id="reset_color" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Reset ke warna tema default"><i class="fa fa-fw fa-history"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions m-t-30">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="offset-sm-2 col-md-9">
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
