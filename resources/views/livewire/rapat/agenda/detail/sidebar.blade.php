<div>
    <!--begin::Section-->
    <div class="mb-7">

        <!--begin::Details-->
        <div class="d-flex align-items-center">

            <!--begin::Info-->
            <div class="d-flex flex-column">
                <!--begin::Name-->
                <div class="fs-4 fw-bold text-gray-900 me-2">{{ $data_rapat->user->nama }}</div>
                <!--end::Name-->

                <!--begin::Email-->
                <div href="#" class="fw-semibold text-gray-600">{{ $data_rapat->user->instansi->name }}</div>
                <!--end::Email-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->
    </div>
    <!--end::Section-->

    <!--begin::Actions-->
    <div class="mb-0">
        @if ($data_rapat->finish != 1)
        <div class="separator separator-dashed mb-7"></div>
        <center>
            <div class="d-grid gap-2">
                <a class="btn btn-warning text-center btn-block" wire:click="submitRapat">
                    <span wire:loading class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    Simpan dan Selesai
                </a>
            </div>
        </center>
        @endif
    </div>
    <!--end::Actions-->

</div>