<div>
    @section('title')
    4. Resume Rapat
    @stop
    @section('menu')
    Buat Rapat > <b>4. Resume Rapat</b>
    @stop
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                <!--begin::Card-->
                <div class="card card-flush pt-3 mb-5 mb-xl-10">

                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="mb-0 mt-1">
                                        Resume Rapat
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!--begin::Card title-->
                        <div class="card-toolbar">
                            @if($data_rapat->finish == 1 && $data_rapat->status == 3)
                            <a href="{{route('notulensi.cetak',[Crypt::encrypt($this->idRapat)])}}" target="_blank" class="btn btn-light-danger font-weight-bolder btn-sm">
                                Cetak
                            </a>
                            @endif
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body">
                        @livewire('Rapat.Agenda.Detail.Head',[Crypt::encrypt($this->idRapat)])
                    </div>

                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <div>
                    <div class="card-header align-items-center border-0 mb-10">
                        <h3 class="fw-bold text-gray-900 m-0">Detail Rapat</h3>
                    </div>
                    <div>
                        <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">

                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2 active"
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-information fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Informasi
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

                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2 "
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-time fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Waktu & Lokasi
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
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-people fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Peserta
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
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-tablet-book fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
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
                            @if($data_rapat->finish == 1)
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-check-square fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Reservasi
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
                            @endif
                        </ul>
                        <!--end::Nav-->

                        <!--begin::Tab Content-->
                        <div class="tab-content">

                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_stats_widget_2_tab_1" role="tabpanel">
                                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                    <div class="card-header" data-bs-toggle="collapse">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="mb-0 mt-1">
                                                        Informasi Rapat
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                        @if ($data_rapat->step == 3 || $data_rapat->finish != 1)
                                            <a href="{{route('rapat.form.informasi',[Crypt::encrypt($this->idRapat)])}}" class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
                                                title="Ubah Data">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body">
                                         @livewire('Rapat.Agenda.Detail.Informasi',[Crypt::encrypt($this->idRapat)])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->

                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_2" role="tabpanel">
                                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                    <div class="card-header" data-bs-toggle="collapse">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="mb-0 mt-1">
                                                        Waktu & Lokasi
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                        @if ($data_rapat->step == 3 || $data_rapat->finish != 1)
                                            <a href="{{route('rapat.form.lokasi',[Crypt::encrypt($this->idRapat)])}}" class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
                                                title="Ubah Data">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                         @livewire('Rapat.Agenda.Detail.Lokasi',[Crypt::encrypt($this->idRapat)])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->

                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_3" role="tabpanel">
                                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                    <div class="card-header" data-bs-toggle="collapse">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="mb-0 mt-1">
                                                        Peserta
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            @if ($data_rapat->step == 3 || $data_rapat->finish != 1)
                                                <a href="{{route('rapat.form.peserta',[Crypt::encrypt($this->idRapat)])}}" class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
                                                    title="Ubah Data">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                         @livewire('Rapat.Agenda.Detail.Peserta',[Crypt::encrypt($this->idRapat)])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->

                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_4" role="tabpanel">
                                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                    <div class="card-header" data-bs-toggle="collapse">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>Lampiran</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            @if ($data_rapat->step == 3 || $data_rapat->finish != 1)
                                                <a href="{{route('rapat.form.peserta',[Crypt::encrypt($this->idRapat)])}}" class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
                                                    title="Ubah Data">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                         @livewire('Rapat.Agenda.Detail.Lampiran',[Crypt::encrypt($this->idRapat)])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->

                            @if($data_rapat->status == 1 || $data_rapat->status == 3)
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_5" role="tabpanel">
                                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                    <div class="card-header" data-bs-toggle="collapse">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="mb-0 mt-1">
                                                        Peserta Sudah Terdaftar
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                         @livewire('Rapat.Agenda.Detail.Reservasi',[Crypt::encrypt($this->idRapat)])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->
                            @endif



                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
            </div>
            <!--end::Content-->

            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-300px mb-10 order-1 order-lg-2"
                id="subscription-summary">
                <!--begin::Card-->
                <div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary"
                    data-kt-sticky-offset="{default: false, lg: '200px'}"
                    data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto"
                    data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95" style="">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h4>Dibuat Oleh : </h4>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::More options-->
                            
                            <!--end::Menu-->
                            <!--end::More options-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0 fs-6">
                        @livewire('Rapat.Agenda.Detail.Sidebar',[Crypt::encrypt($this->idRapat)])
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
    </div>



