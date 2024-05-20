@section('title')
Detail Profil Pengguna
@stop
@section('menu')
Akun > <b>Profil Pengguna</b>
@stop
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
                            Account </li>
                        <!--end::Item-->


                    </ul>
                    <!--end::Breadcrumb-->

                </div>
                <!--end::Toolbar wrapper--->

                <!--begin::Toolbar wrapper--->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">

                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">
                        <img alt="Logo" src="/metronic8/demo30/assets/media/svg/misc/layer.svg" class="h-60px me-5">

                        <!--begin::Title-->
                        <h1
                            class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                            Account Settings
                            <!--begin::Description-->
                            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">
                                Page Description </span>
                            <!--end::Description-->
                        </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar wrapper--->
            </div>
        </div>
        <!--end::Toolbar container-->
    </div>

    <!--end::Toolbar container--->
    <div class="app-container  container-xxl ">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content ">
                    <!--begin::Basic info-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Profile Details</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->

                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form"
                                class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">No
                                            Induk</label>
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="company"
                                                class="form-control form-control-lg form-control-solid @error('no_induk') is-invalid @enderror"
                                                placeholder="Ex:331222" wire:model="no_induk"
                                                placeholder="Company name">
                                            <input type="hidden"
                                                class="form-control  @error('user_id') is-invalid @enderror"
                                                wire:model="user_id" />
                                            @error('no_induk')
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama
                                            Lengkap</label>
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="text" name="nama"
                                                class="form-control form-control-lg form-control-solid @error('nama') is-invalid @enderror"
                                                wire:model="nama">
                                            @error('nama')
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Tanggal
                                            Lahir</label>
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input
                                                class="form-control form-control-solid flatpickr-input @error('tanggal_lahir') is-invalid @enderror"
                                                wire:model="tanggal_lahir" id="tanggal_lahir" type="text"
                                                readonly="readonly">
                                            @error('tanggal_lahir')
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input
                                                class="form-control form-control-solid flatpickr-input @error('email') is-invalid @enderror"
                                                wire:model="email" id="email" type="email">
                                            @error('email')
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Phone</label>
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input
                                                class="form-control form-control-solid flatpickr-input @error('phone') is-invalid @enderror"
                                                wire:model="phone" id="phone" type="tel">
                                            @error('phone')
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <textarea class="form-control  @error('alamat') is-invalid @enderror"
                                                placeholder="Ex:Foo" wire:model="alamat" cols="5" rows="2"></textarea>
                                            @error('alamat')
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <!--begin::Actions-->
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <button type="submit" wire:click.prevent="update" class="m-s-5 btn btn-success">
                                            <i class="fa fa-save"></i> Simpan <span wire:loading wire:target="update"
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></button>
                                    </div>
                                    <!--end::Actions-->
                                    <input type="hidden">
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Basic info-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->


            <!--begin::Footer-->
            <div id="kt_app_footer"
                class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024©</span>
                    <a href="https://keenthemes.com" target="_blank"
                        class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->

                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item"><a href="https://keenthemes.com" target="_blank"
                            class="menu-link px-2">About</a></li>

                    <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                            class="menu-link px-2">Support</a></li>

                    <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                            class="menu-link px-2">Purchase</a></li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->


    </div>
</div>
@push('meta')
<meta name="turbolinks-visit-control" content="reload">
<meta name="turbolinks-cache-control" content="no-cache">
@endpush
@push('js')
<script>
    $("#tanggal_lahir").flatpickr();
    $('#jenis_kelamin').on('change', function () {
        @this.set('jenis_kelamin', $('#jenis_kelamin').val(), true);
    });
</script>
@endpush