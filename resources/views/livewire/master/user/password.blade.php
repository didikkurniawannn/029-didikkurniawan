@section('title')
Ubah Password
@stop
@section('menu')
Akun > <b>Ubah Password</b>
@stop
<!--begin::Col-->
<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-12 mb-10">
        <!--begin::Lists Widget 19-->
        <div class="card card-flush h-xl-100">
            <form class="form">
                <div class="p-5 p-lg-15">
                    <div id="kt_password_meter_example" class="fv-row" data-kt-password-meter="true">
                        <div class="mb-1">
                            <label class="form-label fw-semibold fs-6 mb-2">
                                Password Baru
                            </label>
                            <div class="position-relative mb-3">
                                <input
                                    class="form-control form-control-lg form-control-solid  @error('password') is-invalid @enderror"
                                    type="password" wire:model="password" name="password" autocomplete="off" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                    <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                        </div>
                        @error('password')
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="text-muted mb-5">
                            Min. 8 karakter, terdiri dari kombinasi huruf kecil, huruf kapital, simbol, dan angka
                        </div>
                    </div>

                    <div id="kt_password_meter_example" class="fv-row" data-kt-password-confirm-meter="true">
                        <div class="mb-1">
                            <label class="form-label fw-semibold fs-6 mb-2">
                                Ulangi Password Baru
                            </label>
                            <div class="position-relative mb-3">
                                <input
                                    class="form-control form-control-lg form-control-solid @error('password_confirm') is-invalid @enderror"
                                    type="password" wire:model="password_confirm" name="password_confirm"
                                    autocomplete="off" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-confirm-meter-control="visibility">
                                    <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                    <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center mb-3"
                                data-kt-password-confirm-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                        </div>
                        @error('password_confirm')
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="text-muted">
                            Min. 8 karakter, terdiri dari kombinasi huruf kecil, huruf kapital, simbol, dan angka
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end py-6 px-9">
                    <button type="submit" wire:click.prevent="update" class="m-s-5 btn btn-success"> <i
                            class="fa fa-save"></i>
                        Simpan <span wire:loading wire:target="update"
                            class="spinner-border spinner-border-sm align-middle ms-2"></span></button>
                </div>
            </form>
        </div>
    </div>
</div>
