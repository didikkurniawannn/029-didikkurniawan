<div>
    @section('title', 'Register')
    <form class="form" wire:submit.prevent="signup">
        <!--begin::Title-->
        <div class="pb-5 pb-lg-15">
            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Register</h3>
        </div>
        <!--begin::Title-->
        <!--begin::Form group-->
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">No Induk</label>
            <input class="form-control h-auto py-5 px-4 rounded-lg border-0 @error('no_induk') is-invalid @enderror"
                type="text" name="no_induk" autocomplete="off" wire:model="no_induk" placeholder="Ex:1234..." />
            @error('no_induk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Nama</label>
            <input class="form-control h-auto py-5 px-4 rounded-lg border-0 @error('nama') is-invalid @enderror"
                type="text" name="nama" autocomplete="off" wire:model="nama" placeholder="Ex:Foo..." />
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
            <input class="form-control h-auto py-5 px-4 rounded-lg border-0 @error('email') is-invalid @enderror"
                type="email" name="email" autocomplete="off" wire:model="email" placeholder="Ex:foo@foo.foo" />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">No WA</label>
            <input class="form-control h-auto py-5 px-4 rounded-lg border-0 @error('phone') is-invalid @enderror"
                type="text" name="phone" autocomplete="off" wire:model="phone" placeholder="Ex:1234..." />
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Username</label>
            <input class="form-control h-auto py-5 px-4 rounded-lg border-0 @error('username') is-invalid @enderror"
                type="text" name="username" autocomplete="off" wire:model="username" placeholder="Ex:Foo12!..." />
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Password</label>
            <input class="form-control h-auto py-5 px-4 rounded-lg border-0 @error('password') is-invalid @enderror"
                type="text" name="password" autocomplete="off" wire:model="password" placeholder="Ex:******" />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Re-Password</label>
            <input
                class="form-control h-auto py-5 px-4 rounded-lg border-0 @error('password_confirmation') is-invalid @enderror"
                type="text" name="password_confirmation" autocomplete="off" wire:model="password_confirmation"
                placeholder="Ex:******" />
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!--end::Form group-->
        <!--begin::Action-->
        <div class="pb-lg-0 pb-5">

            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Register
                <span wire:loading wire:target="signup"
                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </button>
        </div>
        <!--end::Action-->
    </form>


</div>
