    @section('title')
    1. Informasi Agenda Rapat
    @stop
    @section('menu')
    Buat Rapat > <b>1. Informasi Agenda Rapat</b>
    @stop
    @section('step')
    25%
    @stop
    <form wire:submit="create">
        <!-- <input type="hidden" name="_token" wire:model="_token" value="NIxqBx0YhjylN1kD0VgEBc4MrhAVVTd8nQaDBJMJ"> -->
        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row mt-2">
                <label for="prov_id" class="col-sm-2 form-label">Jenis Wajib Pajak<span
                        class="text-danger">*</span></label>
                <div class="col-md-6 mt-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_wp" wire:model="jenis_wp" id="inlineRadio1" value="1"
                            checked="">
                        <label class="form-check-label" for="inlineRadio1">Pribadi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_wp" wire:model="jenis_wp" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">Badan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">NIK/Paspor/NIB<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-10">
                    <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" wire:model="nik" id="nik" maxlength="16" 
                        onchange="get_wp()">
                        @error('nik') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">NPWP</label>
                </div>
                <div class="col-md-10">
                    <input type="number" class="form-control @error('npwp') is-invalid @enderror" name="npwp" wire:model="npwp" id="npwp" maxlength="15" >
                    @error('npwp') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">Nama WP<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-10">
                    <input type="text"
                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                        class="form-control @error('nama_wp') is-invalid @enderror" name="nama_wp" wire:model="nama_wp" id="nama_wp" >
                        @error('nama_wp') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">Alamat<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-10">
                    <input type="text"
                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                        class="form-control @error('alamat') is-invalid @enderror" name="alamat" wire:model="alamat" id="alamat" >
                        @error('alamat') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">Provinsi<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-2" wire:ignore>
                        <select x-init="$($el).select2({ placeholder: '-- Pilih Provinsi --', });
                                $($el).on('change', function() {
                                    $wire.set('idProvinsi', $($el).val());
                                })" wire:model.live="idProvinsi"  name="idProvinsi" id="idProvinsi" class="form-control form-control-lg form-select-solid @error('idProvinsi') is-invalid @enderror">
                            <option value="">-- Pilih Provinsi --</option>
                            @foreach($provinsiList as $provinsi)
                                <option value="{{$provinsi->id}}">{{$provinsi->id}} - {{strtoupper($provinsi->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">Kota / Kabupaten<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-2" wire:ignore.self>
                        <select x-init="$($el).select2({ placeholder: '-- Pilih Kabupaten --', });
                                $($el).on('change', function() {
                                    $wire.set('idKab', $($el).val());
                                })" wire:model.live="idKab"  name="idKab" id="idKab" class="form-control form-control-lg form-select-solid @error('idKab') is-invalid @enderror">
                                <option value="">-- Pilih Kabupaten --</option>
                            @foreach($kabupatenList as $kabupaten)
                                <option value="{{$kabupaten->id}}">{{$kabupaten->id}} - {{strtoupper($kabupaten->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">Kecamatan<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-2" wire:ignore.self>
                        <select x-init="$($el).select2({ placeholder: '-- Pilih Kecamatan --', });
                                $($el).on('change', function() {
                                    $wire.set('idKecamatan', $($el).val());
                                })" wire:model.live="idKecamatan"  name="idKecamatan" id="idKecamatan" class="form-control form-control-lg form-select-solid @error('idKecamatan') is-invalid @enderror">
                                <option value="">-- Pilih Kecamatan --</option>
                            @foreach($kecamatanList as $kecamatan)
                                <option value="{{$kecamatan->id}}">{{$kecamatan->id}} - {{strtoupper($kecamatan->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">Kelurahan / Desa<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-2" wire:ignore.self>
                        <select x-init="$($el).select2({ placeholder: '-- Pilih Desa --', });
                                $($el).on('change', function() {
                                    $wire.set('idKelurahan', $($el).val());
                                })" wire:model.live="idKelurahan"  name="idKelurahan" id="idKelurahan" class="form-control form-control-lg form-select-solid @error('idKelurahan') is-invalid @enderror">
                                <option value="">-- Pilih Desa --</option>
                            @foreach($kelurahanList as $kelurahan)
                                <option value="{{$kelurahan->id}}">{{$kelurahan->id}} - {{strtoupper($kelurahan->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">RT<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control @error('rt') is-invalid @enderror" name="rt" wire:model="rt" id="rt" >
                </div>
                <div class="col-md-2">
                    <label class="form-label">RW<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control @error('rw') is-invalid @enderror" name="rw" wire:model="rw" id="rw" >
                </div>
            </div>
        </div>

        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">Kode Pos</label>
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" wire:model="kode_pos" id="kode_pos" >
                </div>
                <div class="col-md-2">
                    <label class="form-label">No. Hp (Whatsapp)<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control  " name="no_hp" wire:model="no_hp" id="no_hp" >
                    @error('no_hp') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="footer">
            <p class="text-danger">*Wajib Diisi</p>
            <div class="btn-list">

                <button type="submit" class="btn btn-info float-end" wire:target="create" wire:loading.class.remove="bg-info" id="next">
                    Selanjutnya <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </form>

