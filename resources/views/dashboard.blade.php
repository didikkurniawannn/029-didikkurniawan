@extends('components.layouts.backend.app')
@section('title','Dashboard')
@section('content')
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-3">
            <!--begin::Card widget 3-->
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                style="background-color: #F1416C;background-image:url('{!! asset('backend/themes/assets/media/svg/shapes/wave-bg-red.svg') !!}">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-3">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center rounded-circle h-80px w-80px"
                        style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                        <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                    </div>
                    <!--end::Icon-->
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end mb-3">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center">
                        <span class="fs-4hx text-white fw-bold me-6">1.2k</span>

                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">Sudah Lunas</span>
                            <span class="">Bulan Ini</span>
                        </div>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Card body-->

                <!--begin::Card footer-->
                <div class="card-footer"
                    style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                    <!--begin::Progress-->
                    <div class="fw-bold text-white py-2">
                        <span class="fs-1 d-block">935</span>
                        <span class="opacity-50">SSPD Lunas Tahun Ini</span>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Card widget 3-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-3">
            <!--begin::Card widget 3-->
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                style="background-color: #05a5bb;background-image:url('{!! asset('backend/themes/assets/media/svg/shapes/wave-bg-purple.svg') !!}">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-3">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center rounded-circle h-80px w-80px"
                        style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #05a5bb">
                        <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                    </div>
                    <!--end::Icon-->
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end mb-3">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center">
                        <span class="fs-4hx text-white fw-bold me-6">427</span>

                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">Belum Lunas</span>
                            <span class="">Bulan Ini</span>
                        </div>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Card body-->

                <!--begin::Card footer-->
                <div class="card-footer"
                    style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                    <!--begin::Progress-->
                    <div class="fw-bold text-white py-2">
                        <span class="fs-1 d-block">386</span>
                        <span class="opacity-50">SSPD Belum Lunas Tahun Ini</span>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Card widget 3-->
        </div>


        <!--begin::Col-->
        <div class="col-xl-3">
            <!--begin::Card widget 3-->
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                style="background-color: #7bab42;background-image:url('{!! asset('backend/themes/assets/media/svg/shapes/wave-bg-purple.svg') !!}">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-3">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center rounded-circle h-80px w-80px"
                        style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7bab42">
                        <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                    </div>
                    <!--end::Icon-->
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end mb-3">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center">
                        <span class="fs-4hx text-white fw-bold me-6">427</span>

                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">Setoran</span>
                            <span class="">Bulan Ini</span>
                        </div>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Card body-->

                <!--begin::Card footer-->
                <div class="card-footer"
                    style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                    <!--begin::Progress-->
                    <div class="fw-bold text-white py-2">
                        <span class="fs-1 d-block">386</span>
                        <span class="opacity-50">Setoran Tahun Ini</span>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Card widget 3-->
        </div>


        <!--begin::Col-->
        <div class="col-xl-3">
            <!--begin::Card widget 3-->
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                style="background-color: #e18603;background-image:url('{!! asset('backend/themes/assets/media/svg/shapes/wave-bg-purple.svg') !!}">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-3">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center rounded-circle h-80px w-80px"
                        style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #e18603">
                        <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                    </div>
                    <!--end::Icon-->
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end mb-3">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center">
                        <span class="fs-4hx text-white fw-bold me-6">427</span>

                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">Kurang Bayar</span>
                            <span class="">Bulan Ini</span>
                        </div>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Card body-->

                <!--begin::Card footer-->
                <div class="card-footer"
                    style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                    <!--begin::Progress-->
                    <div class="fw-bold text-white py-2">
                        <span class="fs-1 d-block">386</span>
                        <span class="opacity-50">SSPD Kurang Bayar Tahun Ini</span>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Card widget 3-->
        </div>

    </div>
@endsection
