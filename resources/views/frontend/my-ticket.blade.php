@extends('components.layouts.frontend.app')
@section('title','My Ticket')
@section('content')

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
                        My Ticket </li>
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
                        class="h-60px me-5">

                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                        My Ticket
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
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Heading-->
                        <div class="card-px text-center pt-15 pb-15">
                            <!--begin::Title-->
                            <h2 class="fs-2x fw-bold mb-0">Informasi Reservasi Kehadiran Rapat</h2>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <p class="text-gray-500 fs-4 fw-semibold py-7">
                                Cari data berdasarkan no.peserta pada saat melakukan reservasi pendaftaran </p>
                            <!--end::Description-->
                            <input type="text" class="form-control py-4 mb-5"
                                style="text-transform: uppercase; width: 50%; margin: 0 auto;" placeholder="No. Peserta"
                                name="no_peserta" />
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_api_key">
                                Cari Data </a>
                            <!--end::Action-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Illustration-->
                        <div class="text-center pb-15 px-5">
                            <img src="{{ asset('frontend/assets/media/illustrations/sketchy-1/16.png') }}"
                                alt="" class="mw-100 h-200px h-sm-325px">
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
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

<!--end::Modal - Upgrade plan-->
<!--begin::Modal - Create Api Key-->
<div class="modal fade" id="kt_modal_create_api_key" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_create_api_key_header">
                <!--begin::Modal title-->
                <h2>Informasi Peserta</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary left" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i> </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Form-->
            <form id="kt_modal_create_api_key_form" class="form" action="#">
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_create_api_key_header"
                        data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">


                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                            <!--begin::Icon-->
                            <i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Rapat diselenggarakan 1h 3j 20m</h4>

                                    <div class="fs-6 text-gray-700 ">Mohon datang tepat waktu <a
                                            href="#">cetak tiket</a></div>
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->

                        <div id="kt_user_view_details" class="collapse show">
                            <div class="pb-5 fs-6">
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">No.Peserta</div>
                                <div class="text-gray-600">{{ $ticket['no_peserta'] }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Nama</div>
                                <div class="text-gray-600">{{ $ticket['name'] }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Email</div>
                                <div class="text-gray-600"><a href="#"
                                        class="text-gray-600 text-hover-primary">{{ $ticket['email'] }}</a></div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Kegiatan Rapat</div>
                                <div class="text-gray-600">{{ $ticket['kegiatan'] }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Tanggal</div>
                                <div class="text-gray-600">{{ $ticket['tanggal'] }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Jam</div>
                                <div class="text-gray-600">{{ $ticket['jam'] }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Lokasi</div>
                                <div class="text-gray-600">{{ $ticket['lokasi'] }}</div>
                                <!--begin::Details item-->
                            </div>
                        </div>
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">
                        Close
                    </button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_create_api_key_submit" class="btn btn-primary">
                        <span class="indicator-label">
                            Cetak
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Create Api Key-->
<!--begin::Modal - Users Search-->
@endsection
