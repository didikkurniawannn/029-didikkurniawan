        @section('title')
        1. Informasi Agenda Rapat
        @stop
        @section('menu')
        Buat Rapat > <b>1. Informasi Agenda Rapat</b>
        @stop
        @section('step')
        25%
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
                    <form wire:submit="store">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 input-group-sm mb-3">
                                    <label for="tanggal_mulai">Tanggal Mulai<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control mt-1 @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" id="tanggal_mulai" wire:model="tanggal_mulai">
                                    @error('tanggal_mulai')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 input-group-sm mb-3">
                                    <label for="tanggal_selesai">Tanggal Selesai<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control mt-1 @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" id="tanggal_selesai" wire:model="tanggal_selesai">
                                    @error('tanggal_selesai')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 input-group-sm mb-3">
                                    <label for="jam_mulai">Jam Mulai<span class="text-danger">*</span></label>
                                    <input type="time" class="form-control mt-1 @error('jam_mulai') is-invalid @enderror" name="jam_mulai" id="jam_mulai" wire:model="jam_mulai">
                                    @error('jam_mulai')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 input-group-sm mb-3">
                                    <label for="jam_selesai">Jam Selesai<span class="text-danger">*</span></label>
                                    <input type="time" class="form-control mt-1 @error('jam_selesai') is-invalid @enderror" name="jam_selesai" id="jam_selesai" wire:model="jam_selesai">
                                    @error('jam_selesai')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 input-group-sm mb-3">
                                    <label for="nama_rapat">Nama Rapat<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mt-1 @error('nama_rapat') is-invalid @enderror" name="nama_rapat" id="nama_rapat" wire:model="nama_rapat" placeholder="Rapat Evaluasi">
                                    @error('nama_rapat')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 input-group-sm mb-3">
                                    <label for="dress_code">Dress Code<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mt-1 @error('dress_code') is-invalid @enderror" name="dress_code" id="dress_code" wire:model="dress_code" placeholder="Batik Lengan Panjang">
                                    @error('dress_code')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 input-group-sm mb-3" wire:ignore>
                                    <label for="agenda">Agenda<span class="text-danger">*</span></label>
                                    <textarea class="form-control mt-1 @error('agenda') is-invalid @enderror" name="agenda" id="agenda" wire:model="agenda">{{!empty($agenda) ? $agenda : ''}}</textarea>
                                    @error('agenda')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 input-group-sm mb-3" wire:ignore>
                                    <label for="tujuan">Tujuan<span class="text-danger">*</span></label>
                                    <textarea class="form-control mt-1 @error('tujuan') is-invalid @enderror" name="tujuan" id="tujuan" wire:model="tujuan">{{!empty($tujuan) ? $tujuan : ''}}</textarea>
                                    @error('tujuan')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 input-group-sm mb-3" wire:ignore>
                                    <label for="catatan">Catatan<span class="text-danger">*</span></label>
                                    <textarea class="form-control mt-1 @error('catatan') is-invalid @enderror" name="catatan" id="catatan" wire:model="catatan">{{!empty($catatan) ? $catatan : ''}}</textarea>
                                    @error('catatan')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <div class="btn-list">
                                <button type="submit" class="btn btn-info float-end" wire:loading.class.remove="bg-info" id="next">
                                    Selanjutnya <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        
    @push('css')
        <style>
            body{
                cursor: default;
            }
            .progress-outer{
                background: #fff;
                border-radius: 50px;
                padding: 25px;
                margin: 10px 0;
                box-shadow: 0 0  10px rgba(209, 219, 231,0.7);
            }
            .progress{
                height: 27px;
                margin: 0;
                overflow: visible;
                border-radius: 50px;
                background: #eaedf3;
                box-shadow: inset 0 10px  10px rgba(244, 245, 250,0.9);
            }
            .progress .progress-bar{
                border-radius: 50px;
            }
            .progress .progress-value{
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
            @-webkit-keyframes animate-positive{
                0% { width: 0%; }
            }
            @keyframes animate-positive {
                0% { width: 0%; }
            }
        </style>
    @endpush

    @push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
                ClassicEditor
                .create(document.querySelector('#agenda'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                    @this.set('agenda', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
                ClassicEditor
                .create(document.querySelector('#tujuan'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                    @this.set('tujuan', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
                ClassicEditor
                .create(document.querySelector('#catatan'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                    @this.set('catatan', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
    </script>
    @endpush
