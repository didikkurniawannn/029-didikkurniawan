<?php

namespace App\Livewire\Rapat\Agenda;

use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class Detail extends Component
{
    public $data_rapat;
    public $idRapat;

    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat               = $data;
        $this->idRapat                  = $data->id;
        // $this->peserta_id           = json_decode($data->peserta_id);
        // $this->keterangan_peserta   = $data->keterangan_peserta;
        // $this->documentList         = json_decode($data->document);
        // $this->listSkpd             = RefInstansi::orderBy('type','asc')->get();
    }

    public function render()
    {
        return view('livewire.rapat.agenda.detail');
    }
}
