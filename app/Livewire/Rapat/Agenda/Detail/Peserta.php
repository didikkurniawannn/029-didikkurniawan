<?php

namespace App\Livewire\Rapat\Agenda\Detail;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Peserta extends Component
{
    public $data_rapat;
    public $idRapat;
    public $peserta_id;
    public $peserta = [];
    
    public function render()
    {
        return view('livewire.rapat.agenda.detail.peserta');
    }
    
    public function mount($id)
    {
        $data = Model::where('id', Crypt::decrypt($id))->first();
        $this->data_rapat = $data;
        $this->peserta_id = json_decode($data->peserta_id);
        $this->peserta = []; // Pastikan array ini sudah dideklarasikan
        if (!empty($this->peserta_id)) {
            foreach ($this->peserta_id as $val) {
                $nama_dinas = getInstansi($val);
                array_push($this->peserta, $nama_dinas); // Menambahkan nama dinas ke array peserta
            }
        }
    }
    
}

