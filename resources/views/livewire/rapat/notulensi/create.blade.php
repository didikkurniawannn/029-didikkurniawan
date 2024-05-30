<div>
    @section('title')
    Presensi Rapat
    @stop
    @section('menu')
    Notulensi > <b>Presensi Rapat</b>
    @stop
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
            <!--begin::Card-->
            <div class="card card-flush pt-3 mb-5 mb-xl-12">

                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="mb-0 mt-1">
                                    Presensi Rapat
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!--begin::Card title-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body">
                    @livewire('Rapat.Agenda.Detail.HeadNotulensi',[Crypt::encrypt($this->idRapat)])
                </div>

                <!--end::Card body-->
            </div>


            <div class="card-header align-items-center border-0 mb-10">
                <h3 class="fw-bold text-gray-900 m-0">Resume Rapat</h3>
            </div>
            <div>
                <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">

                    <!--begin::Item-->
                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2 active"
                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1" aria-selected="false" role="tab"
                            tabindex="-1">
                            <!--begin::Icon-->
                            <div class="nav-icon">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-information fs-2qx text-primary"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                </span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Subtitle-->
                            <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                Catatan
                            </span>
                            <!--end::Subtitle-->

                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->

                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2 "
                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2" aria-selected="false" role="tab"
                            tabindex="-1">
                            <!--begin::Icon-->
                            <div class="nav-icon">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-time fs-2qx text-primary"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i>
                                </span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Subtitle-->
                            <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                Dokumentasi Foto
                            </span>
                            <!--end::Subtitle-->

                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3" aria-selected="false" role="tab"
                            tabindex="-1">
                            <!--begin::Icon-->
                            <div class="nav-icon">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-people fs-2qx text-primary"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i>
                                </span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Subtitle-->
                            <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                File Pendukung
                            </span>
                            <!--end::Subtitle-->

                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4" aria-selected="false" role="tab"
                            tabindex="-1">
                            <!--begin::Icon-->
                            <div class="nav-icon">
                                <span class="symbol-label">
                                    <i class="ki-duotone ki-tablet-book fs-2qx text-primary"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                </span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Subtitle-->
                            <span class="nav-text text-gray-600 fw-bold fs-6 lh-1 text-center mt-2">
                                Presensi
                            </span>
                            <!--end::Subtitle-->

                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                    </li>
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
                                    <a href="{{route('rapat.form.informasi',[Crypt::encrypt($this->idRapat)])}}"
                                        class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
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
                                    <a href="{{route('rapat.form.lokasi',[Crypt::encrypt($this->idRapat)])}}"
                                        class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
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
                                    <a href="{{route('rapat.form.peserta',[Crypt::encrypt($this->idRapat)])}}"
                                        class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
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
                                    <a href="{{route('rapat.form.peserta',[Crypt::encrypt($this->idRapat)])}}"
                                        class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
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
        </div>
        <!--end::Content-->

        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-300px mb-10 order-1 order-lg-2"
            id="subscription-summary">
            <!--begin::Card-->
            <div class="card border border-dashed d-flex flex-column p-6 gap-10 flex-grow-1 mb-2 ms-4">
                <div class="d-flex flex-stack">
                    <div
                        class="d-flex flex-center h-40px w-40px flex-shrink-0 rounded-circle bg-gray-100 border border-gray-200">
                        <i class="ki-outline ki-timer text-gray-600 lh-0 fs-2"></i> </div>
                    @if(empty($notulensi->tanggal_mulai))
                    <a href="#" wire:click="startRapat" class="btn btn-light-primary font-weight-bolder btn-sm">
                        Mulai Rapat
                    </a>
                    @elseif(!empty($notulensi->tanggal_mulai) && !empty($notulensi->tanggal_selesai))
                    <a class="btn btn-light-warning font-weight-bolder btn-sm">
                        Rapat Selesai
                    </a>
                    @else
                    <a href="#" wire:click="endRapat" class="btn btn-light-danger font-weight-bolder btn-sm">
                        Selesai Rapat
                    </a>
                    @endif
                </div>

                <div class="d-flex text-center flex-column">
                    <span class="fs-base text-gray-500">
                        Rapat Berlangsung </span>
                    <span class="fs-4 fw-bold text-gray-800">
                        @if(empty($notulensi->tanggal_mulai))
                        <div class="badge badge-light-danger">Rapat belum dimulai</div>
                        @else
                        @if(!empty($notulensi->lama_berlangsung))
                        <div class="mb-2 fw-bold">{{ $notulensi->lama_berlangsung }}</div>
                        @else
                        <div class="mb-2 fw-bold" id="countdown"></div>
                        @push('js')
                        <script>
                            $(document).ready(function () {
                                var targetDate = new Date('{{ $notulensi->tanggal_mulai }}');
                                var countdownDisplay = $('#countdown');

                                function countdown() {
                                    setInterval(function () {
                                        var now = new Date();
                                        var difference = now - targetDate;

                                        var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / ( 1000 * 60 * 60));
                                        var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((difference % (1000 * 60)) / 1000);

                                        var displayText = "";
                                        displayText = hours + " jam " + minutes + " menit " + seconds +" detik";

                                        countdownDisplay.html(displayText);
                                    }, 1000);
                                }

                                countdown(); // Memulai countdown saat dokumen siap
                            });
                        </script>
                        @endpush
                        @endif
                        @endif
                    </span>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
    </div>
    <!--end::Layout-->
</div>
</div>