<?php

namespace App\Livewire\Rapat\Agenda\Detail;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Head extends Component
{
    public $data_rapat;
    public $idRapat;
    public $tanggal;
    public $jam;
    
    public function render()
    {
        return view('livewire.rapat.agenda.detail.head');
    }
    
    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat              = $data;
        $this->jam                     = $data->jam_mulai == $data->jam_selesai ? waktuIndo($data->jam_mulai) .' - Selesai' : waktuIndo($data->jam_mulai) ." - ". waktuIndo($data->jam_selesai)  ;
        $this->tanggal                 = $data->tanggal_mulai == $data->tanggal_selesai ? tglIndo($data->tanggal_mulai) : tglIndo($data->tanggal_mulai) ." - ". tglIndo($data->tanggal_selesai)  ;
        // $this->peserta_id           = json_decode($data->peserta_id);
        // $this->keterangan_peserta   = $data->keterangan_peserta;
        // $this->documentList         = json_decode($data->document);
        // $this->listSkpd             = RefInstansi::orderBy('type','asc')->get();
    }
    
}

