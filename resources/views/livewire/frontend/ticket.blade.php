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
                                Cari data berdasarkan No Registrasi yang tertera pada saat melakukan pendaftaran </p>
                            <!--end::Description-->
                            <input type="text" class="form-control py-4 mb-5"
                                style="text-transform: uppercase; width: 50%; margin: 0 auto;" wire:model="no_registrasi" placeholder="No. Registrasi"
                                name="no_registrasi" />
                            <!--begin::Action-->
                            <a wire:click="checkRegistrasi" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
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
                copyright
            </div>
            <!--end::Copyright-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end:::Main-->


</div>

</div>
