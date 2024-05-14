
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ Storage::disk('public')->url('favicon/favicon.ico') }}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{!! asset('backend/themes/assets/plugins/global/plugins.bundle.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/themes/assets/css/style.bundle.css') !!}" rel="stylesheet" type="text/css" />
    @stack('css')
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
        window.top.location.replace(window.self.location.href);
        }
    </script>