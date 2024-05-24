<?php

namespace App\Livewire\Rapat\Agenda\Form;

use App\Models\Transaksi\Rapat as Model;
use App\Models\Province;
use App\Models\Regencies;
use App\Models\Districts;
use App\Models\Villages;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;


class Lokasi extends Component
{
    use LivewireAlert;

    public $idRapat;
    public $tempat;
    public $alamat;
    public $provinsi_id;
    public $kabupaten_id;
    public $kecamatan_id;
    public $desa_id;
    public $lat;
    public $lng;

    public $provinsiList;
    public $kabupatenList;
    public $kecamatanList;
    public $kelurahanList;

    protected $rules =[
        'tempat'        => 'required',
        'alamat'        => 'required',
        'provinsi_id'   => 'required',
        'kabupaten_id'  => 'required',
        'kecamatan_id'  => 'required',
        'desa_id'       => 'required',
        'lat'           => 'required',
        'lng'           => 'required'
    ];

    public function mount($id){
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->idRapat          = $data->id;
        $this->tempat           = $data->tempat;
        $this->alamat           = $data->alamat;
        $this->lat              = $data->lat;
        $this->lng              = $data->lng;
        $this->provinsi_id      = $data->provinsi_id;
        $this->kabupaten_id     = $data->kabupaten_id;
        $this->kecamatan_id     = $data->kecamatan_id;
        $this->desa_id          = $data->desa_id;

        $this->provinsiList        = Province::orderBy('name','asc')->get();
        $this->kabupatenList       = Regencies::where('province_id', $data->provinsi_id)->get();
        $this->kecamatanList       = Districts::where('regency_id', $data->kabupaten_id)->get();
        $this->kelurahanList       = Villages::where('district_id', $data->kecamatan_id)->get();
    }

    public function render()
    {
        return view('livewire.rapat.agenda.form.lokasi');
    }

    public function updatedProvinsiId($provinsiId){
        $this->kabupatenList = Regencies::where('province_id', $this->provinsi_id)->get();
    }
    
    public function updatedKabupatenId($kabupatenId){
        $this->kecamatanList = Districts::where('regency_id', $this->kabupaten_id)->get();
        
    }
    
    public function updatedKecamatanId($kecamatanId){
        $this->kelurahanList = Villages::where('district_id', $this->kecamatan_id)->get();
        
    }

    public function backForm(){
        return redirect()->route('rapat.form.informasi', [Crypt::encrypt($this->idRapat)]);
    }

    public function update(){
        $this->validate();
        $model = Model::updateOrCreate([
                    'id' => $this->idRapat
                ],
                [
                    'tempat'            => $this->tempat,
                    'alamat'            => $this->alamat,
                    'lat'               => $this->lat,
                    'lng'               => $this->lng,
                    'provinsi_id'       => $this->provinsi_id,
                    'kabupaten_id'      => $this->kabupaten_id,
                    'kecamatan_id'      => $this->kecamatan_id,
                    'desa_id'           => $this->desa_id,
                    'step'              => 2,
                    'finish'            => 0,
                    'created_id'        => Auth::user()->id,
                    'updated_id'        => Auth::user()->id,
                    'updated_at'        => date('Y-m-d H:i:s'),
                ]
            );
        if($model->wasRecentlyCreated || $model->wasChanged()){
            setActivity('Membuat atau Memperbarui Step 2 '.Auth::user()->username.' dengan id rapat '.$model->id);
            $this->alert('success', 'Step 2 Pengisian data lokasi berhasil disimpan', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
            ]);
            return redirect()->route('rapat.form.peserta', [Crypt::encrypt($model->id)]);
        }else{
            return $this->alert('error', 'Step 2 Pengisian data lokasi Gagal di Simpan', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
            ]);
        }
    }
}
