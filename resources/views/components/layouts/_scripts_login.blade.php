<script src="{!! asset('backend/assets/js/bootstrap.bundle.min.js') !!}"></script>

<?php if(getApp()->is_sso==1): ?>
<script src="{!! asset('backend/assets/js/checkCookies.js') !!}"></script>
<?php endif; ?>

@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@stack('js')