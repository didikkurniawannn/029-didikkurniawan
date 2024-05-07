<!DOCTYPE html>
<html lang="en">

<head>
  <!-- HTML base URL. Remove upon app developing. -->
  <?php include "../../../_base.php" ?>
  <title>Surat Keluar | <?= $app_data->app_name ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "../../../_head.php" ?>
</head>

<body class="skin-blue fixed-layout">
  <!-- ============================================================== -->
  <!-- Modal -->
  <!-- ============================================================== -->
  <?php include "partials/modal_approval_surat_keluar.php" ?>

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
            <h4 class="text-themecolor">Surat Keluar</h4>
          </div>
          <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $app_data->app_name ?></li>
                <li class="breadcrumb-item">Persuratan</li>
                <li class="breadcrumb-item active">Surat Keluar</li>
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
        <div class="mailbox-card card">
          <div class="card-body">
            <div class="row">
              <div class="mailbox-list col-sm-12">
                <div class="row">
                  <div class="col-sm-3">
                    <button type="button" class="btn btn-success mailbox-trigger-edit" data-has-access="operator"><i class="fa fa-plus"></i> Tambah</button>
                  </div>
                  <div class="mailbox-search col-sm-4 offset-sm-5">
                    <div class="form-group row justify-content-end">
                      <div class="col-md-12">
                        <label class="control-label text-start text-md-end col-form-label" for="search_inbox">Pencarian</label>
                        <input type="text" id="search_inbox" name="search_inbox" class="form-control" placeholder="Ketikkan kata kunci pencarian" value="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inbox-center table-responsive">
                  <table class="table table-hover no-wrap mailbox-table">
                    <tbody>
                      <?php for($i = 0; $i < 3; $i++) : ?>
                      <tr class="mailbox-item unread">
                        <td class="hidden-xs-down">
                          <span class="text-muted f-s-12 d-block m-b-4">MOS-0234/SKPR/JJ/VIII/2023</span>
                          Sekretaris Perusahaan
                        </td>
                        <td>
                          <span class="badge bg-info m-b-8">Surat Dinas</span>
                          <span class="badge bg-warning">Sangat Rahasia</span>
                          <span class="badge bg-success"><i class="fa fa-check"></i> Disetujui</span>
                        </td>
                        <td class="max-texts">
                          SPPD Jakarta
                          <div class="m-t-4">
                            <a href="javascript:void(0)" target="_blank" class="btn btn-sm btn-outline-primary text-truncate d-inline-block" style="max-width: 160px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Laporan SPPD Jakarta.pdf"><i class="fa fa-paperclip"></i> Laporan SPPD Jakarta.pdf</a>
                          </div>
                        </td>
                        <td class="text-end"> 28 Agu 2023 11:12 WIB </td>
                      </tr>
                      <?php endfor; ?>
                      <?php for ($i = 0; $i < 2; $i++) : ?>
                      <tr class="mailbox-item">
                        <td class="hidden-xs-down">
                          <span class="text-muted f-s-12 d-block m-b-4">MOS-0234/SKPR/JJ/VIII/2023</span>
                          Sekretaris Perusahaan
                        </td>
                        <td>
                          <span class="badge bg-info m-b-8">Surat Dinas</span>
                          <span class="badge bg-warning">Sangat Rahasia</span>
                          <span class="badge bg-danger"><i class="fa fa-times"></i> Tidak Disetujui</span>
                        </td>
                        <td class="max-texts">
                          SPPD Jakarta
                          <div class="m-t-4">
                            <a href="javascript:void(0)" target="_blank" class="btn btn-sm btn-outline-primary text-truncate d-inline-block" style="max-width: 160px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Laporan SPPD Jakarta.pdf"><i class="fa fa-paperclip"></i> Laporan SPPD Jakarta.pdf</a>
                          </div>
                        </td>
                        <td class="text-end"> 28 Agu 2023 11:12 WIB </td>
                      </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="mailbox-form col-sm-6 d-none">
                <div class="card shadow-none border-none">
                  <div class="card-body">
                    <form action="#" method="POST" id="form_data" class="form-horizontal needs-validation" novalidate>
                      <div class="form-body">
                        <div class="row align-items-center">
                          <div class="col-sm-1 text-center">
                            <a href="javascript:void(0)" class="mailbox-trigger-close" data-bs-toggle="tooltip" title="Tutup"><i class="fa fa-times f-s-18 text-muted"></i></a>
                          </div>
                          <div class="col-sm-11">
                            <div class="alert alert-secondary p-y-8 text-muted mb-0">
                              <i>*) Wajib diisi</i>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="tgl_surat">Tanggal Surat<span class="text-danger">*</span></label>
                          <div class="col-md-9">
                            <input type="text" id="tgl_surat" name="tgl_surat" class="form-control datepicker" placeholder="Pilih tanggal surat" value="23 Agustus 2023" required>
                            <div class="invalid-feedback">
                              Tanggal Surat tidak valid
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="jenis_surat">Jenis Surat<span class="text-danger">*</span></label>
                          <div class="col-md-9">
                            <select id="jenis_surat" name="jenis_surat" class="form-select select2" data-placeholder="-- Pilih Jenis Surat --" required>
                              <option value="1" selected>S - Surat Dinas</option>
                              <option value="2">MOS - Memo SPD</option>
                              <option value="3">KEP - Surat Keputusan</option>
                              <option value="4">SE - Surat Edaran</option>
                              <option value="5">ST - Surat Tugas</option>
                            </select>
                            <div class="invalid-feedback">
                              Jenis Surat tidak valid
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="sifat_surat">Sifat Surat<span class="text-danger">*</span></label>
                          <div class="col-md-9">
                            <select id="sifat_surat" name="sifat_surat" class="form-select select2" data-placeholder="-- Pilih Sifat Surat --" required>
                              <option value="1" selected>SR - Sangat Rahasia</option>
                              <option value="2">T - Terbatas</option>
                              <option value="3">R - Rahasia</option>
                              <option value="4">S - Segera</option>
                              <option value="5">B - Biasa</option>
                            </select>
                            <div class="invalid-feedback">
                              Sifat Surat tidak valid
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="unit_kerja">Unit Kerja<span class="text-danger">*</span></label>
                          <div class="col-md-9">
                            <select id="unit_kerja" name="unit_kerja" class="form-select select2" data-placeholder="-- Pilih Unit Kerja --" required>
                              <option value="1" selected>SKPR - Sekretaris Perusahaan</option>
                              <option value="2">DPJ - Divisi Penjaminan</option>
                              <option value="3">DMRK - Divisi Manajemen Risiko dan Klaim</option>
                              <option value="4">DKU - Divisi Keuangan dan Umum</option>
                              <option value="5">SPI - Satuan Penagwasan Internal</option>
                            </select>
                            <div class="invalid-feedback">
                              Unit Kerja tidak valid
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="no_surat">Nomor Surat</label>
                          <div class="col-md-9">
                            <input type="text" id="no_surat" name="no_surat" class="form-control" placeholder="Terisi otomatis oleh sistem" value="" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="perihal_surat">Perihal<span class="text-danger">*</span></label>
                          <div class="col-md-9">
                            <input type="text" id="perihal_surat" name="perihal_surat" class="form-control" placeholder="Ketikkan perihal surat" value="SPPD Jakarta" required>
                            <div class="invalid-feedback">
                              Perihal tidak valid
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="keterangan_surat">Keterangan</label>
                          <div class="col-md-9">
                            <textarea rows="3" id="keterangan_surat" name="keterangan_surat" class="form-control" placeholder="Ketikkan uraian keterangan">-</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="tujuan_surat">Tujuan</label>
                          <div class="col-md-9">
                            <input type="text" id="tujuan_surat" name="tujuan_surat" class="form-control" placeholder="Ketikkan tujuan surat" value="Kadiv Keuangan dan Umum">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="file_lampiran">Lampiran</label>
                          <div class="col-md-9">
                            <input type="file" id="file_lampiran" name="file_lampiran" class="form-control" accept="application/pdf, .jpg">
                            <small class="form-text">Format file *.PDF atau *.JPG, ukuran maks. 10 MB</small>
                          </div>
                        </div>
                      </div>
                      <div class="form-action m-t-24">
                        <div class="row">
                          <div class="col-sm-6">
                            <button type="button" class="btn btn-secondary w-100 mailbox-trigger-close"><i class="fa fa-times"></i> Batal</button>
                          </div>
                          <div class="col-sm-6">
                            <button type="button" class="btn btn-success w-100 mailbox-trigger-close"><i class="fa fa-save"></i> Simpan</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="mailbox-detail col-sm-6 d-none">
                <div class="card shadow-none border-none">
                  <div class="card-body">
                    <form action="#" method="POST" id="form_data" class="form-horizontal needs-validation" novalidate>
                      <div class="form-body">
                        <div class="row align-items-center">
                          <div class="col-sm-4 text-start">
                            <a href="javascript:void(0)" class="mailbox-trigger-close" data-bs-toggle="tooltip" title="Tutup"><i class="fa fa-times f-s-18 text-muted m-e-12"></i></a>
                            <a href="javascript:void(0)" class="mailbox-trigger-edit" data-bs-toggle="tooltip" title="Ubah Data" data-has-access="operator"><i class="fa fa-edit f-s-18 text-warning m-e-12"></i></a>
                            <a href="javascript:void(0)" target="_blank" data-bs-toggle="tooltip" title="Cetak Surat"><i class="fa fa-print f-s-18 text-success"></i></a>
                          </div>
                        </div>
                        <br>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Tanggal Surat</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control-plaintext" value="23 Agustus 2023" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Jenis Surat</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control-plaintext" value="Surat Dinas" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Sifat Surat</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control-plaintext" value="Sangat Rahasia" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Unit Kerja</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control-plaintext" value="Sekretaris Perusahaan" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Nomor Surat</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control-plaintext" value="MOS-0234/SKPR/JJ/VIII/2023" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Perihal</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control-plaintext" value="SPPD Jakarta" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Keterangan</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control-plaintext" value="-" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Tujuan</label>
                          <div class="col-md-9">
                            <input type="text" class="form-control-plaintext" value="Kadiv Keuangan dan Umum" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="control-label text-start text-md-end col-md-3 col-form-label">Lampiran</label>
                          <div class="col-md-9">
                            <a href="javascript:void(0)" target="_blank">
                              <div class="card shadow-none border-primary">
                                <div class="card-body p-10 text-primary">
                                  <i class="fa fa-paperclip"></i>&nbsp; Laporan SPPD Jakarta.pdf
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="form-action m-t-24">
                        <div class="row">
                          <div class="col-sm-6">
                            <button type="button" class="btn btn-secondary w-100 mailbox-trigger-close"><i class="fa fa-times"></i> Tutup</button>
                          </div>
                          <div class="col-sm-6">
                            <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#modal-approval-surat-keluar"><i class="fa fa-check" data-has-access="direktur"></i> Approval Surat Keluar</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
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
