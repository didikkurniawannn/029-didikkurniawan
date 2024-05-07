<!-- jQuery -->
<script src="{!! asset('backend/assets/node_modules/jquery/dist/jquery.min.js') !!}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('backend/assets/js/bootstrap.bundle.min.js') !!}"></script>
<!-- chart.js -->
<script src="{!! asset('backend/assets/node_modules/chart.js/dist/chart.umd.js') !!}"></script>
<!-- select2 -->
<script src="{!! asset('backend/assets/node_modules/select2/dist/js/select2.full.min.js') !!}"></script>
<!-- sweetalert2 -->
<script src="{!! asset('backend/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js') !!}"></script>
<!-- toastr -->
<script src="{!! asset('backend/assets/node_modules/toastr/build/toastr.min.js') !!}"></script>
<!-- CKEditor 4 -->
<script src="{!! asset('backend/assets/node_modules/ckeditor4/ckeditor.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/ckeditor4/plugins/editorplaceholder/plugin.js') !!}"></script>
<!-- DataTables -->
<script src="{!! asset('backend/assets/node_modules/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/datatables.net-bs5/js/dataTables.bootstrap5.min.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/datatables.net-responsive/js/dataTables.responsive.min.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') !!}"></script>
<!-- Bootstrap Datepicker -->
<script src="{!! asset('backend/assets/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/bootstrap-datepicker/js/locales/bootstrap-datepicker.id.js') !!}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{!! asset('backend/assets/js/perfect-scrollbar.jquery.min.js') !!}"></script>
<!--Wave Effects -->
<script src="{!! asset('backend/assets/js/waves.js') !!}"></script>
<!--Menu sidebar -->
<script src="{!! asset('backend/assets/js/sidebarmenu.js') !!}"></script>
<!--Custom JavaScript -->
<script src="{!! asset('backend/assets/js/script.min.js') !!}"></script>
<script src="{!! asset('backend/assets/js/custom.js') !!}"></script>
{{-- <script src="{!! asset('backend/assets/js/mailbox-interactive.js') !!}"></script> --}}
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@stack('js')