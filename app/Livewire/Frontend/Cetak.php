<?php

namespace App\Livewire\Frontend;

use App\Models\Transaksi\Kehadiran as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\Attributes\Layout;


class Cetak extends Component
{
    public $idRapat;
    public $kehadiran;

    #[Layout('components.layouts.frontend.print')]
    
    public function mount($id){
        
        $this->idRapat      = Crypt::decrypt($id);
        $this->kehadiran    = Model::where('id',$this->idRapat)->first();
    }

    public function render()
    {
        return view('livewire.frontend.cetak');
    }

}
