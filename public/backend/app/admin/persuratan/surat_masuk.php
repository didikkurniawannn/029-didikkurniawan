<!DOCTYPE html>
<html lang="en">

<head>
<!-- HTML base URL. Remove upon app developing. -->
<?php include "../../../_base.php" ?>
<title>Surat Masuk | <?= $app_data->app_name ?></title>
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
<?php include "partials/modal_kirim_disposisi.php" ?>

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
<h4 class="text-themecolor">Surat Masuk</h4>
</div>
<div class="col-md-7 align-self-center text-right">
<div class="d-flex justify-content-end align-items-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><?= $app_data->app_name ?></li>
<li class="breadcrumb-item">Persuratan</li>
<li class="breadcrumb-item active">Surat Masuk</li>
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
  <span class="text-muted f-s-12 d-block m-b-4">328/KOREKS/BPRS/HIKP/VIII/2023</span>
  PT BPRS HIK PARAHYANGAN
  </td>
  <td class="max-texts">
  PERMOHONAN SPONSORSHIP MILAD BPRS HIK PARAHYANGAN KE-30
  <div class="m-t-4">
  <a href="javascript:void(0)" target="_blank" class="btn btn-sm btn-outline-primary text-truncate d-inline-block" style="max-width: 160px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Proposal Permohonan Sponsorship.pdf"><i class="fa fa-paperclip"></i> Proposal Permohonan Sponsorship.pdf</a>
  </div>
  </td>
  <td class="text-end"> 28 Agu 2023 11:12 WIB </td>
  </tr>
  <?php endfor; ?>
  <?php for ($i = 0; $i < 2; $i++) : ?>
    <tr class="mailbox-item">
    <td class="hidden-xs-down">
    <span class="text-muted f-s-12 d-block m-b-4">328/KOREKS/BPRS/HIKP/VIII/2023</span>
    PT BPRS HIK PARAHYANGAN
    </td>
    <td class="max-texts">
    PERMOHONAN SPONSORSHIP MILAD BPRS HIK PARAHYANGAN KE-30
    <div class="m-t-4">
    <a href="javascript:void(0)" target="_blank" class="btn btn-sm btn-outline-primary text-truncate d-inline-block" style="max-width: 160px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Proposal Permohonan Sponsorship.pdf"><i class="fa fa-paperclip"></i> Proposal Permohonan Sponsorship.pdf</a>
    </div>
    </td>
    <td class="text-end"> 28 Agu 2023 11:12 WIB </td>
    </tr>
    <?php endfor; ?>
    </tbody>
    </table>
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
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Tanggal Terima</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="28 Agustus 2023" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Tanggal Surat</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="23 Agustus 2023" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Nomor Surat</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="328/KOREKS/BPRS/HIKP/VIII/2023" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Alamat Pengirim</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="Kota Bandung" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label pt-0">Perihal</label>
    <div class="col-md-9 d-flex align-items-start">
    <p>PERMOHONAN SPONSORSHIP MILAD BPRS HIK PARAHYANGAN KE-30</p>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Tujuan</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="SKPR" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Nomor Arsip</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="-" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Isi Disposisi</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="-" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Keterangan</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="-" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Pengirim</label>
    <div class="col-md-9">
    <input type="text" class="form-control-plaintext" value="PT BPRS HIK PARAHYANGAN" disabled>
    </div>
    </div>
    <div class="form-group row">
    <label class="control-label text-start text-md-end col-md-3 col-form-label">Lampiran</label>
    <div class="col-md-9">
    <a href="javascript:void(0)" target="_blank">
    <div class="card shadow-none border-primary">
    <div class="card-body p-10 text-primary">
    <i class="fa fa-paperclip"></i>&nbsp; Proposal Permohonan Sponsorship.pdf
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
    <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#modal-kirim-disposisi" data-has-access="direktur"><i class="fa fa-paper-plane"></i> Kirim Disposisi</button>
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
    