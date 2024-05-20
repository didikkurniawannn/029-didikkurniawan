<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" property="og:title" content="{{ getAppName() }}">
    <meta name="description" property="og:description" content="{{ getDescriptionName() }}">

    <meta name="author" property="og:author" content="Management Rapat">
    <x-layouts.login.partials.css/>
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

        @yield('content')

    </div>
    <!--end::Root-->
    <x-layouts.login.partials.js/>
</body>
</html>

