<div>
    @if(!empty($document))
        @foreach($document as $val)
        <div class="d-flex flex-stack">
            <!--begin::Section-->
            <div class="text-gray-900 fw-bolder fs-6 me-2">{{str_replace("rapat/lampiran/", "", $val)}}</div>
            <!--end::Section-->

            <!--begin::Statistics-->
            <div class="d-flex align-items-senter">
                <a href="{{Storage::disk('public')->url($val)}}" target="_blank" class="kt-widget__desc">
                    <img class="h-30px" src="{{ asset('backend/themes/assets/media/svg/files/pdf.svg') }}" alt="image">
                </a>
            </div>
            <!--end::Statistics-->
        </div>
        <!--end::Item-->

        <!--begin::Separator-->
        <div class="separator separator-dashed my-3"></div>
        <!--end::Separator-->
        @endforeach
    @endif
</div>