<div>
    @section('title')
    Informasi Pendaftaran
    @stop
    @section('mainMenu')
    Home
    @stop
    @section('subMenu')
    Pendaftaran
    @stop
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
                            Informasi Pendaftaran </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-outline ki-right fs-4 text-white mx-n1"></i> </li>
                        <!--end::Item-->


                        <!--begin::Item-->
                        {{-- <li class="breadcrumb-item text-white fw-bold lh-1">
                            information invoice </li> --}}
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->

                </div>
                <!--end::Toolbar wrapper--->

                <!--begin::Toolbar wrapper--->
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">

                    <!--begin::Page title-->
                    <div class="page-title d-flex align-items-center me-3">
                        <img alt="Logo" src="{{ asset('frontend/assets/media/svg/misc/layer.svg') }}"
                            class="h-60px me-5" />

                        <!--begin::Title-->
                        <h1
                            class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                            Pendaftaran
                            <!--begin::Description-->
                            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">
                                Information Pendaftaran </span>
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

                    <!--begin::Invoice 2 main-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-20">
                            <!--begin::Layout-->
                            <div class="d-flex flex-column flex-xl-row">
                                <!--begin::Content-->
                                <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                                    <!--begin::Invoice 2 content-->
                                    <div class="mt-n1">
                                        <!--begin::Top-->
                                        <div class="d-flex flex-stack pb-10">
                                            <!--begin::Logo-->
                                            <a>
                                                <img alt="Logo" class="h-60px me-5"
                                                    src="{{ Storage::disk('public')->url('logo/green_logo.png') }}">
                                            </a>
                                            <!--end::Logo-->

                                            <!--begin::Action-->
                                            <div class="text-justify-end">
                                                @if($rapat->tanggal_mulai && !empty($notulensi->tanggal_mulai))
                                                <a wire:click="setKehadiran({{$kehadiran->id}})" class="btn btn-sm btn-primary">Absen Hadir</a>
                                                @endif
                                                <a href="{{ route('cetak',[Crypt::encrypt($kehadiran->id)]) }}" target="_blank" class="btn btn-sm btn-success">Cetak Tiket</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Top-->

                                        <!--begin::Wrapper-->
                                        <div class="m-0">
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-3 text-gray-800 mb-8">Kode.Reg #{{ $kehadiran->no_registrasi }}</div>
                                            <!--end::Label-->

                                            <!--begin::Row-->
                                            <div class="row g-5 mb-11">
                                                <!--end::Col-->
                                                <h5 class="fw-bolder text-gray-800">{{ $rapat->nama_rapat }}</h5>

                                                <div class="col-sm-6">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Tanggal:</div>
                                                    <!--end::Label-->

                                                    <!--end::Col-->
                                                    <div class="fw-bold fs-6 text-gray-800">{{ $tanggal }}</div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Col-->

                                                <!--end::Col-->
                                                <div class="col-sm-6">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Jam:</div>
                                                    <!--end::Label-->

                                                    <!--end::Info-->
                                                    <div
                                                        class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                        <span class="pe-2">{{ $jam }}</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                            <!--begin::Row-->
                                            <div class="row g-5 mb-12">
                                                <!--end::Col-->
                                                <div class="col-sm-6">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Agenda:</div>
                                                    <!--end::Label-->

                                                    <!--end::Text-->
                                                    <div class="fw-bold fs-6 text-gray-800">{!! $rapat->agenda !!}</div>
                                                    <!--end::Text-->

                                                    <!--end::Description-->
                                                    {{-- <div class="fw-semibold fs-7 text-gray-600">
                                                        8692 Wild Rose Drive <br>
                                                        Livonia, MI 48150
                                                    </div> --}}
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Col-->

                                                <!--end::Col-->
                                                <div class="col-sm-6">
                                                    <!--end::Label-->
                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">Lokasi:</div>
                                                    <!--end::Label-->

                                                    <!--end::Text-->
                                                    <div class="fw-bold fs-6 text-gray-800">{{ $rapat->tempat }}</div>
                                                    <!--end::Text-->

                                                    <!--end::Description-->
                                                    <div class="fw-semibold fs-7 text-gray-600">
                                                        {{ $alamat }}
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Invoice 2 content-->
                                </div>
                                <!--end::Content-->

                                <!--begin::Sidebar-->
                                <div class="m-0">
                                    <!--begin::Invoice 2 sidebar-->
                                    <div
                                        class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                                        <!--begin::Labels-->
                                        <div class="mb-8">
                                            <span class="badge badge-light-success me-2">reservasi</span>
                                            @if (!empty($kehadiran->status_kehadiran))
                                                <span class="badge badge-light-warning">hadir</span>
                                            @endif
                                        </div>
                                        <!--end::Labels-->

                                        <!--begin::Title-->
                                        <h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">RESERVASI DETAILS</h6>
                                        <!--end::Title-->

                                        <!--begin::Item-->
                                        <div class="mb-6">
                                            <div class="fw-semibold text-gray-600 fs-7">Nama:</div>

                                            <div class="fw-bold text-gray-800 fs-6">{{ $kehadiran->nama }}</div>
                                            <div class="fw-bold text-gray-800 fs-6">{{ $kehadiran->nip }}</div>
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="mb-6">
                                            <div class="fw-semibold text-gray-600 fs-7">Instansi:</div>

                                            <div class="fw-bold text-gray-800 fs-6">
                                                {{ $kehadiran->jabatan }} <br>
                                                {{ $kehadiran->instansi }}
                                            </div>
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="mb-15">
                                            <div class="fw-semibold text-gray-600 fs-7">Contact:</div>

                                            <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center">
                                                Telp : {{ $kehadiran->no_telp }}
                                            </div>
                                            <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center">
                                                Email : {{ $kehadiran->email }}
                                            </div>
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Title-->
                                        <h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">INFORMATION DATE
                                        </h6>
                                        <!--end::Title-->

                                        <!--begin::Item-->
                                        <div class="mb-6">
                                            <div class="fw-semibold text-gray-600 fs-7">No Registrasi</div>

                                            <div class="fw-bold fs-6 text-gray-800">
                                                {{ $kehadiran->no_registrasi }}
                                            </div>
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="mb-6">
                                            <div class="fw-semibold text-gray-600 fs-7">Tanggal Daftar:</div>

                                            <div class="fw-bold text-gray-800 fs-6">                                                
                                                {{ TglTimeIndo($kehadiran->tgl_registrasi) }}
                                            </div>
                                        </div>
                                        <!--end::Item-->

                                    </div>
                                    <!--end::Invoice 2 sidebar-->
                                </div>
                                <!--end::Sidebar-->
                            </div>
                            <!--end::Layout-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Invoice 2 main-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer"
                    class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">
                    <!--begin::Copyright-->
                    <div class="text-gray-900 order-2 order-md-1">
                        {{ getApp()->description }}
                    </div>
                    <!--end::Copyright-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper container-->
    </div>
</div>