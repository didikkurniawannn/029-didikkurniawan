<div class="tab-pane fade" id="kt_stats_widget_1_tab_4" role="tabpanel">
    <!--begin::Table container-->
    <div class="table-responsive">
        <!--begin::Table-->
        <table class="table align-middle gs-0 gy-4 my-0">
            <!--begin::Table head-->
            <thead>
                <tr class="fs-7 fw-bold text-gray-500">
                    <th class="p-0 min-w-150px d-block pt-3">File</th>
                    <th class="text-end min-w-140px pt-3">Download</th>
                </tr>
            </thead>
            <!--end::Table head-->

            <!--begin::Table body-->
            <tbody>
                @for ($i=0;$i<=3;$i++)
                <tr>
                    <td>
                        <a href="#"
                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">File {{ $i }}</a>
                    </td>

                    <td class="text-end">
                        <span class="badge badge-light-warning fs-7 fw-bold">Download</span>
                    </td>

                </tr>
                    
                @endfor
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Table container-->
</div>