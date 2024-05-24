@section('title')
3. Peserta Agenda Rapat
@stop
@section('menu')
Buat Rapat > <b>3. Peserta Agenda Rapat</b>
@stop
@section('step')
75%
@stop
<div>
    @if(View::hasSection('step'))
    <div class="col-md-12">
        <div class="progress-outer">
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active"
                    style="width:@yield('step'); box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);"></div>
                <div class="progress-value">@yield('step')</div>
            </div>
        </div>
    </div>
    @endif
    <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xl-12 mb-10">
            <!--begin::Lists Widget 19-->
            <div class="card h-xl-100">
                <form wire:submit='update'>
                    <div class="card-body">
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Pilih Target Kuesioner<span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-10">
                                    <select class="form-control" id="kt_select2_3" id="peserta_id"
                                        wire:model="peserta_id" multiple="multiple">
                                        @foreach($listSkpd as $val)
                                        <option value="{{$val->id}}"
                                            {{is_array($peserta_id) && in_array($val->id, $peserta_id) ? 'selected' : '' }}>
                                            {{$val->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('peserta_id') <span class="invalid-feedback"
                                        role="alert">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Keterangan tambahan untuk peserta yang hadir</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea
                                        class="form-control mt-1 @error('keterangan_peserta') is-invalid @enderror"
                                        name="keterangan_peserta" id="keterangan_peserta"
                                        wire:model="keterangan_peserta">
                                        {{!empty($keterangan_peserta) ? $keterangan_peserta : ''}}
                                    </textarea>
                                    @error('keterangan_peserta')
                                    <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-label">Lampiran Pendukung</label>
                                </div>
                                <div class="col-md-10">
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
                                        @foreach ($documentList as $val)
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

                                                        <a href="{{Storage::disk('public')->url($val)}}" target="_blank" class="kt-widget__desc">
                                                        {{str_replace("rapat/lampiran/", "", $val)}}
                                                        </a>        
                                                    </div>
                                                    <!--end::Widget -->
                                                </div>
                                            </div>
                                            <!--End::Portlet-->
                                        </div>
                                        <!-- <div class="col">
                                                <a class="d-block overlay" data-fslightbox="lightbox-hot"
                                                    href="{{Storage::disk('public')->url($val)}}">
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                        style="background-image:url('{{Storage::disk('public')->url($val)}}')">
                                                    </div>
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                        <i class="ki-outline ki-eye fs-3x text-white"></i> </div>
                                                </a>
                                            </div> -->
                                        @endforeach
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card-footer py-6 px-9">
                        <div class="btn-list ">
                            <a wire:click="backForm" class="btn btn-warning float-start mb-5">
                                <i class="fa fa-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-info float-end mb-5"
                                wire:loading.class.remove="bg-info" id="next">
                                Selanjutnya <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('css')
    <style>
        body {
            cursor: default;
        }

        .progress-outer {
            background: #fff;
            border-radius: 50px;
            padding: 25px;
            margin: 10px 0;
            box-shadow: 0 0 10px rgba(209, 219, 231, 0.7);
        }

        .progress {
            height: 27px;
            margin: 0;
            overflow: visible;
            border-radius: 50px;
            background: #eaedf3;
            box-shadow: inset 0 10px 10px rgba(244, 245, 250, 0.9);
        }

        .progress .progress-bar {
            border-radius: 50px;
        }

        .progress .progress-value {
            position: relative;
            left: -45px;
            top: 4px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            letter-spacing: 2px;
        }

        /* .progress-bar.active{
                animation: reverse progress-bar-stripes 0.40s linear infinite;
            } */
        @-webkit-keyframes animate-positive {
            0% {
                width: 0%;
            }
        }

        @keyframes animate-positive {
            0% {
                width: 0%;
            }
        }
    </style>
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
    @push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#keterangan_peserta'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('keterangan_peserta', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        $('#kt_select2_3').select2({}).on('change', function (e) {
            @this.set('peserta_id', $(this).val());
        });
    </script>
    @endpush