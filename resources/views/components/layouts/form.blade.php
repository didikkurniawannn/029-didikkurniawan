<!DOCTYPE html>
<html lang="en">

<head>
<!-- HTML base URL. Remove upon app developing. -->
<title>@yield('title') - {{getAppName()}}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('components.layouts._head')
</head>

<body class="skin-blue fixed-layout">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
{{-- <div class="preloader"> --}}
{{-- @include('components.layouts._prereloader') --}}
{{-- </div> --}}

<!-- ============================================================== -->
<!-- Main wrapper -->
<!-- ============================================================== -->
<div id="main-wrapper">
<!-- ============================================================== -->
<!-- Topbar header -->
<!-- ============================================================== -->
<header class="topbar">
@include('components.layouts._topbar')
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
<x-layouts._sidebar></x-layouts._sidebar>
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
<h4 class="text-themecolor">{{getAppName()}}</h4>
</div>
<div class="col-md-7 align-self-center text-end">
<div class="d-flex justify-content-end align-items-center">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">{{getAppName()}}</li>
    <li class="breadcrumb-item active">@yield('title')</li>
  </ol>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<div class="row">
<div class="col-lg-12">

<div>
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="card card-custom card-stretch">
                  <!--begin::Header-->
                  <div class="card-header py-3">
                      <div class="card-title align-items-start flex-column">
                          <h3 class="card-label font-weight-bolder text-dark">@yield('title')</h3>
                          {{-- <span class="text-muted font-weight-bold font-size-sm mt-1">Update your Website informaiton</span> --}}
                      </div>
                  </div>
                  <!--end::Header-->
       <!--begin::Body-->
       <div class="card-body">
    {{$slot}}
       </div>

  </div>
  <!--end::Body-->

</div>
</div>
</div>
</div>

</div>


</div>
</div>
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
@include('components.layouts._footer')
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
@include('components.layouts._scripts_form')
<style>
  
</style>
</body>

</html>
