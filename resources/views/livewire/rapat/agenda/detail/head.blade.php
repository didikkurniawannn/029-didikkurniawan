<div>
    <div class="row">
        <div class="col-md-6 table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Nama Rapat</th>
                        <td> : </td>
                        <td>{{$data_rapat->nama_rapat}}</td>
                    </tr>
                    <tr>
                        <th>Tgl. Rapat</th>
                        <td> : </td>
                        <td>{{$tanggal}}</td>
                    </tr>
                    <tr>
                        <th>Jam Rapat</th>
                        <td> : </td>
                        <td>{{$jam}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6 table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Dibuat Pada</th>
                        <td> : </td>
                        <td>{{tglIndo($data_rapat->created_at)}}</td>
                    </tr>
                    <tr>
                        <th>Status Berkas</th>
                        <td> : </td>
                        <td>{!!statusBerkas($data_rapat->id)!!}</td>
                    </tr>
                    <tr>
                        <th>Status Rapat</th>
                        <td> : </td>
                        <td>{!!statusRapat($data_rapat->status)!!}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @if($data_rapat->step == 4 && $data_rapat->finish == 0 && $data_rapat->status ==2)
        <!--begin::Alert-->
        <div class="alert alert-danger d-flex align-items-center p-5">
            <!--begin::Icon-->
            <i class="ki-duotone ki-cross-circle fs-2hx text-danger me-4"><span class="path1"></span><span class="path2"></span></i>
            <!--end::Icon-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-column">
                <!--begin::Title-->
                <h4 class="mb-1 text-dark">Catatan Perbaikan</h4>
                <!--end::Title-->

                <!--begin::Content-->
                <span>{{ $data_rapat->catatan_verifikasi }}</span>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Alert-->
        @endif
    </div>
</div>
