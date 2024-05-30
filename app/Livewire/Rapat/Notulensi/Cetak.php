<?php

namespace App\Livewire\Rapat\Notulensi;

use App\Models\Transaksi\Notulensi;
use App\Models\Transaksi\Kehadiran;
use App\Models\RefInstansi;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class Cetak extends Component
{
    public $user;
    public $instansi;
    public $notulensi;
    public $kehadiran;
    public $rapat;
    public $peserta = [];

    #[Layout('components.layouts.backend.print')]

    public function mount($id){
        $this->rapat    = Model::where('id',[Crypt::decrypt($id)])->first();
        $this->user     = Auth::user();
        $this->instansi = RefInstansi::where('id',$this->user->instansi_id)->first();
        $this->notulensi= Notulensi::where('rapat_id',$this->rapat->id)->first();
        $this->kehadiran= Kehadiran::where('rapat_id',$this->rapat->id)->where('status_kehadiran',1)->get();
        $json_peserta   = json_decode($this->rapat->peserta_id);
        if (!empty($json_peserta)) {
            foreach ( $json_peserta as $val) {
                $nama_dinas = getInstansi($val);
                array_push($this->peserta, $nama_dinas); // Menambahkan nama dinas ke array peserta
            }
        }
    }
    public function render()
    {
        return view('livewire.rapat.notulensi.cetak');
    }
}
