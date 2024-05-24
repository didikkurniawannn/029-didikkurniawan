<?php

namespace App\Livewire\Rapat\Agenda\Detail;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Lampiran extends Component
{
    public $data_rapat;
    public $idRapat;
    public $document;
    
    public function render()
    {
        return view('livewire.rapat.agenda.detail.lampiran');
    }
    
    public function mount($id)
    {
        $data               = Model::where('id', Crypt::decrypt($id))->first();
        $this->data_rapat   = $data;
        $this->document     = json_decode($data->document);
    }
    
}

