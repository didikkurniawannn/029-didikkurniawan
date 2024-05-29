<div>
    <div class="card card-flush h-xl-100">

        <!--begin::Body-->
        <div class="card-body pt-3 pb-4">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                            <th class="p-0 min-w-200px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-125px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                        @foreach($reservasi as $val)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-gray-800 fw-bold mb-1 fs-6">{{ $val->nama }}</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">{{ $val->instansi }}</span>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end">
                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">{{ $val->no_telp }}</span>
                                <span class="fw-semibold text-gray-500 d-block">{{ $val->email }}</span>
                            </td>

                            <td class="text-end">
                                <a href="#" class="text-gray-800 fw-bold d-block mb-1 fs-6">{{ $val->no_registrasi }}</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table container-->
        </div>
        <!--end: Card Body-->
    </div>


</div>