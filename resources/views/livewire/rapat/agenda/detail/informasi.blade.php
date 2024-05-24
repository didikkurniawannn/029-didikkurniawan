<div>
    <!--begin::Table container-->
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold">Nama Rapat</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-semibold fs-6 text-muted">{{$data_rapat->nama_rapat}}</span>
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold">Dress Code</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-semibold fs-6 text-muted">{{$data_rapat->dress_code}}</span>
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold">Agenda</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-semibold fs-6 text-muted">{!!$data_rapat->agenda!!}</span>
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold">Tujuan</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-semibold fs-6 text-muted">{!!$data_rapat->tujuan!!}</span>
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold">Catatan</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-semibold fs-6 text-muted">{!!$data_rapat->catatan!!}</span>
        </div>
        <!--end::Col-->
    </div>
</div>
<!--end::Table container-->