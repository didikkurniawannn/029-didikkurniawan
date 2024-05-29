<div>
    <!--begin::Toolbar-->
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
                            <a href="/metronic8/demo30/index.html" class="text-white text-hover-primary">
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
                            Contact Us </li>
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
                            class="h-60px me-5">

                        <!--begin::Title-->
                        <h1
                            class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                            Contact Us
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

                    <!--begin::Contact-->
                    <div class="card ">
                        <!--begin::Body-->
                        <div class="card-body p-lg-17">
                            <!--begin::Row-->
                            <div class="row g-5 mb-5 mb-lg-15 ">
                                <!--begin::Col-->
                                <div class="col-sm-6 pe-lg-10">
                                    <!--begin::Phone-->
                                    <div
                                        class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-briefcase fs-3tx text-primary"></i>
                                        <!--end::Icon-->

                                        <!--begin::Subtitle-->
                                        <h1 class="text-gray-900 fw-bold my-5">
                                            Layanan Bantuan
                                        </h1>
                                        <!--end::Subtitle-->

                                        <!--begin::Number-->
                                        <div class="text-gray-700 fw-semibold fs-2">
                                            {{ $data->phone }}
                                        </div>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Phone-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-sm-6 ps-lg-10">
                                    <!--begin::Address-->
                                    <div
                                        class="text-center bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-geolocation fs-3tx text-primary"></i>
                                        <!--end::Icon-->

                                        <!--begin::Subtitle-->
                                        <h1 class="text-gray-900 fw-bold my-5">
                                            Location
                                        </h1>
                                        <!--end::Subtitle-->

                                        <!--begin::Description-->
                                        <div class="text-gray-700 fs-3 fw-semibold">
                                            {{ $data->address }}
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Address-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->



                            <!--begin::Card-->
                            <div class="card mb-4 bg-light text-center ">
                                <!--begin::Body-->
                                <div class="card-body py-12">
                                    <!--begin::Icon-->
                                    <a target="_blank" href="{{ $data->facebook }}" class="mx-4">
                                        <img src="{{ asset('frontend/assets/media/svg/brand-logos/facebook-4.svg') }}"
                                            class="h-30px my-2" alt="">
                                    </a>
                                    <!--end::Icon-->

                                    <!--begin::Icon-->
                                    <a target="_blank" href="{{ $data->instagram }}" class="mx-4">
                                        <img src="{{ asset('frontend/assets/media/svg/brand-logos/instagram-2-1.svg') }}"
                                            class="h-30px my-2" alt="">
                                    </a>
                                    <!--end::Icon-->

                                    <!--begin::Icon-->
                                    <a target="_blank" href="{{ $data->twitter }}" class="mx-4">
                                        <img src="{{ asset('frontend/assets/media/svg/brand-logos/github.svg') }}"
                                            class="h-30px my-2" alt="">
                                    </a>
                                    <!--end::Icon-->

                                    <!--begin::Icon-->
                                    <a target="_blank" href="{{ $data->youtube }}" class="mx-4">
                                        <img src="{{ asset('frontend/assets/media/svg/brand-logos/youtube-play.svg') }}"
                                            class="h-30px my-2" alt="">
                                    </a>
                                    <!--end::Icon-->


                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Contact-->


                </div>
                <!--end::Content-->

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