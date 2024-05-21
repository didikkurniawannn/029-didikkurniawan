<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('meta')
    <title>@yield('title')</title>
    <meta name="title" property="og:title" content="Management Rapat">
    <link rel="shortcut icon" href="{!! getAppFavicon() !!}" />
    <meta name="description" property="og:description" content="-">
    <meta name="author" property="og:author" content="PT Mitra Sinerji Teknoindo">
    <!-- Favicon icon -->
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ Storage::disk('public')->url(getAppFavicon()) }}">

    @include('components.layouts.backend.partials.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
    @livewireStyles
    @stack('css')
</head>
<!--end::Head-->

<!--begin::Body-->
<!--begin::Theme mode setup on page load-->

<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" class="app-default">

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header " data-kt-sticky="true"
                data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-sticky"
                data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex flex-stack " id="kt_app_header_container">
                    <!--begin::Header logo-->
                    <div class="d-flex d-lg-none align-items-center me-lg-20 gap-1 gap-lg-2">
                        <!--begin::Mobile toggle-->
                        <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px d-flex d-lg-none"
                            id="kt_app_sidebar_toggle">
                            <i class="ki-outline ki-abstract-14 lh-0 fs-1"></i>
                        </div>
                        <!--end::Mobile toggle-->
                        <!--begin::Logo image-->
                        <a href="index-2.html">
                            <img alt="Logo" src="{{ asset('backend/themes/assets/media/logos/demo63.svg') }}"
                                class="h-25px theme-light-show" />
                            <img alt="Logo" src="{{ asset('backend/themes/assets/media/logos/demo63-dark.svg') }}"
                                class="h-25px theme-dark-show" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Header logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">
                        <!--begin::Page title-->
                        <div class="app-page-title d-flex flex-column gap-1 me-3 mb-5 mb-lg-0" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Title-->
                            <h1 class="fs-2 text-gray-900 fw-bold m-0">
                                {{getAppName()}}
                            </h1>
                            <!--end::Title-->
                            <span class="fs-base fw-semibold text-gray-500">
                                @yield('menu')
                            </span>
                        </div>
                        <!--end::Page title-->

                        <!--begin::Navbar-->
                        <x-layouts.backend._topbar></x-layouts.backend._topbar>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

                <x-layouts.backend._sidebar></x-layouts.backend._sidebar>
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->

                            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                                <!--begin::Content wrapper-->
                                <div class="d-flex flex-column flex-column-fluid">
                                    <!--begin::Content-->
                                    <div id="kt_app_content" class="app-content  flex-column-fluid ">
                                        <!--begin::Content container-->
                                        <div id="kt_app_content_container" class="app-container container-fluid">
                                            <!--begin::Layout-->
                                            <div class="d-flex flex-column flex-lg-row">

                                                <!--begin::Content-->
                                                <div class="flex-lg-row-fluid mb-10 mb-lg-0">
                                                      {{$slot}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end::Content container-->
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Content wrapper-->


                            <!--begin::Footer-->
                            <x-layouts.backend._footer></x-layouts.backend._footer>

                            <!--end::Footer-->
                        </div>
                        <!--end:::Main-->


                    </div>
                    <!--end::Wrapper-->


                </div>
                <!--end::Page-->
            </div>
            <!--end::App-->


            <!--end::Drawers-->
            <!--begin::Engage-->
            <!-- <div class="app-engage " id="kt_app_engage"></div> -->
            <!--end::Engage-->
            <!--begin::Modal - Sitemap-->
            <div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1"
                aria-hidden="true">
            </div>
            <!--end::Engage modals-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <i class="ki-outline ki-arrow-up"></i>
            </div>
            <!--end::Scrolltop-->
            <!--end::Theme mode setup on page load-->
            @include('components.layouts.backend.partials.js')
            <script>
                var defaultThemeMode = "light";
                var themeMode;
        
                if (document.documentElement) {
                    if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                    } else {
                        if (localStorage.getItem("data-bs-theme") !== null) {
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

</body>

</html>