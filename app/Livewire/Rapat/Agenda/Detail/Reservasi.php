<?php

namespace App\Livewire\Rapat\Agenda\Detail;

use App\Models\Transaksi\Rapat as Model;
use App\Models\Transaksi\Kehadiran;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Reservasi extends Component
{
    public $rapat;
    public $reservasi;
    
    public function render()
    {
        return view('livewire.rapat.agenda.detail.reservasi');
    }
    
    public function mount($id)
    {
        $this->rapat = Model::where('id', Crypt::decrypt($id))->first();
        $this->reservasi = Kehadiran::where('rapat_id', Crypt::decrypt($id))->get();
    }
    
}

