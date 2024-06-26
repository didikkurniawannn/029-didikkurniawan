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
        <div class="col-md-6 table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Peserta Registrasi</th>
                        <td> : </td>
                        <td>@include('livewire.partials.dropdown', ['item' => $data_rapat, 'type' => 'Terdaftar'])</td>
                    </tr>
                    <tr>
                        <th>Peserta Hadir</th>
                        <td> : </td>
                        <td>@include('livewire.partials.dropdown', ['item' => $data_rapat, 'type' => 'Hadir'])</td>
                    </tr>
                    <tr>
                        <th>Peserta Tervalidasi</th>
                        <td> : </td>
                        <td>@include('livewire.partials.dropdown', ['item' => $data_rapat, 'type' => 'Approve'])</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
