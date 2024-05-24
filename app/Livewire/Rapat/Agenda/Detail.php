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
    }

    public function render()
    {
        return view('livewire.rapat.agenda.detail');
    }
}
