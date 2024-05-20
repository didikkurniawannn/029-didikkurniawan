<div>
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
            <input type="hidden" class="form-control  @error('jabatan_id') is-invalid @enderror" wire:model="jabatan_id" />
            @error('kode')
                <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Unit Kerja
            <span class="text-danger">*</span></label>
            <input type="text" class="form-control  @error('jabatan') is-invalid @enderror" placeholder="Ex: Bagian Umum" wire:model="jabatan" />
            @error('jabatan')
                <div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
            @enderror
        </div> 
        <div class="form-group">
            <label>Atasan Langsung
            <span class="text-danger">*</span></label>
                <select wire:model="atasan_id" id="atasan_id" name="atasan_id" class="form-select select2" data-placeholder="-- Pilih Tujuan Disposisi --">
                <option value=""> -- Pilih Atasan Langsung --</option>
                @foreach ($jabatan_list as $item)
                <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                @endforeach
                </select>
            @error('atasan_id')
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