@section('title')
Detail Profil Pengguna
@stop
@section('menu')
Akun > <b>Profil Pengguna</b>
@stop
<!--begin::Col-->
<div id="kt_app_content_container" class="app-container  container-fluid ">
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true"
            aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">@yield('title')</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">No Induk</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="company"
                                class="form-control form-control-lg form-control-solid @error('no_induk') is-invalid @enderror"
                                placeholder="Ex:331222" wire:model="no_induk" placeholder="Company name">
                            <input type="hidden" class="form-control  @error('user_id') is-invalid @enderror"
                                wire:model="user_id" />
                            @error('no_induk')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="nama"
                                class="form-control form-control-lg form-control-solid @error('nama') is-invalid @enderror"
                                wire:model="nama">
                            @error('nama')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jenis Kelamin</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <select name="jenis_kelamin" wire:model="jenis_kelamin" id="jenis_kelamin"
                                class="form-control form-control-sm form-control-solid">
                                <option value=""> -- Pilih Salah Satu --</option>
                                @foreach ($jenis_kelamin_list as $item)
                                <option value="{{ $item->id }}">{{ $item->jenis_kelamin }}</option>
                                @endforeach
                            </select>
                            @error('jenis_kelamin')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Tanggal Lahir</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input
                                class="form-control form-control-solid flatpickr-input @error('tanggal_lahir') is-invalid @enderror"
                                wire:model="tanggal_lahir" id="tanggal_lahir" type="text" readonly="readonly">
                            @error('tanggal_lahir')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input
                                class="form-control form-control-solid flatpickr-input @error('email') is-invalid @enderror"
                                wire:model="email" id="email" type="email">
                            @error('email')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Phone</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input
                                class="form-control form-control-solid flatpickr-input @error('phone') is-invalid @enderror"
                                wire:model="phone" id="phone" type="tel">
                            @error('phone')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <textarea class="form-control  @error('alamat') is-invalid @enderror" placeholder="Ex:Foo"
                                wire:model="alamat" cols="5" rows="2"></textarea>
                            @error('alamat')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>


                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" wire:click.prevent="update" class="m-s-5 btn btn-success"> <i
                                class="fa fa-save"></i> Simpan <span wire:loading wire:target="update"
                                class="spinner-border spinner-border-sm align-middle ms-2"></span></button>
                    </div>
                    <!--end::Actions-->
                    <input type="hidden">
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
</div>
<!--end::Col-->

@push('meta')
<meta name="turbolinks-visit-control" content="reload">
<meta name="turbolinks-cache-control" content="no-cache">
@endpush
@push('js')
<script>
    $("#tanggal_lahir").flatpickr();
    $('#jenis_kelamin').on('change', function () {
        @this.set('jenis_kelamin', $('#jenis_kelamin').val(), true);
    });


</script>
@endpush