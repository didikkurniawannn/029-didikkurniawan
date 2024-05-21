<?php

namespace App\Livewire\Rapat\Agenda\Form;

use Livewire\Component;
use App\Models\Transaksi\Rapat as Model;
use App\Models\Villages;
use App\Models\Districts;
use App\Models\Province;
use App\Models\Regencies;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class Informasi extends Component
{
    use LivewireAlert;

    public $id_rapat;
    public $peserta_id;
    public $tanggal_mulai;
    public $tanggal_selesai;
    public $jam_mulai;
    public $jam_selesai;
    public $nama_rapat;
    public $agenda;
    public $tujuan;
    public $catatan;
    public $status;
    public $tempat;
    public $dress_code;
    public $documen;
    public $alamat;
    public $step;
    public $finish;
    public $created_at;
    public $created_id;
    public $updated_at;
    public $updated_id;
    public $deleted_at;
    public $deleted_id;
    public $is_delete;

    public $provinsiList;
    public $kabupatenList;
    public $kecamatanList;
    public $kelurahanList;
    
    public function render()
    {
        return view('livewire.rapat.agenda.form.informasi');
    }

    public function mount()
    {
        $lastPenjual = Model::count();
        if ($lastPenjual) {
            $this->id_rapat = $lastPenjual + 1;
        } else {
            $this->id_rapat = 1;
        }

        $this->provinsiList        = Province::orderBy('name','ASC')->get();
        $this->kabupatenList       = Districts::where('province_id', $this->provinsi_id)->orderBy('name','ASC')->get();
        $this->kecamatanList       = Regencies::where('regency_id', $this->kabupaten_id)->orderBy('name','ASC')->get();
        $this->kelurahanList       = Villages::where('district_id', $this->kecamatan_id)->orderBy('name','ASC')->get();
        
    }
}
