<div>
    <div id="kt_app_toolbar" class="app-toolbar  py-6 ">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex align-items-start ">
            <!--begin::Toolbar container-->
            <div class="d-flex flex-column flex-row-fluid">
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-center pt-1">

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold">

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-white fw-bold lh-1">
                            <a href="#" class="text-white text-hover-primary">
                                <i class="ki-outline ki-home text-white fs-3"></i>
                            </a>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i> </li>
                        <!--end::Item-->


                        <!--begin::Item-->
                        <li class="breadcrumb-item text-white fw-bold lh-1">
                            Home </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i> </li>
                        <!--end::Item-->


                        <!--begin::Item-->
                        <li class="breadcrumb-item text-white fw-bold lh-1">
                            Details </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->

                </div>
                <!--end::Toolbar wrapper--->

                <!--begin::Toolbar wrapper--->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">

                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">
                        <img alt="Logo" src="{{ asset('frontend/assets/media/svg/misc/layer.svg') }}"
                            class="h-60px me-5" />

                        <!--begin::Title-->
                        <h1
                            class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                            Detail
                            <!--begin::Description-->
                            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">
                                Page Detail </span>
                            <!--end::Description-->
                        </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar wrapper--->
            </div>
            <!--end::Toolbar container--->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Wrapper container-->
    <div class="app-container  container-xxl ">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content ">
                    <div class="card card-flush mb-xxl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">{{$data_rapat->nama_rapat}}</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2" aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:/metronic/theme/html/demo5/dist/assets/media/svg/icons/Files/File.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <title>Stockholm-icons / Files / File</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"></rect>
                                            <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"></rect>
                                        </g>
                                    </svg><!--end::Svg Icon-->
                                    </span>  
                                    <span class="d-none d-md-inline">Konfirmasi Kehadiran</span>
                                </button>
                                <!--begin::Menu 2-->

                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-150px h-85px py-4 active"
                                        data-bs-toggle="pill" href="#kt_stats_widget_1_tab_1" aria-selected="true"
                                        role="tab" tabindex="-1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <i class="ki-duotone ki-information fs-3x">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">
                                            Informasi Acara
                                        </span>
                                        <!--end::Subtitle-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-150px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_1_tab_2" aria-selected="false"
                                        role="tab" tabindex="-1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <i class="ki-duotone ki-calendar-2 fs-3x">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">
                                            Waktu dan Lokasi
                                        </span>
                                        <!--end::Subtitle-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-150px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_1_tab_3" aria-selected="false"
                                        role="tab" tabindex="-1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <i class="ki-duotone ki-people fs-3x">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">
                                            Daftar Peserta
                                        </span>
                                        <!--end::Subtitle-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-150px h-85px py-4"
                                        data-bs-toggle="pill" href="#kt_stats_widget_1_tab_4" aria-selected="false"
                                        role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon">
                                            <i class="ki-duotone ki-file-down fs-3x">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">
                                            Lampiran
                                        </span>
                                        <!--end::Subtitle-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                {{-- <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-150px h-85px py-4"
                                    data-bs-toggle="pill" href="#kt_stats_widget_1_tab_5" aria-selected="false"
                                    role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <i class="ki-duotone ki-printer fs-3x">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">
                                        Cetak Tiket
                                    </span>
                                    <!--end::Subtitle-->

                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li> --}}
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->

                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <x-detail.informasi :id="$data_rapat->id"></x-detail.informasi>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <x-detail.waktu :id="$data_rapat->id"></x-detail.waktu>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <x-detail.peserta :id="$data_rapat->id"></x-detail.peserta>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <x-detail.lampiran :id="$data_rapat->id"></x-detail.lampiran>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>

                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer"
                    class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">
                    <!--begin::Copyright-->
                    <div class="text-gray-900 order-2 order-md-1">
                        copyright
                    </div>
                    <!--end::Copyright-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper container-->
    </div>
</div>