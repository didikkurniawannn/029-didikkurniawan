<div>
    @section('title', 'Master Instansi')

    <div class="row">

        <div class="col-lg-{{ $isOpen ? '8' : '12' }}">
            <div>
                <!--begin::Card header-->
                <div class="card-header align-items-center gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i> <input type="text"
                                data-kt-ecommerce-product-filter="search" wire:model.live="search"
                                class="form-control form-control-solid w-250px ps-12" placeholder="">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-200 mw-350px" wire:ignore>
                            <select x-init="$($el).select2({ placeholder: '-- Pilih --', });
                    $($el).on('change', function() {
                        $wire.set('searchJenisInstansi', $($el).val());
                    })" wire:model.live="searchJenisInstansi" name="searchJenisInstansi" id="searchJenisInstansi"
                                class="form-control form-control-lg form-select-solid">
                                <option value="0">-- Semua --</option>
                                <option value="1">OPD</option>
                                <option value="2">Puskesmas</option>
                                <option value="3">Kecamatan</option>

                            </select>
                        </div>
                        <button wire:click="toggle" class="btn btn-primary btn-sm" type="button"><i
                                class="fa fa-plus"></i> Tambah</button>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Table-->
                    <div class="table-responsive">

                        <table class="table table-head-custom table-vertical-center table-hover table-striped"
                            id="kt_advance_table_widget_2">
                            <thead>
                                <tr class="text-uppercase">
                                    <th class="pl-0" style="min-width: 100px">

                                        <label>
                                            <select name="kt_ecommerce_products_table_length"
                                                aria-controls="kt_ecommerce_products_table"
                                                class="form-select form-select-sm form-select-solid"
                                                wire:model.live="perpage">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </label>


                                    </th>
                                    <th style="min-width: 120px text-center">Nama Instansi </th>
                                    <th style="min-width: 120px text-center">Alamat </th>
                                    <th style="min-width: 120px text-center">Email </th>
                                    <th class="pr-0 text-right" style="min-width: 160px">Aktif</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($model as $index => $item)
                                <tr>
                                    <td>
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Aksi <i class="ki-outline ki-down fs-5 ms-1"></i>
                                        </a>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true"
                                            style="z-index: 107; position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-60px, 299px);"
                                            data-popper-placement="bottom-end">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a wire:click="edit({{$item->id}})" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" wire:click="deleteRequest({{ $item->id }})"
                                                    class="menu-link px-3">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->name}}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->address}}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->email}}</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckStatus{{ $item->id }}"
                                                wire:click="status({{ $item->id }})"
                                                {{ $item->status == 0 ? '' : 'checked' }}>
                                            <label class="form-check-label"
                                                for="flexSwitchCheckStatus{{ $item->id }}">{{ $item->status == 0 ? 'Tidak Aktif' : 'Aktif' }}</label>
                                        </div>
                                    </td>
                                </tr>

                                @empty
                                <tr class="odd text-center">
                                    <td valign="top" colspan="8" class="dataTables_empty">Nama Tidak Ditemukan</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-9">
                            Menampilkan {{ $model->firstItem() }} - {{ $model->lastItem() }} dari {{$model->total() }}
                            entri
                        </div>
                        <div class="col-sm-12 col-md-3 float-end">
                            {{ $model->links() }}
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
        </div>





        @if ($isOpen)
        <div class="col-lg-4">
            <div>
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h2 class="card-title font-weight-bolder">@yield('title') <div wire:dirty
                            class="text text-secondary">Draft</div>
                        <span wire:loading class="spinner-border spinner-border-sm align-middle ms-2"></span></h2>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <form action="">
                    <div class="card-body">
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label>Nama Instansi
                                <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror"
                                placeholder="Ex: JB" wire:model="name" />
                            <input type="hidden"
                                class="form-control form-control-solid @error('id_instansi') is-invalid @enderror"
                                wire:model="id_instansi" />
                            @error('name')
                            <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label>Kepala
                                <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('leader') is-invalid @enderror"
                                placeholder="Ex: John" wire:model="leader" />
                            @error('leader')
                            <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label>Alamat
                                <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('address') is-invalid @enderror"
                                placeholder="Ex: Alamat" wire:model="address" />
                            @error('address')
                            <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label>Email
                                <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('email') is-invalid @enderror"
                                placeholder="Ex: email@instansi.co.id" wire:model="email" />
                            @error('email')
                            <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    <!--end: Card Body-->
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
                </form>
            </div>
        </div>
        @endif


    </div>
</div>


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