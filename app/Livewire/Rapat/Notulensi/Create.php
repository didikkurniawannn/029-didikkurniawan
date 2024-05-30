<?php

namespace App\Livewire\Rapat\Notulensi;

use Livewire\Component;
use App\Models\Transaksi\Rapat as Model;
use App\Models\Transaksi\Kehadiran;
use App\Models\Transaksi\Notulensi;

use Illuminate\Support\Facades\Crypt;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Create extends Component
{
    use LivewireAlert;
    public $data_rapat;
    public $idRapat;
    public $reservasi;
    public $notulensi;

    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat               = $data;
        $this->idRapat                  = $data->id;
        $this->reservasi                = Kehadiran::where('rapat_id', $this->idRapat)->get();
        $this->notulensi                = Notulensi::where('rapat_id',$data->id)->first();
    }

    public function render()
    {
        return view('livewire.rapat.notulensi.create');
    }

    public function startRapat(){
        $model = Notulensi::updateOrCreate(
            ['rapat_id' => $this->data_rapat->id],
            ['tanggal_mulai' => now()]
        );
        
        if($model->wasRecentlyCreated || $model->wasChanged()){
            $this->alert( 'success', 'Rapat dimulai', [
                'position' => 'top-end',
                'timer' => 500,
                'toast' => true,
            ]);
        }else{
            $this->alert( 'error', 'Gagal memulai rapat', [
                'position' => 'top-end',
                'timer' => 500,
                'toast' => true,
            ]);
        }
            
    }

    public function endRapat(){
        $model = Notulensi::updateOrCreate(
            ['rapat_id' => $this->data_rapat->id],
            [
                'tanggal_selesai' => now(),
                'lama_berlangsung' => $this->calculateDuration()
            ]
        );

        $rapat = Model::where('id',$this->data_rapat->id)->first();
        $rapat->update(['status' => 3]);
        
        if($model->wasRecentlyCreated || $model->wasChanged()){
            $this->alert( 'success', 'Rapat selesai', [
                'position' => 'top-end',
                'timer' => 500,
                'toast' => true,
            ]);
        }else{
            $this->alert( 'error', 'Gagal menyelesaikan rapat', [
                'position' => 'top-end',
                'timer' => 500,
                'toast' => true,
            ]);
        }
            
    }

    public function calculateDuration(){
        $start = new \DateTime($this->notulensi->tanggal_mulai);
        $end = new \DateTime(now());
        $duration = $start->diff($end);
        return $duration->format('%h jam %i menit %s detik');
    }
}
