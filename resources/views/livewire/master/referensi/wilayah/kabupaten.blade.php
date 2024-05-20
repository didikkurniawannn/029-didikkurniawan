@section('title')
Kabupaten
@stop
@section('menu')
Referensi > Wilayah > <b>Kabupaten</b>
@stop
<!--begin::Col-->
<div class="row gx-6 gx-xl-9">
    <div class="col-lg-{{$isOpen ? '8' : '12' }} col-xxl-{{$isOpen ? '8' : '12' }}">
        <!--begin::Tables widget 14-->
        <div class="card card-flush h-md-100">
            <!--begin::Card header-->
            <div class="card-header align-items-center gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i> <input type="text"
                            data-kt-ecommerce-product-filter="search" wire:model.live="search"
                            class="form-control form-control-solid w-250px ps-12" placeholder="Cari berdasarkan nama">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5" wire:ignore>
                    <div class="w-200 mw-350px" >
                        <select x-init="$($el).select2({ placeholder: '-- Pilih Provinsi --', });
                        $($el).on('change', function() {
                            $wire.set('searchProvinsi', $($el).val())
                        })" wire:model.live="searchProvinsi"  name="searchProvinsi" id="searchProvinsi" class="form-control form-control-lg form-select-solid">
                            @foreach($provinsi_list as $provinsi)
                            <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button wire:click="toggle" class="btn btn-primary btn-sm" type="button"><i class="fa fa-plus"></i>
                        Tambah</button>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="text-uppercase">
                                <th class="pl-0" style="min-width: 100px">Kode Kabupaten
                                </th>
                                <th style="min-width: 120px text-center">Nama
                                    @if ($sortColoumName === 'name')
                                    <span wire:click="sortBy('name')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i
                                            class="{{ $sortColoumName === 'name' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                    </span>
                                    @else
                                    <span wire:click="sortBy('name')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i class="fas fa-sort"></i>
                                    </span>
                                    @endif
                                </th>
                                <th class="pr-0 text-right" style="min-width: 160px">#</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @forelse ($model as $index => $item)
                            <tr>
                                <td>
                                    <span
                                        class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->id}}</span>
                                </td>
                                <td>
                                    <span
                                        class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->name}}</span>
                                </td>
                                <td>
                                    <div class="btn-list text-right">
                                        <a href="#" wire:click="edit({{ $item->id }})" class="btn btn-sm btn-primary"
                                            title="Update">
                                            <span class="fas fa-edit"> </span>
                                        </a>&nbsp;
                                        <a href="#" wire:click="deleteRequest({{ $item->id }})"
                                            class="btn btn-sm btn-danger">
                                            <span class="fas fa-trash"> </span>
                                        </a>&nbsp;
                                    </div>
                                </td>
                            </tr>

                            @empty
                            <tr class="odd">
                                <td valign="top" colspan="8" class="dataTables_empty">Data Tidak Ditemukan</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <!--end::Table-->
                

                <div class="row">
                    <div
                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="dataTables_length" id="kt_ecommerce_products_table_length">
                            <label>
                                <select name="kt_ecommerce_products_table_length"
                                    aria-controls="kt_ecommerce_products_table"
                                    class="form-select form-select-sm form-select-solid" wire:model.live="perpage">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers"
                            id="kt_ecommerce_products_table_paginate">
                            {{ $model->links() }}
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6">
                            Menampilkan {{ $model->firstItem() }} - {{ $model->lastItem() }} dari {{$model->total() }} entri
                        </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end::Tables widget 14-->
    </div>
    
    @if ($isOpen)
    <div class="col-lg-4 col-xxl-4">
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <form action="">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>{!!$actionTitle!!} @yield('title')</h2>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input -->
                        <div class="mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                            <label class="required form-label">Provinsi</label>
                            
                            @if ($mode=='create' ) 
                                <select x-init="$($el).select2({ placeholder: '-- Pilih Provinsi --', });
                                $($el).on('change', function() {
                                    $wire.set('id_prov', $($el).val())
                                })" wire:model.live="id_prov"  name="id_prov" id="id_prov" class="form-control form-control-lg form-select-solid">
                                <option value=""></option>
                                    @foreach($provinsi_list as $provinsi)
                                    <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                    @endforeach
                                </select>
                            @else
                                <select x-init="$($el).select2({ placeholder: '-- Pilih Provinsi --', });
                                $($el).on('change', function() {
                                    $wire.set('id_prov', $($el).val())
                                })" wire:model.live="id_prov"  name="id_prov" id="id_prov" disabled class="form-control form-control-lg form-select-solid">
                                <option value=""></option>
                                    @foreach($provinsi_list as $provinsi)
                                    <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                    @endforeach
                                </select>
                            @endif
                            @error('id_prov')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Kode Kabupaten</label>
                            @if ($mode=='create' ) 
                            <input type="text" class="form-control  @error('id_kab') is-invalid @enderror"
                                placeholder="Ex: 3204" wire:model="id_kab" />
                            @else
                            <input type="text" disabled class="form-control  @error('id_kab') is-invalid @enderror"
                                placeholder="Ex: 3204" wire:model="id_kab" />
                            @endif
                            @error('id_kab')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Nama Kabupaten</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                placeholder="Ex: Kab. Bandung" wire:model="name" />
                            @error('name')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        
                    </div>
                    <!--end::Card header-->
                    <div class="card-footer pt-0">
                        <button type="button" wire:offline.attr="disabled" wire:loading.class.remove="btn-primary"
                            wire:loading.attr="disabled" @if ($mode=='create' ) wire:click.prevent="store" @else
                            wire:click.prevent="update" @endif class="btn btn-success">
                            <i class="fa fa-save"></i>
                            {{ $mode == 'create' ? 'Simpan' : 'Edit' }}
                            <span wire:loading @if ($mode=='create' ) wire:target="store" @else wire:target="update"
                                @endif class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </button>
                        <button type="button" wire:click.prevent="cancel" wire:click="toggle"
                            class="btn btn-secondary">Batal</button>

                    </div>
                </div>
                <!--end::General options-->

            </form>
        </div>
    </div>
    @endif
</div>

<!--end::Col-->

@push('meta')
<meta name="turbolinks-visit-control" content="reload">
<meta name="turbolinks-cache-control" content="no-cache">
@endpush
@push('js')
<script>
    window.addEventListener('swal:deleteRequest', event => {
        Swal.fire({
            title: event.detail[0].title,
            text: event.detail[0].text,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#aaa',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                @this.call('deleteSelectedRequest', event.detail[0].id);
                Swal.fire({
                    title: 'Data Berhasil tersimpan',
                    icon: 'success'
                });
            } else {
                Swal.fire({
                    title: 'Operasi Dibatalkan',
                    icon: 'success'
                });
            }
        });
    });
</script>
@endpush