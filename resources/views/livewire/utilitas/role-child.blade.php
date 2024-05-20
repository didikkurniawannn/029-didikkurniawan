<div>
@section('title')
Hak Akses
@stop
@section('menu')
Utilitas > Role > <b>Hak Akses</b>
@stop
@push('css')
<style>
    .timeline-label:before {
        content: none;
    }

    .timeline-label .timeline-item {
        margin-bottom: 0.5rem;
    }
</style>
@endpush
                <div class="card card-flush mb-5 mb-lg-10">
                    <div class="card-header align-items-center border-0 mt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bolder text-dark fs-3">Hak Akses User</span>
                        </h3>
                    </div>
                    
                    <div class="card-body pt-3">
                        <div class="timeline-label">
                            <table class="table table-borderless align-middle" id="table_resources">
                                <thead>
                                    <tr>
                                        <th>Resource</th>
                                        <th style="width: 5em; text-align: center;">Allow</th>
                                        {{-- <th style="width: 5em; text-align: center;">Lihat</th>
                                        <th style="width: 5em; text-align: center;">Buat</th>
                                        <th style="width: 5em; text-align: center;">Edit</th>
                                        <th style="width: 5em; text-align: center;">Hapus</th>
                                        <th style="width: 5em; text-align: center;">Export</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($menu as $index => $item)
                                    <tr class="danger">
                                        
                                        <td class="resource-column" style="max-width: 200px; overflow-x: auto;">
                                            <i class="{{setIconMenu($item->id)}} text-success fs-3"></i>&nbsp;&nbsp;{{$item->menu}} </td>
                                        <td>
                                            <label class="i-switch">
                                                <input type="checkbox" wire:model="viewSelected" class="form-check-input" value="{{ $item->id }}">
                                            </label>
                                        </td>
                                    </tr>
                                        @foreach (MenuChildernList($item->id) as $itemChildren)
                                        <tr class="danger">
                                            <td class="resource-column" style="max-width: 200px; overflow-x: auto;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;<i class="{{setIconMenu($itemChildren->id)}} text-success fs-3"></i>&nbsp;&nbsp;{{$itemChildren->menu}} </td>
                                            <td>
                                                <label class="i-switch">
                                                    <input type="checkbox" wire:model="viewSelected" class="form-check-input" value="{{ $itemChildren->id }}">
                                                </label>
                                            </td>
                                        </tr>
                                            @foreach (MenuChildernList($itemChildren->id) as $itemSubChildren)
                                                <tr class="danger">
                                                    <td class="resource-column" style="max-width: 200px; overflow-x: auto;">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="{{setIconMenu($itemSubChildren->id)}} text-success fs-3"></i>&nbsp;&nbsp;{{$itemSubChildren->menu}} </td>
                                                    <td>
                                                        <label class="i-switch">
                                                            <input type="checkbox" wire:model="viewSelected" class="form-check-input" value="{{ $itemSubChildren->id }}">
                                                        </label>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{url('utilitas/role')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"/></i> Kembali</a>
                        <button type="button" wire:offline.attr="disabled" wire:loading.class.remove="btn-primary" wire:loading.attr="disabled"
                            @if ($mode == 'create') wire:click.prevent="store" @else wire:click.prevent="update" @endif
                            class="btn btn-success">
                            <i class="fa fa-save"></i>
                            {{ $mode == 'create' ? 'Simpan' : 'Edit' }}
                            <span wire:loading  @if ($mode == 'create') wire:target="store" @else wire:target="update" @endif class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </button>
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::List Widget 1-->



    @push('meta')
    <meta name="turbolinks-visit-control" content="reload">
    <meta name="turbolinks-cache-control" content="no-cache">
    @endpush{{-- Because she competes with no one, no one can compete with her. --}}
</div>
