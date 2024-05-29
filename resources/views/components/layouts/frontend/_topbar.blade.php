<!--begin::Header-->
<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}"
    data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">

    <!--begin::Header container-->
    <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between "
        id="kt_app_header_container">
        <!--begin::Header mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-35px h-35px"
                id="kt_app_header_menu_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i> </div>
        </div>
        <!--end::Header mobile toggle-->

        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
            <a href="index.html">
                <img alt="Logo"
                    src="{{ Storage::disk('public')->url('logo/green_logo.png') }}"
                    class="h-70px d-lg-none" />
                <img alt="Logo"
                    src="{{ Storage::disk('public')->url('logo/green_logo.png') }}"
                    class="h-70px d-none d-lg-inline app-sidebar-logo-default theme-light-show" />
                <img alt="Logo"
                    src="{{ Storage::disk('public')->url('logo/green_logo.png') }}"
                    class="h-70px d-none d-lg-inline app-sidebar-logo-default theme-dark-show" />
            </a>
        </div>
        <!--end::Logo-->

        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class=" menu  
                menu-rounded 
                menu-active-bg 
                menu-state-primary 
                menu-column 
                menu-lg-row 
                menu-title-gray-700 
                menu-icon-gray-500 
                menu-arrow-gray-500 
                menu-bullet-gray-500 
                my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0
            " id="kt_app_header_menu" data-kt-menu="true">
                    @foreach(menuUtama() as $menu)
                    <a href="{{ route($menu->url) }}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="-50,0"
                        class="menu-item {{trim($__env->yieldContent('mainMenu')) == $menu->menu ? 'here show' : ''}} menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">{{$menu->menu}}</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <!--end:Menu link-->
                    </a>
                    @endforeach
                    <!--end:Menu item-->
                    
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->

            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">

                <!--begin::Chat-->
                <div class="app-navbar-item ms-1 ms-lg-5">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative"
                        id="kt_drawer_chat_toggle">
                        <a href="{{ route('login') }}"
                            class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed">
                            <span data-kt-toggle-text-target="true">Login</span>
                            <i class="ki-outline ki-entrance-left toggle-off fs-2 me-0"></i>
                        </a>
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Chat-->
                <!--end::User menu-->
                <!--begin::Header menu toggle-->
                <!--end::Header menu toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
