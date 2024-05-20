<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom card-stretch">
                    <!--begin::Header-->
                    <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">Pengguna Aplikasi</h3>
                            {{-- <span class="text-muted font-weight-bold font-size-sm mt-1">Update your Website informaiton</span> --}}
                        </div>
                        <div class="card-toolbar">
                            <button type="button" wire:click.prevent="store" class="btn btn-success mr-2">Save Changes
                                <span wire:loading wire:target="store"
                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form class="form">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mb-6">Pengguna/Akun Aplikasi</h5>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({!! asset('template/dist/assets/media/users/blank.png') !!})">
                                                @if ($avatar_url)
                                                    <div class="image-input-wrapper" style="background-image: url({{ $avatar_url }})"></div>
                                                @endif

                                                {{-- @if ($avatar)
                                                    <div class="image-input-wrapper" style="background-image: url({{ $avatar->temporaryUrl() }})"></div>
                                                @endif --}}

                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" wire:model="avatar" name="profile_avatar"
                                                        accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="profile_avatar_remove">
                                                </label>
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title=""
                                                    data-original-title="Cancel avatar">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="remove" data-toggle="tooltip" title=""
                                                    data-original-title="Remove avatar">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                            <div class="progress progress-sm mt-2 rounded" x-show="isUploading">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                    role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                                </div>
                                            </div>
                                            @error('avatar')
                                                <div class="invalid-feedback form-text text-danger"> {{ $message }}
                                                </div>
                                            @enderror
                                            <span class="form-text text-muted">Allowed file types: png, jpg,
                                                jpeg.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text"
                                        class="form-control form-control-solid @error('nama') is-invalid @enderror"
                                        placeholder="Ex:Foo" wire:model="nama" />
                                    <input type="hidden"
                                        class="form-control  @error('setting_id') is-invalid @enderror"
                                        wire:model="setting_id" />
                                    @error('nama')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text"
                                        class="form-control form-control-solid @error('username') is-invalid @enderror"
                                        placeholder="Ex:Foo" wire:model="username" />
                                    @error('username')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Password</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text"
                                        class="form-control form-control-solid @error('password') is-invalid @enderror"
                                        placeholder="Ex:Foo" wire:model="password" />
                                    @error('password')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Password Confirm</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text"
                                        class="form-control form-control-solid @error('password_confirm') is-invalid @enderror"
                                        placeholder="Ex:Foo" wire:model="password_confirm" />
                                    @error('password_confirm')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!--end::Body-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</div>
