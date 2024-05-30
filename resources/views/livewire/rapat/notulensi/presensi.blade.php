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
                        @livewire('Rapat.Agenda.Detail.Head',[Crypt::encrypt($this->idRapat)])
                    </div>

                    <!--end::Card body-->
                </div>
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
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-hover table-bordered">
                                <!--begin::Table head-->
                                <thead class="thead-light">
                                    <tr class="fs-5 fw-bold text-gray-800 border-bottom-0">
                                        <th scope="col">Nama</th>
                                        <th scope="col">Registrasi</th>
                                        <th scope="col">Kehadiran</th>
                                        <th scope="col">Approve</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
            
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach($reservasi as $val)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold mb-1 fs-6">{{ $val->nama }}</a>
                                                    <span class="text-gray-500 fw-semibold d-block fs-7">{{ $val->instansi }}</span>
                                                </div>
                                            </div>
                                        </td>
            
                                        <td class="text-start">
                                            <a href="#" class="text-gray-800 fw-bold d-block mb-1">{{ TglTimeIndo($val->tgl_registrasi) }}</a>
                                        </td>
                                        <td>
                                            <a href="#" class="text-gray-800 fw-bold d-block mb-1">
                                                {{ empty($val->tgl_kehadiran) ? 'Belum Hadir' : TglTimeIndo($val->tgl_kehadiran) }}</a>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckStatus{{ $val->id }}"
                                                    wire:click="status({{ $val->id }})"
                                                    {{$val->status_verifikasi == 1 ? 'checked' : '' }} />
                                        </td>
            
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->
    </div>



