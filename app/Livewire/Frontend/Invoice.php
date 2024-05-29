<?php

namespace App\Livewire\Frontend;

use App\Models\Transaksi\Kehadiran as Model;
use App\Models\Transaksi\Rapat;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Invoice extends Component
{
    public $noReg;
    public $kehadiran;
    public $rapat;
    public $jam;
    public $tanggal;
    public $alamat;

    #[Layout('components.layouts.frontend.app')]
    
    public function mount($id){
        
        
        $this->noReg        = Crypt::decrypt($id);
        $this->kehadiran    = Model::where('no_registrasi',$this->noReg)->first();
        $this->rapat        = Rapat::where('id',$this->kehadiran->rapat_id)->first();
        $desa               = $this->rapat->toDesa ? ' Desa ' . ucfirst(strtolower($this->rapat->toDesa->name)) : '';
        $kecamatan          = $this->rapat->toKecamatan ? ', Kecamatan ' . ucfirst(strtolower($this->rapat->toKecamatan->name)) : '';
        $kabupaten          = $this->rapat->toKabupaten ? ', ' . ucfirst(strtolower($this->rapat->toKabupaten->name)) : '';
        $provinsi           = $this->rapat->toProvinsi ? ', Provinsi ' . ucfirst(strtolower($this->rapat->toProvinsi->name)) : '';
        

        $this->jam          = $this->rapat->jam_mulai == $this->rapat->jam_selesai ? waktuIndo($this->rapat->jam_mulai) .' - Selesai' : waktuIndo($this->rapat->jam_mulai) ." - ". waktuIndo($this->rapat->jam_selesai)  ;
        $this->tanggal      = $this->rapat->tanggal_mulai == $this->rapat->tanggal_selesai ? tglIndoHari($this->rapat->tanggal_mulai) : tglIndoHari($this->rapat->tanggal_mulai) ." - ". tglIndoHari($this->rapat->tanggal_selesai)  ;
        $this->alamat       = $this->rapat->alamat . $desa . $kecamatan . $kabupaten . $provinsi;
        
    }

    public function render()
    {
        return view('livewire.frontend.invoice');
    }
}
