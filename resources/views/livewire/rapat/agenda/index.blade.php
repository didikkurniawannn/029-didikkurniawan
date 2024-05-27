<div>
    @section('title')
    Daftar Rapat
    @stop
    @section('menu')
    <b>Daftar Rapat</b>
    @stop
    <div class="row g-5 g-xl-8">
        <div class="col-lg-12 col-xxl-12">
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Daftar Rapat</span>
                    </h3>
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                        data-bs-original-title="Click to add a user" data-kt-initialized="1">
                       
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3" >
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <div class="d-flex flex-row flex-column-fluid">
                            <div class="d-flex flex-row-auto w-800px flex-start">
                                <select wire:model.live="perpage" class="form-select form-select-sm" style="width: 75px;">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="d-flex flex-row-auto w-200px flex-end" style="margin-right: 10px;">
                            </div>

                            <div class="d-flex flex-row-auto w-180px flex-end">
                                
                            </div>
                        </div>
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
                            id="kt_advance_table_widget_2">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>Nama Rapat
                                        @if ($sortColoumName === 'nama_rapat')
                                        <span wire:click="sortBy('nama_rapat')" class="float-end text-sm"
                                            style="cursor: pointer;">
                                            <i
                                                class="{{ $sortColoumName === 'nama_rapat' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                        </span>
                                        @else
                                        <span wire:click="sortBy('nama_rapat')" class="float-end text-sm"
                                            style="cursor: pointer;">
                                            <i class="fas fa-sort"></i>
                                        </span>
                                        @endif
                                    </th>
                                    <th>Agenda</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Berkas</th>
                                    <th>Verifikasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($model as $index => $item)
                                <tr>
                                    <td>
                                        {{ $item->nama_rapat }}
                                    </td>
                                    <td>
                                        {!! $item->agenda !!}
                                    </td>
                                    <td>
                                        {{ $item->tanggal_mulai == $item->tanggal_selesai ? tglIndo($item->tanggal_mulai).' - Selesai' : tglIndo($item->tanggal_mulai) ." - ". tglIndo($item->tanggal_selesai) }}
                                    </td>
                                    <td>
                                        {{ $item->jam_mulai == $item->jam_selesai ? waktuIndo($item->jam_mulai) .' - Selesai' : waktuIndo($item->jam_mulai) ." - ". waktuIndo($item->jam_selesai) }}
                                    </td>
                                    <td>
                                        {!! statusBerkas($item->id) !!}
                                    </td>
                                    <td>
                                        {!! statusRapat($item->status) !!}
                                    </td>
                                    <td>
                                        <div class="btn-list">
                                            
                                            
                                            @if(Auth::user()->role_id == 1)
                                                @if($item->status == 0 && $item->finish == 1 && $item->step == 4)
                                                <a href="{{route('rapat.detail',[Crypt::encrypt($item->id)])}}"
                                                    class="btn btn-sm btn-icon btn-light-success btn-active-light-default me-1"
                                                    title="Verifikasi">
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </a>
                                                @else
                                                <a href="{{route('rapat.detail',[Crypt::encrypt($item->id)])}}"
                                                        class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
                                                        title="Lihat">
                                                        <i class="bi bi-eye"></i>
                                                </a>

                                                @endif
                                            @endif
                                            
                                            @if(Auth::user()->role_id != 1)
                                            <a href="{{route('rapat.detail',[Crypt::encrypt($item->id)])}}"
                                                class="btn btn-sm btn-icon btn-light-primary btn-active-light-default me-1"
                                                title="Lihat">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <button wire:click="deleteRequest({{ $item->id }})"
                                                class="btn btn-sm btn-icon btn-light-danger btn-active-light-default me-1"
                                                title="Hapus">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                        <tr class="odd">
                                            <td valign="top" class="text-center" colspan="8" class="dataTables_empty">Nama Tidak Ditemukan</td>
                                        </tr>
                                @endforelse
                            </tbody>
                        </table>


                        <div class="col-sm-12 col-md-12">
                            <div class="float-start">
                            Menampilkan {{ $model->firstItem() }} - {{ $model->lastItem() }} dari {{$model->total() }}
                            entri
                            </div>
                            <div class="float-end">
                                {{ $model->links() }}
                            </div>
                        </div>


                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>    
</div>
