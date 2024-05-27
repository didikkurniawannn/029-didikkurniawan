<!-- @props(['informasi']) -->
<div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1" role="tabpanel">
    <!--begin::Table container-->
    <!--begin::Table container-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
            <!--begin::Contacts-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Form-->
                   <h3>Informasi Acara</h3> 
                    <!--end::Form-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <p class="fs-5 fw-semibold text-gray-600 py-6">
                        {{preg_replace('/<\s*p[^>]*>(.*?)<\s*\/\s*p\s*>/', '$1', $informasi->agenda) }}
                    </p>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Nama Rapat</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">                    
                            <span class="fw-bold fs-6 text-gray-800">{{ $informasi->nama_rapat }}</span>                
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Tujuan</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">                    
                            <span class="fw-bold fs-6 text-gray-800">{{preg_replace('/<\s*p[^>]*>(.*?)<\s*\/\s*p\s*>/', '$1', $informasi->tujuan) }}</span>                
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Catatan</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">                    
                            <span class="fw-bold fs-6 text-gray-800">{{preg_replace('/<\s*p[^>]*>(.*?)<\s*\/\s*p\s*>/', '$1', $informasi->catatan) }}</span>                
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Dress Code</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">                    
                            <span class="fw-bold fs-6 text-gray-800">{{ $informasi->dress_code }}</span>                
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <!--end::Table container-->
</div>