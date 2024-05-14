@extends('components.layouts.frontend.app')
@section('title','Home')
@section('content')
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
                            Beranda </li>
                        <!--end::Item-->


                    </ul>
                    <!--end::Breadcrumb-->

                </div>
                <!--end::Toolbar wrapper--->

                <!--begin::Toolbar wrapper--->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">

                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">
                        <img alt="Logo"
                            src="{{ asset('frontend/assets/media/svg/misc/layer.svg') }}"
                            class="h-60px me-5" />

                        <!--begin::Title-->
                        <h1
                            class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                            Beranda
                            <!--begin::Description-->
                            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">
                                Page Beranda </span>
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
                    <div class="position-relative mb-17">
                        <!--begin::Overlay-->
                        <div class="overlay overlay-show">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px"
                                style="background-image:url('{{ asset('frontend/assets/media/stock/1600x800/img-1.jpg') }}')">
                            </div>
                            <!--end::Image-->

                            <!--begin::layer-->
                            <div class="overlay-layer rounded bg-black" style="opacity: 0.4">
                            </div>
                            <!--end::layer-->
                        </div>
                        <!--end::Overlay-->

                        <!--begin::Heading-->
                        <div class="position-absolute text-white mb-8 ms-10 bottom-0">
                            <!--begin::Title-->
                            <h3 class="text-white fs-2qx fw-bold mb-3 m">Selamat Datang Management Rapat</h3>
                            <!--end::Title-->

                            <!--begin::Text-->
                            <div class="fs-5 fw-semibold">
                                Aplikasi dibuat berkaitan dengan Management Rapat yang akan digunakan untuk Pemerintah
                                Kabupaten Bandung. dengan aplikasi ini diharapkan event yang dibuat dapat mudah
                                dipublikasi sehingga peserta rapat dapat mempelajari apa yang akan di akan dibahas pada
                                rapat tersebut.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Heading-->
                    </div>
                    <!--begin::Inbox App - View & Reply -->
                    <div class="d-flex flex-column flex-lg-row">

                        <div class="col-lg-12 col-xl-12 col-xxl-6 mb-10 mb-xl-0">

                            <!--begin::Timeline widget 3-->
                            <div class="card h-md-100">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Daftar Agenda Rapat</span>

                                        {{-- <span class="text-muted mt-1 fw-semibold fs-7">Total 424,567 deliveries</span> --}}
                                    </h3>

                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        {{-- <a href="#" class="btn btn-sm btn-light">Report Cecnter</a> --}}
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div class="card-body pt-7 px-0">
                                    <!--begin::Nav-->
                                    <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5"
                                        role="tablist">
                                        @for ($i=1;$i<=15;$i++)
                                            <!--begin::Nav item-->
                                            <li class="nav-item p-0 ms-0" role="presentation">
                                                <!--begin::Date-->
                                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger {{ $i == 5 ? 'active' : ''}}"
                                                    data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_{{ $i }}"
                                                    aria-selected="false" tabindex="-1" role="tab">
                                                    <span class="fs-7 fw-semibold">2024</span>
                                                    <span class="fs-6 fw-bold">{{ $i }}</span>
                                                </a>
                                                <!--end::Date-->
                                            </li>
                                            <!--end::Nav item-->
                                        @endfor
                                    </ul>
                                    <!--end::Nav-->

                                    <!--begin::Tab Content (ishlamayabdi)-->
                                    <div class="tab-content mb-2 px-9">
                                        @for ($i=1;$i<=15;$i++)
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade {{ $i == 5 ? 'show active' : ''}} " id="kt_timeline_widget_3_tab_content_{{ $i }}"
                                            role="tabpanel">

                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center mb-6">
                                                <!--begin::Bullet-->
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                                <!--end::Bullet-->

                                                <!--begin::Info-->
                                                <div class="flex-grow-1 me-5">
                                                    <!--begin::Time-->
                                                    <div class="text-gray-800 fw-semibold fs-2">
                                                    09:00 - Selesai
                                                        <span class="text-gray-500 fw-semibold fs-7">
                                                            WIB </span>
                                                    </div>
                                                    <!--end::Time-->

                                                    <!--begin::Description-->
                                                    <div class="text-gray-700 fw-semibold fs-6">
                                                        Rapat Evaluasi Penilaian SPBE TA 2024 </div>
                                                    <!--end::Description-->

                                                    <!--begin::Link-->
                                                    <div class="text-gray-500 fw-semibold fs-7">
                                                        diselenggarakan oleh
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="text-primary opacity-75-hover fw-semibold">Diskominfo</a>
                                                        <!--end::Name-->
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Info-->

                                                <!--begin::Action-->
                                                <a href="{{ route('detail-rapat') }}" class="btn btn-sm btn-light">Detail</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center mb-6">
                                                <!--begin::Bullet-->
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                                <!--end::Bullet-->

                                                <!--begin::Info-->
                                                <div class="flex-grow-1 me-5">
                                                    <!--begin::Time-->
                                                    <div class="text-gray-800 fw-semibold fs-2">
                                                        13:00 - Selesai
                                                        <span class="text-gray-500 fw-semibold fs-7">
                                                            WIB </span>
                                                    </div>
                                                    <!--end::Time-->

                                                    <!--begin::Description-->
                                                    <div class="text-gray-700 fw-semibold fs-6">
                                                        Rapat Perencanaan Pembuatan Master Plan Smart City </div>
                                                    <!--end::Description-->

                                                    <!--begin::Link-->
                                                    <div class="text-gray-500 fw-semibold fs-7">
                                                        diselenggarakan oleh
                                                        <!--begin::Name-->
                                                        <a href="#"
                                                            class="text-primary opacity-75-hover fw-semibold">Setda Kab Bandung</a>
                                                        <!--end::Name-->
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Info-->

                                                <!--begin::Action-->
                                                <a href="{{ route('detail-rapat') }}" class="btn btn-sm btn-light">Detail</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center mb-6">
                                                <!--begin::Bullet-->
                                                <span data-kt-element="bullet"
                                                    class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                                <!--end::Bullet-->

                                                <!--begin::Info-->
                                                <div class="flex-grow-1 me-5">
                                                    <!--begin::Time-->
                                                    <div class="text-gray-800 fw-semibold fs-2">
                                                        08:30 - Selesai
                                                        <span class="text-gray-500 fw-semibold fs-7">
                                                            WIB </span>
                                                    </div>
                                                    <!--end::Time-->

                                                    <!--begin::Description-->
                                                    <div class="text-gray-700 fw-semibold fs-6">
                                                        Pembahasan aplikasi monitoring harga komoditas </div>
                                                    <!--end::Description-->

                                                    <!--begin::Link-->
                                                    <div class="text-gray-500 fw-semibold fs-7">
                                                        diselenggarakan oleh
                                                        <!--begin::Name-->
                                                        <a href="#" class="text-primary opacity-75-hover fw-semibold">
                                                            Disdagin
                                                        </a>
                                                        <!--end::Name-->
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Info-->

                                                <!--begin::Action-->
                                                <a href="{{ route('detail-rapat') }}" class="btn btn-sm btn-light">Detail</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tap pane-->

                                        @endfor
                                        

                                    </div>
                                    <!--end::Tab Content-->

                                    <!--begin::Action-->
                                    <div class="float-end d-none">
                                        <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_create_project">Add Lesson</a>

                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Timeline widget 3-->

                        </div>
                    </div>
                    <!--end::Inbox App - View & Reply -->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer"
                class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    {{ $data['copyright'] }}
                </div>
                <!--end::Copyright-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->
    </div>
    <!--end::Wrapper container-->
</div>

@endsection
