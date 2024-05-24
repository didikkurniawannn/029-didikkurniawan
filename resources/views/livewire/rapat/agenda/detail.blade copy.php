<div>
    @section('title')
    4. Resume Rapat
    @stop
    @section('menu')
    Buat Rapat > <b>4. Resume Rapat</b>
    @stop
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Layout-->
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
                                        @if(!empty($objek_pajak->jenisPerolehan->nm_jenis_transaksi))
                                            {{ $objek_pajak->jenisPerolehan->nm_jenis_transaksi }}
                                        @endif
                                    </h4>
                                    <small class="text-muted">Layanan BPHTB</small>
                                </div>
                            </div>
                        </div>
                                    
                                    <button wire:click="$dispatch('openModal', { component: 'main.layanan.bphtb.modal.timeline' , arguments: { id: {{ $this->id_bphtb }} }})" class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="bi bi-clock-history fs-1"></i>                             
                                    </button>  
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-3">

                        @livewire('Main.Layanan.Bphtb.Detail.Head',[Crypt::encrypt($this->id_bphtb)])

                    </div>

                    <div class="card-footer">
                        
                        @if ($pembayaran_pajak->validasi_id==1 || $pembayaran_pajak->validasi_id==2)
                        <div class="separator separator-dashed mb-7"></div>
                            <center>
                                <div class="d-grid gap-2">
                                    <a class="btn btn-warning text-center btn-block" wire:click="editDokumenValidasi">
                                        <span wire:loading class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        Upload Dokumen Validasi
                                    </a>
                                </div>
                        </center>
                        @endif

                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <div>
                    <div class="card-header align-items-center border-0 mb-10">
                        <h3 class="fw-bold text-gray-900 m-0">Detail Objek Pajak</h3>
                    </div>
                    <div>
                        <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">

                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-user fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Pihak 1
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
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2 active"
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-user-tick fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Pihak 2
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
                                            <i class="ki-duotone ki-map fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Objek Pajak
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
                                            <i class="ki-duotone ki-questionnaire-tablet fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Self Assesment
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
                            @if(!empty($objek_pajak_verifikasi))
                            <!--begin::Item-->
                            <li class="nav-item mb-3" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5"
                                    aria-selected="true" role="tab">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-brifecase-tick fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Office Assesment
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

                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                                     data-bs-toggle="pill" href="#kt_stats_widget_2_tab_6"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-document fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
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



                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6" role="timeline">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                                     data-bs-toggle="pill" href="#timeline"
                                    aria-selected="false" role="tab" tabindex="-1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-timer fs-2qx text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        
                                        </span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                        Timeline
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
                                                        Pihak Ke-2
                                                    </h4>
                                                    <small class="text-muted">Penerima Hak/Informasi Pembeli/Penerima
                                                        Waris/Penerima
                                                        Hibah/Pemenang Lelang</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                        @if ($pembayaran_pajak->status_validasi == 4 || $pembayaran_pajak->step != 5)
                                            <a class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
                                                title="Ubah Data"
                                                wire:click="$dispatch('openModal', { component: 'main.layanan.bphtb.modal.penerima-hak' , arguments: { id: {{ $this->id_bphtb }} }})">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                        @livewire('Main.Layanan.Bphtb.Detail.PenerimaHak',[Crypt::encrypt($this->id_bphtb)])
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
                                                        Pihak Ke-1
                                                    </h4>
                                                    <small class="text-muted">Pelepas Hak/Informasi Penjual/Pemberi
                                                        Waris/Pemberi
                                                        Hibah/Penyelanggara Lelang</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                        @if ($pembayaran_pajak->status_validasi == 4 || $pembayaran_pajak->step != 5)
                                            <a class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
                                                title="Ubah Data"
                                                wire:click="$dispatch('openModal', { component: 'main.layanan.bphtb.modal.pelepas-hak' , arguments: { id: {{ $this->id_bphtb }} }})">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                        @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                        @livewire('Main.Layanan.Bphtb.Detail.PelepasHak',[Crypt::encrypt($this->id_bphtb)])
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
                                                        Informasi Objek Pajak
                                                    </h4>
                                                    <small class="text-muted">Informasi Nomor Objek Pajak (SPPT)</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            @if ($pembayaran_pajak->status_validasi == 4 || $pembayaran_pajak->step != 5)
                                                <a class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1" title="Ubah Data"
                                                wire:click="editObjekPajak">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                        @livewire('Main.Layanan.Bphtb.Detail.ObjekPajak',[Crypt::encrypt($this->id_bphtb)])
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
                                                    <h4>Perhitungan Objek Pajak: Self Assesment</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            @if ($pembayaran_pajak->status_validasi == 4 || $pembayaran_pajak->step != 5)
                                                <a class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1" title="Ubah Data"
                                                wire:click="editObjekPajak">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                        @livewire('Main.Layanan.Bphtb.Detail.Perhitungan',[Crypt::encrypt($this->id_bphtb)])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->

                            @if(!empty($objek_pajak_verifikasi))
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_5" role="tabpanel">
                                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                    <div class="card-header" data-bs-toggle="collapse">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="mb-0 mt-1">
                                                        Perhitungan Objek Pajak: Office Assesment
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <!-- <a class="btn btn-sm btn-icon btn-light-success btn-active-light-default me-1" title="Ubah Data"
                                            wire:click="$dispatch('openModal', { component: 'main.layanan.bphtb.modal.penerima-hak' , arguments: { id: {{ $this->id_bphtb }} }})">
                                                <i class="bi bi-pencil-square"></i>
                                            </a> -->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                        @livewire('Main.Layanan.Bphtb.Detail.PerhitunganVerifikasi',[Crypt::encrypt($this->id_bphtb)])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->
                            @endif

                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_6" role="tabpanel">
                                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                    <div class="card-header" data-bs-toggle="collapse">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="mb-0 mt-1">
                                                        Lampiran Berkas
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->

                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            @if ($pembayaran_pajak->status_validasi == 4 || $pembayaran_pajak->step != 5)
                                                <a class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1" title="Ubah Data"
                                                wire:click="editMaps">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                        @livewire('Main.Layanan.Bphtb.Detail.Lampiran',[Crypt::encrypt($this->id_bphtb)])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->


                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="timeline" role="tabpanel">
                                <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                    <div class="card-header" data-bs-toggle="collapse">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="mb-0 mt-1">
                                                        Lacak Pengajuan
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Card title-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-3">
                                        @livewire('Main.Layanan.Bphtb.Detail.Timeline',[$this->id_bphtb])
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            <!--end::Tap pane-->


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
                            <h4>Pembayaran</h4>
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
                        @livewire('Main.Layanan.Bphtb.Detail.Pembayaran',[Crypt::encrypt($this->id_bphtb)])
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
    </div>

</div>


