<div>
@section('title')
Modul Aplikasi
@stop
@section('menu')
Utilitas > <b>Menu Aplikasi</b>
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
<div id="kt_app_content_container" class="app-container  container-fluid ">
    <div class="flex row mt-5">
        <div class="rg-xxl-8">ow g-0 g-xl-5 
            <div class="col-xl-7">
                <div class="card card-stretch mb-5 mb-xxl-8">
                    <div class="card-header align-items-center border-0 mt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bolder text-dark fs-3">Modul Aplikasi </span>
                        </h3>
                        <div class="card-toolbar">
                            <a wire:click="toggle" class="btn btn-sm btn-icon btn-color-warning btn-active-light-warning">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="timeline-label">

                            <ul class="fa-ul">
                                @foreach ($model as $index => $item)
                                <div class="timeline-item mt-3">
                                    <div class="timeline-badge">
                                        <i
                                            class="{{setIconMenu($item->id)}} text-success fs-3"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>
                                    <div class="timeline-content d-flex">
                                        <li>
                                            <a class="users text-gray-800" wire:click="edit({{ $item->id }})" href="#">
                                                <span>{{$item->menu}}</span>
                                            </a>
                                            <ul class="fa-ul">
                                                @foreach (MenuChildernList($item->id) as $itemChildren)
                                                <div class="timeline-item mt-3">
                                                    <div class="timeline-badge">
                                                        <i class="{{setIconMenu($itemChildren->id)}} text-success fs-3"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </div>
                                                    <div class="timeline-content d-flex">
                                                        <li>
                                                            <a class="users text-gray-800"
                                                                wire:click="edit({{ $itemChildren->id }})" href="#">
                                                                <span>{{$itemChildren->menu}}</span>
                                                            </a>
                                                            <ul class="fa-ul">
                                                                @foreach (MenuChildernList($itemChildren->id) as $itemSubChildren)
                                                                <div class="timeline-item mt-3">
                                                                    <div class="timeline-badge">
                                                                        <i
                                                                            class="{{setIconMenu($itemSubChildren->id)}} text-success fs-3"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    </div>
                                                                    <div class="timeline-content d-flex">
                                                                        <li>
                                                                            <a class="users text-gray-800"
                                                                                wire:click="edit({{ $itemSubChildren->id }})"
                                                                                href="#">
                                                                                <span>{{$itemSubChildren->menu}}</span>
                                                                            </a>

                                                                        </li>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </div>
                                </div>

                                @endforeach
                            </ul>

                        </div>
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::List Widget 1-->
            </div>
            @if ($isOpen)
            <div class="col-xl-5" data-select2-id="select2-data-10-27bq">
                <div class="card card-stretch mb-5 mb-xxl-8">
                    <div class="card-header align-items-center border-0 mt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bolder text-dark fs-3">{!!$actionTitle!!} @yield('title')</span>
                        </h3>
                    </div>
                    <div class="card-body pt-0">
                        <form action="">
                            <div class="mb-3 fv-row fv-plugins-icon-container">
                                <label>Nama Menu
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control  @error('menu') is-invalid @enderror mt-1"
                                     placeholder="Ex: Layanan" wire:model="menu" />
                                <input type="hidden" class="form-control  @error('menu_id') is-invalid @enderror"
                                    wire:model="menu_id" />
                                @error('menu')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3 fv-row fv-plugins-icon-container">
                                <label>Posisi
                                    <span class="text-danger">*</span></label>
                                <input type="number" class="form-control  @error('posisi') is-invalid @enderror mt-1"
                                     placeholder="Ex: 2" wire:model="posisi" />
                                @error('posisi')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3 fv-row fv-plugins-icon-container">
                                <label>Url
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control  @error('url') is-invalid @enderror mt-1"
                                     placeholder="Ex: master/layanan" wire:model="url" />
                                @error('url')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3 fv-row fv-plugins-icon-container">
                                <label>Jenis Menu
                                    <span class="text-danger">*</span></label>
                                    <select  x-init="$($el).select2({
                                            placeholder: '-- Pilih --',
                                        });
                                        $($el).on('change', function() {
                                            $wire.set('jenis_menu', $($el).val())
                                        })"  wire:model="jenis_menu" class="form-control form-control-lg @error('jenis_menu') is-invalid @enderror mt-1" 
                                        id="jenis_menu" data-control="select2">
                                        <option value="">Pilih</option>
                                        <option value="Backend">Backend</option>
                                        <option value="Frontend">Frontend</option>
                                    </select>
                                @error('jenis_menu')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                                <label>Type Menu
                                    <span class="text-danger">*</span></label>
                                    <select  x-init="$($el).select2({
                                                placeholder: '-- Pilih --',
                                            });
                                            $($el).on('change', function() {
                                                $wire.set('tipe', $($el).val())
                                            })"  wire:model="tipe" class="form-control form-control-lg @error('tipe') is-invalid @enderror mt-1" 
                                id="tipe" data-control="select2">
                                    <option value="">Pilih</option>
                                    <option value="module">Module</option>
                                    <option value="controller">Controller</option>
                                    <option value="action">Action</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('tipe')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                                <label>Parent Menu
                                    <span class="text-danger">*</span></label>
                                    <select  x-init="$($el).select2({
                                                placeholder: '-- Pilih --',
                                            });
                                            $($el).on('change', function() {
                                                $wire.set('parent_id', $($el).val())
                                            })"  wire:model="parent_id" class="form-control form-control-lg @error('parent_id') is-invalid @enderror mt-1" 
                                id="parent_id" data-control="select2" class="form-select form-select-sm form-select-solid">
                                    <option value="">-- Pilih --</option>
                                    <option value="0">Parent Kosong</option>
                                    @foreach ($model as $index => $item)
                                    <option value="{{$item->id}}">{{$item->menu}}</option>
                                        @foreach (MenuChildernList($item->id) as $itemChildren)
                                        <option value="{{$itemChildren->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$itemChildren->menu}}</option>
                                            @foreach (MenuChildernList($itemChildren->id) as $itemSubChildren)
                                            <option value="{{$itemSubChildren->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$itemSubChildren->menu}}</option>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </select>
                                @error('parent_id')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3 fv-row fv-plugins-icon-container">
                                <label>Icon</label>
                                <input type="text" class="form-control  @error('icon') is-invalid @enderror mt-1"
                                     placeholder="Ex: icon-list" wire:model="icon" />
                                @error('icon')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                    </div>
                    <!--end: Card Body-->
                    <div class="card-footer">
                        <button type="button" wire:offline.attr="disabled" wire:loading.class.remove="btn-primary" wire:loading.attr="disabled" 
                            @if ($mode=='create' ) wire:click.prevent="store" 
                            @else
                            wire:click.prevent="update" 
                            @endif class="btn btn-success">
                            <i class="fa fa-save"></i>
                            {{ $mode == 'create' ? 'Simpan' : 'Edit' }}
                            <span wire:loading @if ($mode=='create' ) wire:target="store" @else wire:target="update"
                                @endif class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </button>
                        @if ($mode=='update' )
                        <a wire:click="deleteRequest({{ $menu_id }})"
                            class="btn btn-danger">Delete</a>
                        @endif
                        <button type="button" wire:click.prevent="cancel" wire:click="toggle"
                            class="btn btn-secondary">Batal
                    </div>
                    </form>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>

@push('meta')
    <meta name="turbolinks-visit-control" content="reload">
    <meta name="turbolinks-cache-control" content="no-cache">
@endpush
@push('js')
    <script>
    document.addEventListener('click', function(event) {
       if (event.target.closest('.users')) {
           console.log('Element clicked:', event.target);
       }
   });
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
            @this.call('deleteSelectedRequest',event.detail[0].id);
            Swal.fire({title: 'Data Berhasil tersimpan', icon: 'success'});
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

