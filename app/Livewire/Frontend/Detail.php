<?php

namespace App\Livewire\Frontend;

use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Detail extends Component
{
    public $data_rapat;
    public $idRapat;
    #[Layout('components.layouts.frontend.app')]

    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat               = $data;
        $this->idRapat                  = $data->id;
    }

    public function render()
    {
        return view('livewire.frontend.detail');
    }
}
