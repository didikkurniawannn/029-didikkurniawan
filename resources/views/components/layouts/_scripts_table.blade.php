<!-- jQuery -->
<script src="{!! asset('backend/assets/node_modules/jquery/dist/jquery.min.js') !!}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('backend/assets/js/bootstrap.bundle.min.js') !!}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{!! asset('backend/assets/js/perfect-scrollbar.jquery.min.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/toastr/build/toastr.min.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/select2/dist/js/select2.full.min.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/bootstrap-datepicker/js/locales/bootstrap-datepicker.id.js') !!}"></script>
<!-- CKEditor 4 -->
<script src="{!! asset('backend/assets/node_modules/ckeditor4/ckeditor.js') !!}"></script>
<script src="{!! asset('backend/assets/node_modules/ckeditor4/plugins/editorplaceholder/plugin.js') !!}"></script>

<!--Wave Effects -->
<script src="{!! asset('backend/assets/js/waves.js') !!}"></script>
<!--Menu sidebar -->
<script src="{!! asset('backend/assets/js/sidebarmenu.js') !!}"></script>
<!--Custom JavaScript -->
<script src="{!! asset('backend/assets/js/script.min.js') !!}"></script>
<script src="{!! asset('backend/assets/js/custom.js') !!}"></script>
<script src="{!! asset('backend/assets/vendor/virtual-select/dist/virtual-select.min.js') !!}"></script>
@livewireScripts
<script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> 
<x-livewire-alert::flash />

@stack('js')