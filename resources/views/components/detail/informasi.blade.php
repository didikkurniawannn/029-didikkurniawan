<div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1" role="tabpanel">
    <!--begin::Table container-->
    <p class="fs-5 fw-semibold text-gray-600 py-6">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ullam aperiam blanditiis in est ea non laborum natus officiis obcaecati ducimus, quam dolorum, suscipit facilis illo necessitatibus eveniet, dolore distinctio!
    </p>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">Hari/Tanggal</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">                    
            <span class="fw-bold fs-6 text-gray-800">{{ $informasi['hari'] }} / {{ $informasi['tanggal'] }}</span>                
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">Waktu</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">                    
            <span class="fw-bold fs-6 text-gray-800">{{ $informasi['waktu_mulai'] }} - {{ $informasi['waktu_selesai'] }}</span>                
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">Tempat</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">                    
            <span class="fw-bold fs-6 text-gray-800">{{ $informasi['tempat'] }}</span>                
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">Dress Code</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">                    
            <span class="fw-bold fs-6 text-gray-800">{{ $informasi['dress_code'] }}</span>                
        </div>
        <!--end::Col-->
    </div>
    <!--end::Table container-->
</div>