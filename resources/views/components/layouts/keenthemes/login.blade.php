<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" property="og:title" content="{{getAppName()}}">
    <link rel="shortcut icon" href="{!! getAppFavicon() !!}" />
    <meta name="description" property="og:description" content="{{getDescriptionName()}}">
    <meta name="author" property="og:author" content="{{getAppName()}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{!! asset('backend/themes/assets/plugins/global/plugins.bundle.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('backend/themes/assets/css/style.bundle.css') !!}" rel="stylesheet" type="text/css" />
    @livewireStyles
    @stack('css')
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
        window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
        if ( localStorage.getItem("data-bs-theme") !== null ) {
        themeMode = localStorage.getItem("data-bs-theme");
        } else {
        themeMode = defaultThemeMode;
        }			
        }

        if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">

        {{ $slot }}

    </div>
    <!--end::Root-->

    <script>
        var hostUrl = "{!! asset('backend/themes/assets/') !!}";        
    </script>
    <script src="{!! asset('backend/themes/assets/plugins/global/plugins.bundle.js') !!}"></script>
    <script src="{!! asset('backend/themes/assets/js/scripts.bundle.js') !!}"></script>
    <script src="{!! asset('backend/themes/assets/js/custom/authentication/sign-in/general.js') !!}"></script>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    @stack('js')
</body>
</html>