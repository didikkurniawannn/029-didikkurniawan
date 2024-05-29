<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\RefSetting;


class Contact extends Component
{
    #[Layout('components.layouts.frontend.app')]
    public function render()
    {
        $data = RefSetting::first();
        return view('livewire.frontend.contact',['data' => $data]);
    }
}
