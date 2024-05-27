<?php

namespace App\Livewire\Frontend\Modal;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Transaksi\Rapat as Model;
use App\Models\RefInstansi;
use Illuminate\Support\Facades\Crypt;

class DetailKalender extends ModalComponent
{
    public $data;
    public $jam;
    public $tanggal;
    public $instansi;
    
    public function mount($id)
    {
        $this->data                     = Model::where('id',$id)->first();
        $this->jam                      = $this->data->jam_mulai == $this->data->jam_selesai ? waktuIndo($this->data->jam_mulai) .' - Selesai' : waktuIndo($this->data->jam_mulai) ." - ". waktuIndo($this->data->jam_selesai)  ;
        $this->tanggal                  = $this->data->tanggal_mulai == $this->data->tanggal_selesai ? tglIndo($this->data->tanggal_mulai) : tglIndo($this->data->tanggal_mulai) ." - ". tglIndo($this->data->tanggal_selesai)  ;
        $this->instansi                 = RefInstansi::where('id', $this->data->user->instansi_id)->first();
    }
    public function render()
    {
        return view('livewire.frontend.modal.detail-kalender');
    }
    
    public static function destroyOnClose(): bool
    {
        return true;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }
}
