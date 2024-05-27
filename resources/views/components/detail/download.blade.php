<div class="tab-pane fade" id="kt_stats_widget_1_tab_4" role="tabpanel">
    <!--begin::Table container-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
            <!--begin::Contacts-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Form-->
                   <h3>Lampiran Pendukung Rapat</h3>
                    <!--end::Form-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    @if(!empty($document))
                    @foreach($document as $val)
                    <div class="d-flex flex-stack">
                        <!--begin::Section-->
                        <div class="text-gray-900 fw-bolder fs-6 me-2">{{str_replace("rapat/lampiran/", "", $val)}}
                        </div>
                        <!--end::Section-->

                        <!--begin::Statistics-->
                        <div class="d-flex align-items-senter">
                            <a href="{{Storage::disk('public')->url($val)}}" target="_blank" class="kt-widget__desc">
                                <img class="h-30px" src="{{ asset('backend/themes/assets/media/svg/files/pdf.svg') }}"
                                    alt="image">
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
            </div>
        </div>
    </div>
</div>