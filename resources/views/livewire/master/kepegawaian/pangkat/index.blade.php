<div>
    @section('title', 'Master Pangkat')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-custom card gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Form Pangkat</h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <form action="">
                        <div class="card-body pt-0">
                            <div class="form-group">
                                <label>Nama Pangkat
                                <span class="text-danger">*</span></label>
                                <input type="text" class="form-control  @error('pangkat') is-invalid @enderror" placeholder="Ex:Foo" wire:model="pangkat" />
                                <input type="hidden" class="form-control  @error('pangkat_id') is-invalid @enderror" wire:model="pangkat_id" />
                                @error('pangkat')
                                    <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <!--end: Card Body-->
                        <div class="card-footer">
                            <button type="button"
                                @if ($mode == 'create') wire:click.prevent="store" @else wire:click.prevent="store" @endif
                                class="btn btn-success">
                                {{ $mode == 'create' ? 'Simpan' : 'Edit' }}
                                <span wire:loading  @if ($mode == 'create') wire:target="store" @else wire:target="store" @endif class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </button>
                            <button type="button" wire:click.prevent="cancel" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-custom gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Daftar Pangkat</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Showing {{ $model->firstItem() }} to {{ $model->lastItem() }} out of {{$model->total() }} Record</span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="quick-search quick-search-inline ml-20 w-300px" >
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
                                        <input type="text" class="form-control h-45px" placeholder="Search..." wire:model="search" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-0">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <span wire:loading class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                                <thead>
                                    <tr class="text-uppercase">
                                        <th class="pl-0" style="min-width: 100px">No</th>
                                        <th style="min-width: 120px text-center">Pangkat</th>
                                        <th class="pr-0 text-right" style="min-width: 160px">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($model as $index => $item)
                                        <tr>
                                            <td class="pl-0">
                                               {{ $model->firstItem() + $index }}
                                            </td>

                                            <td>
                                                <span class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->pangkat}}</span>
                                            </td>
                                            <td class="pr-0 text-right">
                                                {{-- <a href="#" class="btn btn-icon btn-light btn-hover-success btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
                                                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a> --}}
                                                <a href="#" wire:click="edit('{{ $item->id }}')" class="btn btn-icon btn-light btn-hover-warning btn-sm mx-3">
                                                    <span class="svg-icon svg-icon-md svg-icon-warning">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
                                                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                                <a href="#" wire:click="deleteConfirm('{{ $item->id }}')" class="btn btn-icon btn-light btn-hover-danger btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-danger">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex flex-wrap mr-3">
                                    {{ $model->links() }}
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="text-muted mr-4">Record : </span>
                                    <select wire:model="perpage"
                                        class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                                        style="width: 75px;">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                    </select>

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
</div>
