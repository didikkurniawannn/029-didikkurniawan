<?php
namespace App\Livewire\Main\Layanan\Bphtb\Detail;
use App\Models\Bphtb\Verifikasi as Model;
use LivewireUI\Modal\ModalComponent;

class Timeline extends ModalComponent
{
    public $id_bphtb;
    public $data;
    
    public function render()
    {
        return view('livewire.main.layanan.bphtb.detail.timeline');
    }
    
    public function mount($id)
    {
        $bphtb = $id;
        $this->data = Model::where('id_bphtb',$bphtb)->where('bphtb_jenis',1)->orderBy('created_at','asc')->get();
    }
    
    
}

