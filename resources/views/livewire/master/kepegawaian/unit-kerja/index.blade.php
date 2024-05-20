            <div>
            @section('title', 'Master Unit Kerja')

            <div class="row">

            <div class="col-lg-{{ $isOpen ? '8' : '12' }}">
            <div>
            <!--begin::Header-->
            <div class="card-header">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    Menampilkan 
                    <select wire:model.live="perpage"
                    class="form-control form-sm"
                    style="width: 75px;">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                </select>
                entri per-halaman
                </div>
                <div class="col-sm-12 col-md-6">
                        <!--begin::Form-->
                        <form method="get" class="quick-search-form">
                            <div class="input-group rounded bg-light">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </div>
                                <input type="text" class="form-control h-45px" placeholder="Search..." wire:model.live="search" />
                            </div>
                        </form>
                        <!--end::Form-->
                </div>
            </div>
            </div>

            <!--end::Header-->
            <!--begin::Body-->
            <div>
                <!--begin::Table-->
                <div class="table-responsive">
                    
                    <table class="table table-head-custom table-vertical-center table-hover table-striped" id="kt_advance_table_widget_2">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="pl-0" style="min-width: 100px">
                                    <button wire:click="toggle" class="btn btn-primary btn-sm" type="button"><i class="fa fa-plus"></i> Tambah</button>
                                </th>
                                <th style="min-width: 120px text-center">Kode
                                    @if ($sortColoumName === 'kode')
                                        <span wire:click="sortBy('kode')" class="float-end text-sm" style="cursor: pointer;">
                                            <i class="{{ $sortColoumName === 'kode' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                        </span> 
                                    @else
                                        <span wire:click="sortBy('kode')" class="float-end text-sm" style="cursor: pointer;">
                                            <i class="fas fa-sort"></i>
                                        </span>
                                    @endif
                                    </th>                                
                                <th style="min-width: 120px text-center">Unit Kerja
                                @if ($sortColoumName === 'unit_kerja')
                                    <span wire:click="sortBy('unit_kerja')" class="float-end text-sm" style="cursor: pointer;">
                                        <i class="{{ $sortColoumName === 'unit_kerja' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                    </span> 
                                @else
                                    <span wire:click="sortBy('unit_kerja')" class="float-end text-sm" style="cursor: pointer;">
                                        <i class="fas fa-sort"></i>
                                    </span>
                                @endif
                                </th>
                                <th class="pr-0 text-right" style="min-width: 160px">Aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($model as $index => $item)
                                <tr>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-cog"></i> Aksi <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-act" role="menu" style="">
                                                {{-- <li><a a href="{{ url('master/menu/child/'.Crypt::encrypt($item->id)) }}"><i class="fa fa-edit"></i> Sub Menu</a></li> --}}
                                                <li><a wire:click="edit({{ $item->id }})"><i class="fa fa-edit"></i> Edit</a></li>
                                                <li><a wire:click="deleteConfirm({{ $item->id }})"><i class="fa fa-trash"></i> Hapus</a></li>
                                            </ul>
                                            </div>
                                    </td>
                                    <td>
                                        <span class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->kode}}</span>
                                    </td>                                    
                                    <td>
                                        <span class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->unit_kerja}}</span>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckStatus{{ $item->id }}" wire:click="status({{ $item->id }})" {{ $item->is_active == 0 ? '' : 'checked' }}>
                                            <label class="form-check-label" for="flexSwitchCheckStatus{{ $item->id }}">{{ $item->is_active == 0 ? 'Tidak Aktif' : 'Aktif' }}</label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                
                        <div class="col-sm-12 col-md-6">
                            Menampilkan {{ $model->firstItem() }} - {{ $model->lastItem() }} dari {{$model->total() }} entri
                        </div>
                        <div class="col-sm-12 col-md-6">
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





            @if ($isOpen)
            <div class="col-lg-4">
            <div>
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">@yield('title') <div wire:dirty class="text text-secondary">Draft</div> 
                    <span wire:loading class="spinner-border spinner-border-sm align-middle ms-2"></span></h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <form action="">
                <div>
                    <div class="form-group">
                        <label>Kode
                        <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  @error('kode') is-invalid @enderror" placeholder="Ex: Kode" wire:model="kode" />
                        <input type="hidden" class="form-control  @error('unit_kerja_id') is-invalid @enderror" wire:model="unit_kerja_id" />
                        @error('kode')
                            <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Unit Kerja
                        <span class="text-danger">*</span></label>
                        <input type="text" class="form-control  @error('unit_kerja') is-invalid @enderror" placeholder="Ex: Bagian Umum" wire:model="unit_kerja" />
                        @error('unit_kerja')
                            <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                        @enderror
                    </div>                                                
                </div>
                <!--end: Card Body-->
                <div class="card-footer">
                    <button type="button" wire:offline.attr="disabled" wire:loading.class.remove="btn-primary" wire:loading.attr="disabled"
                        @if ($mode == 'create') wire:click.prevent="store" @else wire:click.prevent="update" @endif
                        class="btn btn-success">
                        <i class="fa fa-save"></i>
                        {{ $mode == 'create' ? 'Simpan' : 'Edit' }}
                        <span wire:loading  @if ($mode == 'create') wire:target="store" @else wire:target="update" @endif class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </button>
                    <button type="button" wire:click.prevent="cancel" wire:click="toggle" class="btn btn-secondary">Batal</button>
                </div>
            </form>
            </div>
            </div>
            @endif


            </div>
            </div>