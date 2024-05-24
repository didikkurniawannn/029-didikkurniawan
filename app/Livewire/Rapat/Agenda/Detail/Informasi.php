<?php

namespace App\Livewire\Rapat\Agenda\Detail;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Informasi extends Component
{
    public $data_rapat;
    public $idRapat;
    
    public function render()
    {
        return view('livewire.rapat.agenda.detail.informasi');
    }
    
    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat              = $data;
        // $this->peserta_id           = json_decode($data->peserta_id);
        // $this->keterangan_peserta   = $data->keterangan_peserta;
        // $this->documentList         = json_decode($data->document);
        // $this->listSkpd             = RefInstansi::orderBy('type','asc')->get();
    }
    
}

