                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_toggle">
                    <!--begin::Header-->
                    <div class="app-sidebar-header d-none d-lg-flex px-6 pt-8 pb-4" id="kt_app_sidebar_header">
                        <!--begin::Toggle-->
                        <div type="button" data-kt-element="selected" class="btn btn-outline btn-custom btn-flex w-100"
                            data-kt-menu-trigger="click"  wire:ignore data-kt-menu-placement="bottom-start"
                            data-kt-menu-offset="0px, -1px">
                            <!--begin::Logo-->
                            <span class="d-flex flex-center flex-shrink-0 w-40px me-3">
                                <img alt="Logo"
                                    src="{{ Storage::disk('public')->url('logo/white_icon.png') }}"
                                    data-kt-element="logo" class="h-30px">
                            </span>
                            <!--end::Logo-->

                            <!--begin::Info-->
                            <span class="d-flex flex-column align-items-start flex-grow-1">
                                <span class="fs-5 fw-bold text-white text-uppercase" data-kt-element="title">
                                    {{ getAppName() }}
                                </span>
                            </span>
                            <!--end::Info-->

                        </div>
                        <!--end::Toggle-->

                    </div>
                    <!--end::Header-->
                    <div class="flex-grow-1">
                        <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-y" data-kt-scroll="true"
                            data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_header, #kt_app_sidebar_footer"
                            data-kt-scroll-offset="20px">
                            <div class="app-sidebar-navs-default px-5 mb-10">
                                <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                                    class="menu menu-column menu-rounded menu-sub-indention">
                                    <div class="separator mb-4 mx-4"></div>
                                    <!--begin:Menu item-->
                                    @foreach (menu(getRoleAksesLogin()) as $item)
                                    @if (cekChild($item->menu->id))
                                    <div data-kt-menu-trigger="click"  wire:ignore class="menu-item menu-sidebar menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon"><i
                                                    class="ki-outline {{ $item->menu->icon }} fs-2"></i></span>
                                            <span class="menu-title fw-normal">{{ $item->menu->menu }}</span>
                                            <span class="menu-arrow"></span></span>

                                        @foreach (menuChild($item->menu->id, getRoleAksesLogin()) as $value)

                                        <div class="menu-sub menu-sub-accordion">
                                            @if (cekChild($value->menu->id))
                                            <div data-kt-menu-trigger="click" wire:ignore class="menu-item menu-accordion">
                                                <span class="menu-link">
                                                    <span class="menu-icon"><i
                                                            class="ki-outline {{ $value->menu->icon }} fs-2"></i></span>
                                                    <span class="menu-title fw-normal">{{ $value->menu->menu }}</span>
                                                    <span class="menu-arrow"></span>
                                                </span>

                                                @foreach (menuChild($value->menu->id, getRoleAksesLogin()) as $values)
                                                <div class="menu-sub menu-sub-accordion">
                                                    <div class="menu-item menu-sidebar">
                                                        <a class="menu-link" href="{{ url($values->menu->url) }}">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title fw-normal">{{ $values->menu->menu}}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            @else
                                            <div class="menu-item menu-sidebar">
                                                <a class="menu-link" href="{{ url($value->menu->url) }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title fw-normal">{{ $value->menu->menu}}</span>
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                    @else
                                    <a class="menu-item menu-sidebar menu-accordion" href="{{ url($item->menu->url) }}">
                                        <span class="menu-link">
                                            <span class="menu-icon"><i
                                                    class="ki-outline {{ $item->menu->icon }} fs-2"></i></span>
                                            <span class="menu-title {{ isActiveMenu($item->menu->url) }}">{{ $item->menu->menu}}</span>
                                    </a>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--begin::Footer-->
                    <div class="d-flex flex-stack px-10 px-lg-15 pb-8" id="kt_app_sidebar_footer">
                        <span class="d-flex flex-center gap-1 text-white theme-light-show fs-5 px-0">
                            <i class="ki-outline ki-night-day text-gray-500 fs-2"></i> Dark Mode
                        </span>

                        <span class="d-flex flex-center gap-1 text-white theme-dark-show fs-5 px-0">
                            <i class="ki-outline ki-moon text-gray-500 fs-2"></i> Light Mode
                        </span>

                        <div data-bs-theme="dark">
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input h-25px w-45px" type="checkbox" value="1"
                                    id="kt_sidebar_theme_mode_toggle" />
                            </div>
                        </div>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Sidebar-->

                <!--begin::sidebar-panel-->

                <!--end::sidebar-panel-->

                @push('js')
                    <script>
                            // Menangani klik pada menu trigger

                            // $('[data-kt-menu-trigger="click"]').on('click', function(e) {
                            //     e.stopPropagation();
                            //     var currentMenu = $(this).closest('.menu-item');
                            //     currentMenu.toggleClass('show');
                            //     $('[data-kt-menu-trigger="click"]').not(currentMenu).removeClass('show');
                            // });

                            // document.addEventListener("livewire:load", function () {
                            // Livewire.on("mount", function () {
                            // KTMenu.init();
                            // });
                            // });

                            
                        $(document).ready(function() {
                            // Mendapatkan URL saat ini
                            var currentUrl = window.location.href;

                            // Mencari elemen menu yang sesuai dengan URL saat ini
                            var activeMenu = $('.menu-item.menu-sidebar.menu-accordion a').filter(function () {
                                return this.href === currentUrl;
                            });

                            // Menambahkan class "active" ke elemen menu dan semua parentnya
                            activeMenu.addClass('active').parents('.menu-item.menu-sidebar.menu-accordion')
                                .addClass('show fw-bold').removeClass('fw-normal');
                                
                            activeMenu.parents('.menu-item.menu-sidebar.menu-accordion').find('.menu-title').addClass('fw-bold').removeClass('fw-normal');

                            // Menambahkan class "hover show" pada elemen menu-sub menu-sub-accordion apabila aktif
                            $('.menu-sub.menu-sub-accordion.active').addClass('hover show fw-bold');

                            // Menambahkan class "hover show" pada elemen menu-item menu-sidebar menu-accordion apabila aktif
                            $('.menu-item.menu-sidebar.menu-accordion.active').addClass('hover show fw-bold');
                        });

                    </script>
                @endpush
                @push('css')
                <style>
                    .menu-sub.menu-sub-accordion {
                        display: none; /* Sembunyikan secara default */
                    }
                </style>
                @endpush

