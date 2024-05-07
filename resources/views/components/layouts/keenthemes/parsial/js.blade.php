<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('backend/themes/assets/plugins/global/plugins.bundle.js'); }}"></script>
<script src="{{ asset('backend/themes/assets/js/scripts.bundle.js'); }}"></script>
<script src="{{ asset('backend/themes/assets/plugins/custom/datatables/datatables.bundle.js'); }}"></script>

<script src="{{ asset('backend/themes/assets/plugins/custom/fslightbox/fslightbox.bundle.js'); }}"></script>

<!-- jQuery -->
@livewireScripts
@livewire('wire-elements-modal')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@stack('js')
<x-livewire-alert::scripts />
<x:pharaonic-select2::scripts />
