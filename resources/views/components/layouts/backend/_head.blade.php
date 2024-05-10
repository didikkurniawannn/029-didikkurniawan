<meta name="title" property="og:title" content="{{getAppName()}}">
<link rel="shortcut icon" href="{!! getAppFavicon() !!}" />
<meta name="description" property="og:description" content="{{getDescriptionName()}}">
<meta name="author" property="og:author" content="PT Mitra Sinerji Teknoindo">
<!-- Favicon icon -->
<link rel="icon" type="image/ico" sizes="16x16" href="{{ Storage::disk('public')->url(getApp()->favicon_url) }}">
<!-- Main CSS -->
<link href="{!! asset('backend/assets/css/style.min.css') !!}" rel="stylesheet">
<!-- select2 -->
<link href="{!! asset('backend/assets/node_modules/select2/dist/css/select2.min.css') !!}" rel="stylesheet">
<!-- sweetalert2 -->
<link href="{!! asset('backend/assets/node_modules/sweetalert2/dist/sweetalert2.min.css') !!}" rel="stylesheet">
<!-- toastr -->
<link href="{!! asset('backend/assets/node_modules/toastr/build/toastr.min.css') !!}" rel="stylesheet">
<!-- DataTables -->
<link href="{!! asset('backend/assets/node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css') !!}" rel="stylesheet">
<link href="{!! asset('backend/assets/node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') !!}" rel="stylesheet">
<!-- Bootstrap Datepicker -->
<link href="{!! asset('backend/assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}" rel="stylesheet">
<!-- Custom CSS, generated from SASS -->
<link href="{!! asset('backend/assets/css/custom.min.css') !!}" rel="stylesheet">
<link href="{!! asset('backend/assets/vendor/virtual-select/dist/virtual-select.min.css') !!}" rel="stylesheet">

@stack('css')