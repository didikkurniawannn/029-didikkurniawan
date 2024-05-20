@section('title')
Ubah Password
@stop
@section('menu')
Akun > <b>Ubah Password</b>
@stop
<!--begin::Col-->
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
                  <div class="card mb-5 mb-xl-10">
                    <form class="form">
                      <div class="p-5 p-lg-15">
                        <div id="kt_password_meter_example" class="fv-row" data-kt-password-meter="true">
                          <div class="mb-1">
                            <label class="form-label fw-semibold fs-6 mb-2">
                              Password Baru
                            </label>
                            <div class="position-relative mb-3">
                              <input class="form-control form-control-lg form-control-solid  @error('password') is-invalid @enderror"
                                type="password" wire:model="password" name="password" autocomplete="off" />
                              <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                data-kt-password-meter-control="visibility">
                                <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span></i>
                                <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></i>
                              </span>
                            </div>
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                          </div>
                          @error('password')
                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                          <div class="text-muted mb-5">
                            Min. 8 karakter, terdiri dari kombinasi huruf kecil, huruf kapital, simbol, dan angka
                          </div>
                        </div>

                        <div id="kt_password_meter_example" class="fv-row" data-kt-password-confirm-meter="true">
                          <div class="mb-1">
                            <label class="form-label fw-semibold fs-6 mb-2">
                              Ulangi Password Baru
                            </label>
                            <div class="position-relative mb-3">
                              <input
                                class="form-control form-control-lg form-control-solid @error('password_confirm') is-invalid @enderror"
                                type="password" wire:model="password_confirm" name="password_confirm" autocomplete="off" />
                              <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                data-kt-password-confirm-meter-control="visibility">
                                <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span></i>
                                <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></i>
                              </span>
                            </div>
                            <div class="d-flex align-items-center mb-3" data-kt-password-confirm-meter-control="highlight">
                              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                              <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                          </div>
                          @error('password_confirm')
                          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                          <div class="text-muted">
                            Min. 8 karakter, terdiri dari kombinasi huruf kecil, huruf kapital, simbol, dan angka
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-end py-6 px-9">
                        <button type="submit" wire:click.prevent="store" class="m-s-5 btn btn-success"> <i class="fa fa-save"></i>
                          Simpan <span wire:loading wire:target="store"
                            class="spinner-border spinner-border-sm align-middle ms-2"></span></button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>