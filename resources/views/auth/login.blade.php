@extends('components.layouts.login.app')

@section('title', 'Login')

@section('content')
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
  <!--begin::Body-->
  <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
      <!--begin::Form-->
      <div class="d-flex flex-center flex-column flex-lg-row-fluid">
          <!--begin::Wrapper-->
          <div class="w-xl-500px p-10">

            <form class="form w-100" method="POST" action="{{ route('signin') }}">
                @csrf
                <div class="text-center mb-11">
                    <img src="{{ Storage::disk('public')->url(getApp()->logo_url) }}" class="max-h-75px" height="75px" alt="{{ getApp()->name }}" />
                    <h1 class="text-gray-900 fw-bolder mb-3">@yield('title')</h1>
                </div>
    
                <div class="fv-row mb-8">
                    <input placeholder="Username" class="form-control bg-transparent @error('username') is-invalid @enderror"
                    type="text" name="username" autocomplete="off" value="{{ old('username') }}" />
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                <div class="fv-row mb-3">
                    <input placeholder="Password" class="form-control bg-transparent @error('password') is-invalid @enderror"
                    type="password" name="password" autocomplete="off" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
    
                {{-- <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <a href="{{ route('forgot') }}" class="link-success">Lupa Password?</a>
                </div> --}}
    
                <div class="d-grid mb-10">
                    <button type="submit" class="btn btn-success">
                        Sign In
                    </button>
                </div>
            </form>
          </div>
          <!--end::Wrapper-->
      </div>
      <!--end::Form-->
    </form>
    

  </div>
  <!--end::Body-->

  <!--begin::Aside-->
  <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 bg-success">
      <!--begin::Content-->
      <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
          <!--begin::Image-->
          <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
              src="{!! asset('backend/themes/assets/media/misc/intro-data.svg') !!}" alt="" />
          <!--end::Image-->

          <!--begin::Title-->
          <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
            {{getAppName()}}
          </h1>
          <!--end::Title-->

          <!--begin::Text-->
          <div class="d-none d-lg-block text-white fs-base text-center">
            {{getDescriptionName()}}
          </div>
          <!--end::Text-->
      </div>
      <!--end::Content-->
  </div>
  <!--end::Aside-->
</div>
<!--end::Authentication - Sign-in-->
@endsection