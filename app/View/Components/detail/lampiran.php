<?php

namespace App\View\Components\detail;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Transaksi\Rapat;

class lampiran extends Component
{
    /**
     * Create a new component instance.
     */    
    public $data_rapat;
    public $document;
    public $id;

    public function __construct($id)
    {
        $this->id           = $id;
        $data               = Rapat::where('id', $id)->first();
        $this->data_rapat   = $data;
        $this->document     = json_decode($data->document);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detail.download',['informasi'=>$this->data_rapat, 'document' => $this->document]);
    }
}
