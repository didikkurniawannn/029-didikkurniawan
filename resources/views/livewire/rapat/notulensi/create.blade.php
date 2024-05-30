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
            <div class="card card-flush pt-3 mb-5 mb-xl-12">
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
                                                <a href="#" class="text-gray-800 fw-bold mb-1 fs-6">{{ $val->nama }}</a>
                                                <span
                                                    class="text-gray-500 fw-semibold d-block fs-7">{{ $val->instansi }}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-start">
                                        <a href="#"
                                            class="text-gray-800 fw-bold d-block mb-1">{{ TglTimeIndo($val->tgl_registrasi) }}</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-gray-800 fw-bold d-block mb-1">
                                            {{ empty($val->tgl_kehadiran) ? 'Belum Hadir' : TglTimeIndo($val->tgl_kehadiran) }}</a>
                                    </td>
                                    <td class="text-center">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckStatus{{ $val->id }}" wire:click="status({{ $val->id }})"
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
                                    $(document).ready(function() {
                                        var targetDate = new Date('{{ $notulensi->tanggal_mulai }}');
                                        var countdownDisplay = $('#countdown');
        
                                        function countdown() {
                                            setInterval(function() {
                                                var now = new Date();
                                                var difference = now - targetDate;
        
                                                var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                                                var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                                                var seconds = Math.floor((difference % (1000 * 60)) / 1000);
        
                                                var displayText = "";
                                                displayText = hours + " jam " + minutes + " menit " + seconds + " detik";
        
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