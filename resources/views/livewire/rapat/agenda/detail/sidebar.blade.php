<div>
    <!--begin::Section-->
    <div class="mb-7">

        <!--begin::Details-->
        <div class="d-flex align-items-center">

            <!--begin::Info-->
            <div class="d-flex flex-column">
                <!--begin::Name-->
                <div class="fs-4 fw-bold text-gray-900 me-2">{{ $data_rapat->user->nama }}</div>
                <!--end::Name-->

                <!--begin::Email-->
                <div href="#" class="fw-semibold text-gray-600">{{ $data_rapat->user->instansi->name }}</div>
                <!--end::Email-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->
    </div>
    <!--end::Section-->

    <!--begin::Actions-->
    <div class="mb-0">
        @if ($data_rapat->finish != 1 && Auth::user()->role_id != 1)
        <div class="separator separator-dashed mb-7"></div>
        <center>
            <div class="d-grid gap-2">
                <a class="btn btn-warning text-center btn-block" wire:click="submitRapat">
                    <span wire:loading class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    Simpan dan Selesai
                </a>
            </div>
        </center>
        @endif

        @if ($data_rapat->step == 4 && $data_rapat->finish == 1 && Auth::user()->role_id == 1)
        <div class="separator separator-dashed mb-7"></div>
        <center>
            @if($data_rapat->status == 0 || $data_rapat->status == 2)
            <div class="d-grid gap-2">
                <a class="btn btn-success text-center btn-block" wire:click="enableRapat">
                    <span wire:loading class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    Setujui Rapat
                </a>
            </div>
            @elseif($data_rapat->status == 1)
            <div class="d-grid gap-2 mt-2">
                <a class="btn btn-danger text-center btn-block" wire:click="disabledVerifikasi({{ $this->idRapat }})">
                    <span wire:loading class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    Tolak Rapat
                </a>
            </div>
            @endif
        </center>
        @endif
    </div>
    <!--end::Actions-->

</div>

@push('js')
<script>
    window.addEventListener('swal:disabledVerifikasi', event => {
    Swal.fire({
        title: event.detail[0].title,
        text: event.detail[0].text,
        icon: "warning",
        html: event.detail.html,
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Catatan Verifikasi",
        input: 'text',
        allowOutsideClick: false,
        timer: null
    }).then((result) => {
      if (result.value) {
        @this.call('disableRapat',event.detail[0].id,result.value);
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