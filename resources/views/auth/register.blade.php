@extends('components.layouts.login.app')
@section('title', 'Register')
@section('content')
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
        <!--begin::Form-->
        <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10">
  
                <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_up_form"
                    data-kt-redirect-url="/metronic8/demo1/authentication/layouts/corporate/sign-in.html" action="#">
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-gray-900 fw-bolder mb-3">
                            Sign Up
                        </h1>
                        <!--end::Title-->

                        <!--begin::Subtitle-->
                        {{-- <div class="text-gray-500 fw-semibold fs-6">
                            Your Social Campaigns
                        </div> --}}
                        <!--end::Subtitle--->
                    </div>
                    <!--begin::Heading-->

                    <!--begin::Input group--->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <!--begin::Email-->
                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent">
                        <!--end::Email-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>

                    <!--begin::Input group-->
                    <div class="fv-row mb-8 fv-plugins-icon-container" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input class="form-control bg-transparent" type="password" placeholder="Password" name="password"
                                    autocomplete="off">

                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="ki-duotone ki-eye-slash fs-2"></i> <i class="ki-duotone ki-eye fs-2 d-none"></i> </span>
                            </div>
                            <!--end::Input wrapper-->

                            <!--begin::Meter-->
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                            <!--end::Meter-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Hint-->
                        <div class="text-muted">
                            Gunakan 8 karakter atau lebih dengan campuran huruf, angka & simbol.
                        </div>
                        <!--end::Hint-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group--->

                    <!--end::Input group--->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <!--begin::Repeat Password-->
                        <input type="text" placeholder="Repeat Password" name="confirm-password" autocomplete="off"
                            class="form-control bg-transparent">
                        <!--end::Repeat Password-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group--->


                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_up_submit" class="btn btn-success">

                            <!--begin::Indicator label-->
                            <span class="indicator-label">
                                Sign up</span>
                            <!--end::Indicator label-->

                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator progress--> </button>
                    </div>
                    <!--end::Submit button-->

                    <!--begin::Sign up-->
                    <div class="text-gray-500 text-center fw-semibold fs-6">
                        Sudah Punya Akun ?

                        <a href="{{ route('login') }}" class="link-success fw-semibold">
                            Sign in
                        </a>
                    </div>
                    <!--end::Sign up-->
                </form>
            </div>
        </div>
    </div>

    <!--begin::Aside-->
    <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 bg-success">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
            <!--begin::Image-->
            <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                src="{!! asset('backend/themes/assets/media/misc/intro-data.svg') !!}" alt="" />
            <!--end::Image-->

            <!--begin::Title-->
            <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                Sistem Informasi Management Rapat
            </h1>
            <!--end::Title-->

            <!--begin::Text-->
            <div class="d-none d-lg-block text-white fs-base text-center">
                Mr - Versi 1.0 - Hak Cipta © 2024 Didik Kurniawan
            </div>
            <!--end::Text-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Aside-->
</div>
@endsection
