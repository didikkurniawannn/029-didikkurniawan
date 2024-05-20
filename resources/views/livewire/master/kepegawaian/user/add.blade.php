
@section('title', 'Profil Saya')
<form>
<div class="card-body pt-0">
@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@endif
<div class="row">
<div class="col-md-6 col-lg-6">
<div class="form-group">
<label>No Induk
<span class="text-danger">*</span></label>
<input type="text" class="form-control  @error('no_induk') is-invalid @enderror" placeholder="Ex:Foo" wire:model="no_induk" />
<input type="hidden" class="form-control  @error('user_id') is-invalid @enderror" wire:model="user_id" />
@error('no_induk')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group">
<label>Nama Lengkap
<span class="text-danger">*</span></label>
<input type="text" class="form-control  @error('nama') is-invalid @enderror" placeholder="Ex:Foo" wire:model="nama" />
@error('nama')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group">
<label>Jenis Kelamin
<span class="text-danger">*</span></label>
<select class="form-control" wire:model="jenis_kelamin">
<option value=""> -- Pilih Salah Satu --</option>
@foreach ($jenis_kelamin_list as $item)
<option value="{{ $item->id }}">{{ $item->jenis_kelamin }}</option>
@endforeach
</select>
@error('jenis_kelamin')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group">
<label>Tanggal Lahir
<span class="text-danger">*</span></label>
<input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror" placeholder="Ex:Foo" wire:model="tanggal_lahir" />
@error('tanggal_lahir')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group">
<label>Email
<span class="text-danger">*</span></label>
<input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Ex:Foo" wire:model="email" />
@error('email')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group">
<label>Phone
<span class="text-danger">*</span></label>
<input type="text" class="form-control  @error('phone') is-invalid @enderror" placeholder="Ex:Foo" wire:model="phone" />
@error('phone')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

</div>
<div class="col-md-6 col-lg-6">
<div class="form-group" wire:ignore>
<label>Golongan
<span class="text-danger">*</span></label>
<select class="form-control" wire:model="golongan_id" id="golongan_id">
<option value=""> -- Pilih Salah Satu --</option>
@foreach ($golongan_list as $item)
<option value="{{ $item->id }}">{{ $item->golongan }}</option>
@endforeach
</select>
@error('golongan_id')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group" wire:ignore>
<label>Eselon
<span class="text-danger">*</span></label>
<select class="form-control" wire:model="eselon_id" id="eselon_id">
<option value=""> -- Pilih Salah Satu --</option>
@foreach ($eselon_list as $item)
<option value="{{ $item->id }}">{{ $item->eselon }}</option>
@endforeach
</select>
@error('eselon_id')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group" wire:ignore>
<label>Pangkat
<span class="text-danger">*</span></label>
<select class="form-control" wire:model="pangkat_id" id="pangkat_id">
<option value=""> -- Pilih Salah Satu --</option>
@foreach ($pangkat_list as $item)
<option value="{{ $item->id }}">{{ $item->pangkat }}</option>
@endforeach
</select>
@error('pangkat_id')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group" wire:ignore>
<label>Jabatan
<span class="text-danger">*</span></label>
<select class="form-control" wire:model="jabatan_id" id="jabatan_id">
<option value=""> -- Pilih Salah Satu --</option>
@foreach ($jabatan_list as $item)
<option value="{{ $item->id }}">{{ $item->jabatan }}</option>
@endforeach
</select>
@error('jabatan_id')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group" wire:ignore>
<label>Unit Kerja
<span class="text-danger">*</span></label>
<select class="form-control" wire:model="unit_kerja_id" id="unit_kerja_id">
<option value=""> -- Pilih Salah Satu --</option>
@foreach ($unit_kerja_list as $item)
<option value="{{ $item->id }}">{{ $item->unit_kerja }}</option>
@endforeach
</select>
@error('unit_kerja_id')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>

<div class="form-group" wire:ignore>
<label>Satuan Kerja
<span class="text-danger">*</span></label>
<select class="form-control" wire:model="satuan_kerja_id" id="satuan_kerja_id">
<option value=""> -- Pilih Salah Satu --</option>
@foreach ($satuan_kerja_list as $item)
<option value="{{ $item->id }}">{{ $item->satuan_kerja }}</option>
@endforeach
</select>
@error('satuan_kerja_id')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>


</div>
<div class="col-md-12 col-lg-12">
<div class="form-group">
<label>Alamat
<span class="text-danger">*</span></label>
<textarea class="form-control  @error('alamat') is-invalid @enderror" placeholder="Ex:Foo" wire:model="alamat" cols="5" rows="2"></textarea>
@error('alamat')
<div class="invalid-feedback form-text text-danger"> {{ $message }} </div>
@enderror
</div>
</div>
</div>
</div>
<!--end: Card Body-->
<div class="card-footer">
    <a href="{{route('account.index')}}" class="m-s-5 btn btn-secondary"> <i class="fa fa-arrow-left"></i> Kembali</a>
    <button type="submit" wire:click.prevent="store" class="m-s-5 btn btn-success"> <i class="fa fa-save"></i> Simpan <span wire:loading wire:target="update"
        class="spinner-border spinner-border-sm align-middle ms-2"></span></button>
</div>
</form>

@push('js')
<script>
window.addEventListener('render-select2', event => {
$('#golongan_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.golongan') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#eselon_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.eselon') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#pangkat_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.pangkat') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#jabatan_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.jabatan') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#unit_kerja_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.unit-kerja') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#satuan_kerja_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.satuan-kerja') }}',
dataType: 'json',
},
templateResult: formatState
});
});

function formatState(state) {
if (!state.id) {
return state.id;
}
var $state = $(
'<span>' + state.text + '</span>'
);
return $state;
};

$(document).ready(function() {
$('#golongan_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.golongan') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#eselon_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.eselon') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#pangkat_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.pangkat') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#jabatan_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.jabatan') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#unit_kerja_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.unit-kerja') }}',
dataType: 'json',
},
templateResult: formatState
});

$('#satuan_kerja_id').select2({
allowClear: true,
ajax: {
delay: 250,
url: '{{ route('search.satuan-kerja') }}',
dataType: 'json',
},
templateResult: formatState
});
});

$('#golongan_id').on('change', function() {
@this.set('golongan_id',$('#golongan_id').val(),true);
});

$('#eselon_id').on('change', function() {
@this.set('eselon_id',$('#eselon_id').val(),true);
});

$('#pangkat_id').on('change', function() {
@this.set('pangkat_id',$('#pangkat_id').val(),true);
});

$('#jabatan_id').on('change', function() {
@this.set('jabatan_id',$('#jabatan_id').val(),true);
});

$('#unit_kerja_id').on('change', function() {
@this.set('unit_kerja_id',$('#unit_kerja_id').val(),true);
});

$('#satuan_kerja_id').on('change', function() {
@this.set('satuan_kerja_id',$('#satuan_kerja_id').val(),true);
});
</script>
@endpush
