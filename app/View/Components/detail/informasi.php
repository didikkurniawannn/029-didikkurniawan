<?php

namespace App\View\Components\detail;

use Closure;
use App\Models\Transaksi\Rapat;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class informasi extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $informasi = Rapat::find($this->id);
        return view('components.detail.informasi',['informasi' => $informasi]);
    }
}
