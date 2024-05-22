<?php

namespace App\Livewire\Rapat\Agenda;

use Livewire\Component;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Auth;


class Create extends Component
{
    public function create()
    {
        $model = Model::where('finish',1)->where(Auth::user()->id);
        dd($model);
        return view('livewire.rapat.agenda.create');
    }
}
