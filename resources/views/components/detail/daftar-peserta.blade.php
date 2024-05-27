<div class="tab-pane fade" id="kt_stats_widget_1_tab_3" role="tabpanel">
    <!--begin::Table container-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
            <!--begin::Contacts-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Form-->
                    <h3>Peserta yang melakukan registrasi</h3>
                    <!--end::Form-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-5" id="kt_chat_contacts_body">
                    <!--begin::List-->
                    <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                        data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                        data-kt-scroll-offset="5px" style="max-height: 52px;">
                        <!-- 
                        <div class="d-flex flex-stack py-4">
                            <div class="d-flex align-items-center">
                                <div class="ms-5">
                                    Didik Kurniawan
                                    <div class="fw-semibold text-muted">Diskominfo</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-end ms-2">
                                <span class="text-muted fs-7 mb-1">2h 3m last</span>
                             </div>
                        </div>
                        <div class="separator separator-dashed d-none"></div>
                     -->
                      

                    </div>
                    <!--end::List-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
        </div>
        <!--end::Sidebar-->

        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
            <!--begin::Messenger-->
            <div class="card" id="kt_chat_messenger">
                <!--begin::Card header-->
                <div class="card-header" id="kt_chat_messenger_header">
                    <!--begin::Title-->
                    <div class="card-title">
                        <!--begin::Users-->
                        <h3>Daftar Undangan</h3>
                        <!--end::Users-->
                    </div>
                    <!--end::Title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body" id="kt_chat_messenger_body">
                    <!--begin::Messages-->
                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                        data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                        data-kt-scroll-offset="5px" style="max-height: 119px;">
                        <!--begin::Message(in)-->

                        @foreach($peserta as $val)
                        <div class="d-flex justify-content-start mb-10 ">
                            <!--begin::Wrapper-->
                                
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <h4>{{$val}}</h4>
                                    </div>
                                    <!--end::Details-->

                                </div>
                                <!--end::User-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(in)-->

                        @endforeach
                    </div>
                    <!--end::Messages-->

                </div>
                <!--end::Card body-->

                
            </div>
            <!--end::Messenger-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Table container-->
</div>