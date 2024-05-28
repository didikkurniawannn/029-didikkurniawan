<div class="modal fade show" id="kt_modal_view_event" tabindex="-1" style="display: block;" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-start">
                <!--begin::Row-->
                    <i class="ki-duotone ki-add-files fs-1 text-muted me-5"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span><span
                            class="path5"></span><span class="path6"></span></i>
                    <!--end::Icon-->

                        <!--begin::Event name-->
                        <div class="d-flex align-items-center mb-2">
                            <span class="fs-3 fw-bold me-3" data-kt-calendar="event_name">Konfirmasi Kehadiran</span>
                        </div>
                        <!--end::Event name-->
            </div>
            <!--end::Modal header-->
            <form class="form-horizontal" wire:submit="store">
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-20 px-lg-17">
                <!--begin::Row-->
                <div class="align-items-center mt-5 mb-2" style="text-align:left;">
                        <input type="hidden" id="rapat_id" name="rapat_id" wire:model="rapat_id" class="form-control">
                        <div class="form-group mt-5 mb-3 fv-row fv-plugins-icon-container">
                            <div class="row mt-2">
                                <label class="col-md-3 form-label">Jenis Peserta<span
                                        class="text-danger">*</span></label>
                                <div class="col-md-9 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_peserta" wire:model="jenis_peserta"
                                            id="inlineRadio1" value="1" checked>
                                        <label class="form-check-label" for="inlineRadio1">Instansi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_peserta" wire:model="jenis_peserta"
                                            id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">Non Instansi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Instansi<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('instansi') is-invalid @enderror" name="instansi"
                                        wire:model="instansi" id="instansi" maxlength="16">
                                    @error('instansi') <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Nama<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        wire:model="nama" id="nama" maxlength="16">
                                    @error('nama') <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">NIP/NIK</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control @error('nip') is-invalid @enderror"
                                        name="nip" wire:model="nip" id="nip" maxlength="16">
                                    @error('nip') <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Jabatan<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                                        wire:model="jabatan" id="jabatan">
                                    @error('jabatan') <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Email<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                        wire:model="email" id="email">
                                    @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
    
    
                        <div class="form-group mb-3 fv-row fv-plugins-icon-container">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">No Telp<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                                        wire:model="no_telp" id="no_telp">
                                    @error('no_telp') <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
                </div>
                <!--end::Row-->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" wire:click="$dispatch('closeModal')">Close</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <!--end::Modal body-->

            </form>
        </div>
    </div>
</div>