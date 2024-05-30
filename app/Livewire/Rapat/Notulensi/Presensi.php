<?php

namespace App\Livewire\Rapat\Notulensi;

use Livewire\Component;
use App\Models\Transaksi\Rapat as Model;
use App\Models\Transaksi\Kehadiran;
use Illuminate\Support\Facades\Crypt;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Presensi extends Component
{
    use LivewireAlert;

    public $data_rapat;
    public $idRapat;
    public $reservasi;

    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat               = $data;
        $this->idRapat                  = $data->id;
        $this->reservasi                = Kehadiran::where('rapat_id', $this->idRapat)->get();
    }

    public function render()
    {
        return view('livewire.rapat.notulensi.presensi');
    }

    public function status($id)
    {
        $model = Kehadiran::where('id', $id)->firstOrFail();
        $newStatus = $model->status_verifikasi == 1 ? 0 : 1;
        $infoStatus = $newStatus == 0 ? "Tidak Hadir" : "Hadir"; 
        $model->update(
            [
                'status_verifikasi' => $newStatus,
                'tgl_verifikasi' => now(),
                'status_kehadiran' => $newStatus
            ]
        );
        $type = $newStatus == 0 ? "error" : "success"; 
        $this->alert( $type, $infoStatus, [
            'position' => 'top-end',
            'timer' => 500,
            'toast' => true,
        ]);

    }
}
