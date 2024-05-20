<div>
    @section('title', 'Setting')

                <div>
  
                    <!--begin::Form-->
                    <form class="form">
                        <!--begin::Body-->
                        <div class="card-body">
               
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Nama App</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" placeholder="Ex:Foo" wire:model="name" />
                                    <input type="hidden" class="form-control  @error('setting_id') is-invalid @enderror" wire:model="setting_id" />
                                    @error('name')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Logo</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="file" class="form-control form-control-solid @error('logo') is-invalid @enderror" class="form-control" accept="image/jpeg, image/png" wire:model="logo" />
                                    @if ($logo_url)
                                        <img class="m-t-10 w-12" alt="Logo" src="{{ $logo_url }}"/>
                                    @endif
                                    @error('logo')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Logo Text</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="file" class="form-control form-control-solid @error('logo_text') is-invalid @enderror" class="form-control" accept="image/jpeg, image/png" wire:model="logo_text" />
                                    @if ($logo_text_url)
                                        <img class="m-t-10 w-12" alt="Logo" src="{{ $logo_text_url }}"/>
                                    @endif
                                    @error('logo_text')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>                            

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Favicon</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="file" class="form-control form-control-solid @error('favicon') is-invalid @enderror" class="form-control" accept="image/jpeg, image/png" wire:model="favicon" />
                                    @if ($favicon_url)
                                        <img class="m-t-10 w-12" alt="Favicon" src="{{ $favicon_url }}"/>
                                    @endif
                                    @error('favicon')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>                            

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Splashscreen</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="file" class="form-control form-control-solid @error('splashscreen') is-invalid @enderror" class="form-control" accept="image/jpeg, image/png" wire:model="splashscreen" />
                                    @if ($splashscreen_url)
                                        <img class="m-t-10 w-12" alt="Splashscreen" src="{{ $splashscreen_url }}"/>
                                    @endif
                                    @error('splashscreen')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>                            

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Keywords</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" class="form-control form-control-solid @error('keywords') is-invalid @enderror" placeholder="Ex:Foo" wire:model="keywords" />
                                    @error('keywords')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Phone</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" class="form-control form-control-solid @error('phone') is-invalid @enderror" placeholder="Ex:Foo" wire:model="phone" />
                                    @error('phone')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Ex:Foo" wire:model="email" />
                                    @error('email')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Facebook</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" class="form-control form-control-solid @error('facebook') is-invalid @enderror" placeholder="Ex:Foo" wire:model="facebook" />
                                    @error('facebook')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Instagram</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" class="form-control form-control-solid @error('instagram') is-invalid @enderror" placeholder="Ex:Foo" wire:model="instagram" />
                                    @error('instagram')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Twitter</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" class="form-control form-control-solid @error('twitter') is-invalid @enderror" placeholder="Ex:Foo" wire:model="twitter" />
                                    @error('twitter')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Youtube</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" class="form-control form-control-solid @error('youtube') is-invalid @enderror" placeholder="Ex:Foo" wire:model="youtube" />
                                    @error('youtube')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                                <div class="col-lg-9 col-xl-6">
                                    <textarea class="form-control form-control-solid @error('description') is-invalid @enderror" placeholder="Ex:Foo" wire:model="description" cols="30" rows="10"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                                <div class="col-lg-9 col-xl-6">
                                    <textarea class="form-control form-control-solid @error('address') is-invalid @enderror" placeholder="Ex:Foo" wire:model="address" cols="30" rows="10"></textarea>
                                    @error('address')
                                        <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">CDN (Content Delivery Network) URL</label>
                            <div class="col-lg-9 col-xl-6">
                                <input type="text" class="form-control form-control-solid @error('storage_url') is-invalid @enderror" placeholder="Ex: https://dev-sitalas.jamkrida-jabar.co.id:8443/storage/" wire:model="storage_url" />
                                @error('storage_url')
                                    <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>    
                        
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Aktifkan Single Sign On</label>
                            <div class="col-lg-9 col-xl-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="single_sign_on" id="single_sign_on_aktif" value="1" wire:model="is_sso">
                                    <label class="form-check-label" for="single_sign_on_aktif">Aktif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="single_sign_on" id="single_sign_on_nonaktif" value="0" wire:model="is_sso">
                                    <label class="form-check-label" for="single_sign_on_nonaktif">Nonaktif</label>
                                </div>
                                @error('single_sign_on_status')
                                    <div class="invalid-feedback form-text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="card-footer">
                            <div class="form-group row">
                            <div class="col-xl-3 col-lg-3"></div>
                            <div class="col-lg-9 col-xl-6">
                                <button type="reset" class="btn btn-secondary">Batal</button>
                            <button type="button" wire:click.prevent="store" class="btn btn-success mr-2"> <i class="fa fa-save"/></i> Simpan
                                <span wire:loading wire:target="store" class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </button>
                            </div>
                            </div>
                        </div>

                        <!--end::Body-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>

