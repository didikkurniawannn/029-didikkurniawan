<?php

namespace App\Livewire\Rapat\Agenda\Detail;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Lokasi extends Component
{
    public $data_rapat;
    public $idRapat;
    public $jam;
    public $tanggal;
    public $alamat;
    public $lat;
    public $lng;
    
    public function render()
    {
        return view('livewire.rapat.agenda.detail.lokasi');
    }
    
    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat               = $data; 
        $this->jam                      = $data->jam_mulai == $data->jam_selesai ? waktuIndo($data->jam_mulai) .' - Selesai' : waktuIndo($data->jam_mulai) ." - ". waktuIndo($data->jam_selesai)  ;
        $this->tanggal                  = $data->tanggal_mulai == $data->tanggal_selesai ? tglIndo($data->tanggal_mulai).' - Selesai' : tglIndo($data->tanggal_mulai) ." - ". tglIndo($data->tanggal_selesai)  ;
        $this->alamat                   = $data->alamat .' Desa '.ucfirst(strtolower($data->toDesa->name)).', Kecamatan '.ucfirst(strtolower($data->toKecamatan->name))
                                            .', '.ucfirst(strtolower($data->toKabupaten->name)).', Provinsi '.ucfirst(strtolower($data->toProvinsi->name));
        $this->lat                      = $data->lat;
        $this->lng                      = $data->lng;
    }
    
}

