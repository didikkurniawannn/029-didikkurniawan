<div>
    @foreach($peserta as $val)
    <div class="d-flex flex-stack">
        <!--begin::Section-->
        <div class="text-gray-900 fw-bolder fs-6 me-2">{{$val}}</div>
        <!--end::Section-->

        <!--begin::Statistics-->
        <div class="d-flex align-items-senter">
            <i class="ki-outline ki-minus-square fs-2 text-success me-2"></i>

            <!--begin::Number-->
            <!-- <span class="text-gray-900 fw-bolder fs-6">7.8</span> -->
            <!--end::Number-->

        </div>
        <!--end::Statistics-->
    </div>
    <!--end::Item-->

    <!--begin::Separator-->
    <div class="separator separator-dashed my-3"></div>
    <!--end::Separator-->
    @endforeach

</div>