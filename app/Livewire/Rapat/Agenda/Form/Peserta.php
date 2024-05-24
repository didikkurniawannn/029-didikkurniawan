<?php

namespace App\Livewire\Rapat\Agenda\Form;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi\Rapat as Model;
use App\Models\RefInstansi;
use Livewire\WithFileUploads;
use Storage;

class Peserta extends Component
{ 
    use LivewireAlert;
    use WithFileUploads;

    public $idRapat;
    public $peserta_id = [];
    public $document = [];
    public $documentList = [];
    public $keterangan_peserta;
    public $listSkpd;
    public $existingFiles = [];
    protected $rules =[
        'peserta_id' => 'required',
        'keterangan_peserta' => 'required'
    ];

    public function mount($id){
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->idRapat              = $data->id;
        $this->peserta_id           = json_decode($data->peserta_id);
        $this->keterangan_peserta   = $data->keterangan_peserta;
        $this->documentList         = json_decode($data->document);
        $this->listSkpd             = RefInstansi::orderBy('type','asc')->get();

        // dd($this->existingFiles);
    }

    public function render()
    {
        return view('livewire.rapat.agenda.form.peserta');
    }

    public function update(){
        $this->validate();
        if(!empty($this->document)){
            $this->documentList = [];
            $folderPathImages = "rapat/lampiran";
            if (!file_exists(Storage::disk('public')->path($folderPathImages))) {
                Storage::disk('public')->makeDirectory($folderPathImages, 0755, true);
            }
            
            foreach($this->document as $value){
                $uploadedFileImages = $value;
                $fileNameImages = $value->getClientOriginalName();
                $newFileNameImages = time() . '_' . str_replace(' ','_',strtolower($fileNameImages));
                array_push($this->documentList,$folderPathImages.'/'.$newFileNameImages);
                $value->storeAs($folderPathImages, $newFileNameImages, 'public');

            }
        }
        // if(!empty($this->multi_gambar_edit)){
        //     $model->multi_gambar    = json_encode($this->images);
        // }
        
        $model = Model::updateOrCreate(
                [
                    'id' => $this->idRapat
                ],
                [
                    'peserta_id'            => json_encode($this->peserta_id),
                    'keterangan_peserta'    => $this->keterangan_peserta,
                    'step'                  => 3,
                    'finish'                => 0,
                    'created_id'            => Auth::user()->id,
                    'updated_id'            => Auth::user()->id,
                    'updated_at'            => date('Y-m-d H:i:s'),
                ]
            );
            // Hanya perbarui 'document' jika 'documentList' tidak kosong
            if (!empty($this->documentList)) {
                $model->document = json_encode($this->documentList);
                $model->save();
            }
        if($model->wasRecentlyCreated || $model->wasChanged()){
            setActivity('Membuat atau Memperbarui Step 3 '.Auth::user()->username.' dengan id rapat '.$model->id);
            $this->alert('success', 'Step 3 Pengisian data peserta berhasil disimpan', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
            ]);
            return redirect()->route('rapat.detail', [Crypt::encrypt($model->id)]);
        }else{
            return $this->alert('error', 'Step 3 Pengisian data peserta Gagal di Simpan', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
            ]);
        }
    }
    
    public function backForm(){
        return redirect()->route('rapat.detail', [Crypt::encrypt($this->idRapat)]);
    }
}
