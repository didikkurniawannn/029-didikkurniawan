<div class="tab-pane fade" id="kt_stats_widget_1_tab_2" role="tabpanel">
    <!--begin::Table container-->

    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">Hari/Tanggal</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bold fs-6 text-gray-800">{{ $informasi['hari'] }} /
                {{ $informasi['tanggal'] }}</span>
        </div>
        <!--end::Col-->
    </div>
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-semibold text-muted">Waktu</label>
        <!--end::Label-->

        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bold fs-6 text-gray-800">{{ $informasi['waktu_mulai'] }} -
                {{ $informasi['waktu_selesai'] }}</span>
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
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="820" height="560" id="gmap_canvas"
                src="https://maps.google.com/maps?q=diskominfo+kabupaten+bandung&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://textcaseconvert.com/"></a><br><a href="https://timenowin.net/"></a><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 560px;
                    width: 820px;
                }

            </style><a href="https://www.mapembed.net">google maps html code</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 560px;
                    width: 820px;
                }

            </style>
        </div>
    </div>
    <!--end::Table container-->
</div>
