<?php

namespace App\Livewire\Frontend;

use App\Models\Transaksi\Kehadiran as Model;
use App\Models\Transaksi\Rapat;
use Livewire\Component;
use Illuminate\Support\Facades\Crypt;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Ticket extends Component
{
    use LivewireAlert;

    public $no_registrasi;
    public $kehadiran;
    public $rapat;
    public $reg;

    #[Layout('components.layouts.frontend.app')]

    public function render()
    {
        return view('livewire.frontend.ticket');
    }

    public function checkRegistrasi()
    {
        $this->reg          = strtoupper($this->no_registrasi);
        $this->kehadiran    = Model::where('no_registrasi',$this->reg)->first();
        if(!empty($this->kehadiran)){
            return $this->alert('info', 'Selamat, No Registrasi ditemukan '. $this->kehadiran->no_registrasi.' anda dapat melanjutkan ke bukti registrasi', [
                'position' => 'top',
                'showConfirmButton' => true,
                'confirmButtonText' => 'Invoice',
                'onConfirmed' => 'denied',
                'timer' => null,
                'toast' => true
            ]);
        }else{
            return $this->alert('error', 'No Registrasi tidak ditemukan', [
                'position' => 'top',
                'showConfirmButton' => true,
                'confirmButtonText' => 'OK',
                'onConfirmed' => 'cancelled',
                'timer' => null,
                'toast' => true
        ]);
        }
    }

    public function denied() 
    {
        return redirect()->route('invoice',[Crypt::encrypt($this->reg)]);
    }

    public function cancelled() 
    {
        $this->forceClose()->closeModal();
    }

    public function getListeners()
    {
        return [
            'denied',
            'dismissed',
            'confirmed'
        ];
    }
}
