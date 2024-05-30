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
                    @livewire('Rapat.Agenda.Detail.HeadNotulensi',[Crypt::encrypt($this->idRapat)])
                </div>

                <!--end::Card body-->
            </div>


            <div class="card-header align-items-center border-0 mb-10">
                <h3 class="fw-bold text-gray-900 m-0">Resume Rapat</h3>
            </div>
            <div wire:ignore>
                <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">

                    <!--begin::Item-->
                    <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary 
                            flex-column overflow-hidden w-110px h-85px pt-5 pb-2 {{$active == 'catatan' ? 'active' : '' }}"
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
                        <a class=" {{$active == 'foto' ? 'active' : '' }} nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2 "
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
                                Foto Rapat
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
                        <a class="{{$active == 'document' ? 'active' : '' }} nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-110px h-85px pt-5 pb-2"
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
                                Lampiran
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
                <div class="tab-content" wire:ignore>

                    <!--begin::Tap pane-->
                    <div class="tab-pane fade {{$active == 'catatan' ? 'active show' : '' }}" id="kt_stats_widget_2_tab_1" role="tabpanel">
                        <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <div class="card-header" data-bs-toggle="collapse">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="mb-0 mt-1">
                                            Catatan
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body">
                                <form wire:submit="updateCatatan">
                                        <div class="row">
                                            <div class="col-md-12 input-group-sm mb-3" wire:ignore>
                                                <label for="rengkuman_diskusi">Rangkuman<span class="text-danger">*</span></label>
                                                <textarea class="form-control mt-1 @error('rengkuman_diskusi') is-invalid @enderror" name="rengkuman_diskusi" id="rengkuman_diskusi" wire:model="rengkuman_diskusi">{{!empty($rengkuman_diskusi) ? $rengkuman_diskusi : ''}}</textarea>
                                                @error('rengkuman_diskusi')
                                                    <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 input-group-sm mb-3" wire:ignore>
                                                <label for="kesimpulan">Kesimpulan<span class="text-danger">*</span></label>
                                                <textarea class="form-control mt-1 @error('kesimpulan') is-invalid @enderror" name="kesimpulan" id="kesimpulan" wire:model="kesimpulan">{{!empty($kesimpulan) ? $kesimpulan : ''}}</textarea>
                                                @error('kesimpulan')
                                                    <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 input-group-sm mb-3" wire:ignore>
                                                <label for="tindak_lanjut">Tindak Lanjut<span class="text-danger">*</span></label>
                                                <textarea class="form-control mt-1 @error('tindak_lanjut') is-invalid @enderror" name="tindak_lanjut" id="tindak_lanjut" wire:model="tindak_lanjut">{{!empty($tindak_lanjut) ? $tindak_lanjut : ''}}</textarea>
                                                @error('tindak_lanjut')
                                                    <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <div class="btn-list">
                                            <button type="submit" class="btn btn-info float-end" wire:loading.class.remove="bg-info" id="next">
                                                Simpan <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end::Tap pane-->

                    <!--begin::Tap pane-->
                    <div class="tab-pane fade {{$active == 'foto' ? 'active show' : '' }}" id="kt_stats_widget_2_tab_2" role="tabpanel">
                        <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <div class="card-header" data-bs-toggle="collapse">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="mb-0 mt-1">
                                                Foto Rapat
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-3">
                                <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="py-5" data-bs-theme="light">
                                                <x-filepond title="Lampiran Pendukung" required="required"
                                                    file-document="document" data-max-file-size="1MB" wire:model="foto"
                                                    id="foto" multiple allowImagePreview imagePreviewMaxHeight="200"
                                                    allowFileTypeValidation
                                                    acceptedFileTypes="['image/jpg', 'image/jpeg','image/png']"
                                                    allowFileSizeValidation />
                                            </div>
                                            @if(!empty($fotoList))
                                                <div class="row g-10 row-cols-2 row-cols-lg-5">
                                                @foreach ($fotoList as $val)
                                                    <div class="col">
                                                        <a class="d-block overlay" data-fslightbox="lightbox-hot"
                                                            href="{{Storage::disk('public')->url($val)}}">
                                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                                style="background-image:url('{{Storage::disk('public')->url($val)}}')">
                                                            </div>
                                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                                <i class="ki-outline ki-eye fs-3x text-white"></i> </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <div class="btn-list">
                                            <button wire:click="updateFoto" class="btn btn-info float-end" wire:loading.class.remove="bg-info" id="next">
                                                Simpan <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end::Tap pane-->

                    <!--begin::Tap pane-->
                    <div class="tab-pane fade {{$active == 'document' ? 'active show' : '' }}" id="kt_stats_widget_2_tab_3" role="tabpanel">
                        <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <div class="card-header" data-bs-toggle="collapse">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="mb-0 mt-1">
                                                Lampiran
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-3">
                            <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="py-5" data-bs-theme="light">
                                                <x-filepond title="Lampiran Pendukung" required="required"
                                                    file-document="document" data-max-file-size="1MB" wire:model="document"
                                                    id="document" multiple allowImagePreview imagePreviewMaxHeight="200"
                                                    allowFileTypeValidation
                                                    acceptedFileTypes="['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']"
                                                    allowFileSizeValidation />
                                            </div>
                                            @if(!empty($documentList))
                                            <div class="row g-10 row-cols-2 row-cols-lg-5">
                                                @foreach ($documentList as $doc)
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <!--Begin::Portlet-->
                                                    <div class="card border border-dashed d-flex flex-column p-6 gap-10 flex-grow-1 mb-2 ms-4">
                                                        <div class="kt-portlet__head kt-portlet__head--noborder">
                                                            <div class="kt-portlet__head-label">
                                                                <h3 class="kt-portlet__head-title">

                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="kt-portlet__body">
                                                            <!--begin::Widget -->
                                                            <div class="py-10 text-center">
                                                                <div class="kt-widget__media">
                                                                    <img class="kt-widget__img kt-hidden-"
                                                                        src="{{ asset('backend/themes/assets/media/svg/files/pdf.svg') }}"
                                                                        alt="image">
                                                                </div>
                                                                
                                                                <a href="{{Storage::disk('public')->url($doc)}}" target="_blank" class="kt-widget__desc">
                                                                {{str_replace("rapat/notulensi/document", "", $doc)}}
                                                                </a>        
                                                            </div>
                                                            <!--end::Widget -->
                                                        </div>
                                                    </div>
                                                    <!--End::Portlet-->
                                                </div>
                                                @endforeach
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <div class="btn-list">
                                            <button wire:click="updateDoc" class="btn btn-info float-end" wire:loading.class.remove="bg-info" id="next">
                                                Simpan <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
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
                                </div>
                                <!--end::Card toolbar-->
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


@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
                ClassicEditor
                .create(document.querySelector('#rengkuman_diskusi'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                    @this.set('rengkuman_diskusi', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
                ClassicEditor
                .create(document.querySelector('#kesimpulan'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                    @this.set('kesimpulan', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
                ClassicEditor
                .create(document.querySelector('#tindak_lanjut'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                    @this.set('tindak_lanjut', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
    </script>
    @endpush
    @push('css')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet">
    @endpush

    @push('js')
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        FilePond.registerPlugin(FilePondPluginFileValidateType);
        FilePond.registerPlugin(FilePondPluginFileValidateSize);
        FilePond.registerPlugin(FilePondPluginImagePreview);
    </script>
    @endpush
