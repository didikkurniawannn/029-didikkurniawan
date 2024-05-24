<?php

namespace App\Livewire\Rapat\Agenda\Form;

use App\Models\Transaksi\Rapat as Model;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class Informasi extends Component
{
    use LivewireAlert;
    public $tanggal_mulai,
    $tanggal_selesai,
    $jam_mulai,
    $jam_selesai,
    $nama_rapat,
    $dress_code,
    $agenda,
    $tujuan,
    $catatan,
    $idRapat;

    protected $rules =[
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'nama_rapat' => 'required',
            'dress_code' => 'required',
            'agenda' => 'required',
            'tujuan' => 'required',
            'catatan' => 'required',
    ];

    public function mount($id = null){
        if($id){
            $data = Model::where('id',Crypt::decrypt($id))->first();
            $this->idRapat          = $data->id;
            $this->tanggal_mulai    = $data->tanggal_mulai;
            $this->tanggal_selesai  = $data->tanggal_selesai;
            $this->jam_mulai        = $data->jam_mulai;
            $this->jam_selesai      = $data->jam_selesai;
            $this->nama_rapat       = $data->nama_rapat;
            $this->dress_code       = $data->dress_code;
            $this->agenda           = $data->agenda;
            $this->tujuan           = $data->tujuan;
            $this->catatan          = $data->catatan;
        }
    }

    public function render()
    {
        return view('livewire.rapat.agenda.form.informasi');
    }

    public function store(){
        $this->validate();

        $model = Model::updateOrCreate([
            // Kriteria untuk mencari record yang ada
                'id' => $this->idRapat
                ],
                [
                    // Data untuk update atau create
                    'tanggal_mulai'     => $this->tanggal_mulai,
                    'tanggal_selesai'   => $this->tanggal_selesai,
                    'jam_mulai'         => $this->jam_mulai,
                    'jam_selesai'       => $this->jam_selesai,
                    'nama_rapat'        => $this->nama_rapat,
                    'dress_code'        => $this->dress_code,
                    'agenda'            => $this->agenda,
                    'tujuan'            => $this->tujuan,
                    'catatan'           => $this->catatan,
                    'step'              => 1,
                    'finish'            => 0,
                    'created_id'        => Auth::user()->id,
                    'updated_id'        => Auth::user()->id,
                    'updated_at'        => date('Y-m-d H:i:s'),
                ]
            );
        if($model->wasRecentlyCreated || $model->wasChanged()){
            setActivity('Membuat atau Memperbarui '.Auth::user()->username.' dengan id rapat '.$model->id);
            $this->alert('success', 'Step 1 Pengisian data informasi berhasil disimpan', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
            ]);
            return redirect()->route('rapat.form.lokasi', [Crypt::encrypt($model->id)]);
        }else{
            return $this->alert('error', 'Step 1 Pengisian data informasi Gagal di Simpan', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
            ]);
        }
    }
}
