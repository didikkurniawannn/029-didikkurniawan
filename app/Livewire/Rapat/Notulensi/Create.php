<?php

namespace App\Livewire\Rapat\Notulensi;

use Livewire\Component;
use App\Models\Transaksi\Rapat as Model;
use App\Models\Transaksi\Kehadiran;
use App\Models\Transaksi\Notulensi;

use Illuminate\Support\Facades\Crypt;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Storage;

class Create extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $data_rapat;
    public $idRapat;
    public $reservasi;
    public $notulensi;
    public $active = 'catatan';
    public $rengkuman_diskusi;
    public $kesimpulan;
    public $tindak_lanjut;
    public $documentList;
    public $fotoList;
    public $foto = [];
    public $document = [];
    public $jumlah_pendaftar;
    public $jumlah_hadir;

    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat               = $data;
        $this->idRapat                  = $data->id;
        $this->reservasi                = Kehadiran::where('rapat_id', $this->idRapat)->get();
        $this->jumlah_pendaftar         = Kehadiran::where('rapat_id', $this->idRapat)->count();
        $this->jumlah_hadir             = Kehadiran::where('rapat_id', $this->idRapat)->where('status_kehadiran', 1)->count();
        $this->notulensi                = Notulensi::where('rapat_id',$data->id)->first();
        $this->rengkuman_diskusi        = empty($this->notulensi->rengkuman_diskusi) ? '-' : $this->notulensi->rengkuman_diskusi ;
        $this->kesimpulan               = empty($this->notulensi->kesimpulan) ? '-' : $this->notulensi->kesimpulan ;
        $this->tindak_lanjut            = empty($this->notulensi->tindak_lanjut) ? '-' : $this->notulensi->tindak_lanjut ;
        $this->documentList             = empty($this->notulensi->document) ? '' : json_decode($this->notulensi->document);
        $this->fotoList                 = empty($this->notulensi->foto) ? '' : json_decode($this->notulensi->foto);

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
                'lama_berlangsung' => $this->calculateDuration(),
                'jumlah_pendaftar' => $this->jumlah_pendaftar,
                'jumlah_hadir' => $this->jumlah_hadir
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

    public function updateCatatan(){
        $model = Notulensi::updateOrCreate(
            ['rapat_id' => $this->data_rapat->id],
            [
                'rengkuman_diskusi' => $this->rengkuman_diskusi,
                'kesimpulan'        => $this->kesimpulan,
                'tindak_lanjut'     => $this->tindak_lanjut,

            ]
        );

        if($model->wasRecentlyCreated || $model->wasChanged()){
            $this->active = 'catatan';
            return $this->alert( 'success', 'Catatan Berhasil Ditambahkan', [
                'position' => 'top-end',
                'timer' => 500,
                'toast' => true,
            ]);
        }else{
            return $this->alert( 'error', 'Catatan Gagal Ditambahkan', [
                'position' => 'top-end',
                'timer' => 500,
                'toast' => true,
            ]);
        }
    }

    public function updateFoto(){
        if(!empty($this->foto)){
            $this->fotoList = [];
            $folderPathImages = "rapat/notulensi/foto";
            if (!file_exists(Storage::disk('public')->path($folderPathImages))) {
                Storage::disk('public')->makeDirectory($folderPathImages, 0755, true);
            }
            
            foreach($this->foto as $value){
                $uploadedFileImages = $value;
                $fileNameImages = $value->getClientOriginalName();
                $newFileNameImages = time() . '_' . str_replace(' ','_',strtolower($fileNameImages));
                array_push($this->fotoList,$folderPathImages.'/'.$newFileNameImages);
                $value->storeAs($folderPathImages, $newFileNameImages, 'public');

            }
            $this->active = 'foto';
        }
        
        $model = Notulensi::updateOrCreate(
                ['rapat_id' => $this->data_rapat->id],
                ['foto'     => json_encode($this->fotoList)]
            );
            // Hanya perbarui 'document' jika 'documentList' tidak kosong
            if (!empty($this->fotoList)) {
                $model->foto = json_encode($this->fotoList);
                $model->save();
            }
            if($model->wasRecentlyCreated || $model->wasChanged()){
                $this->active = 'foto';
                return $this->alert( 'success', 'Foto Berhasil Ditambahkan', [
                    'position' => 'top-end',
                    'timer' => 500,
                    'toast' => true,
                ]);
            }else{
                return $this->alert( 'error', 'Foto Gagal Ditambahkan', [
                    'position' => 'top-end',
                    'timer' => 500,
                    'toast' => true,
                ]);
            }
    }

    public function updateDoc(){
        if(!empty($this->document)){
            $this->documentList = [];
            $folderPathImages = "rapat/notulensi/document";
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
            $this->active = 'document';
        }
        
        $model = Notulensi::updateOrCreate(
                ['rapat_id' => $this->data_rapat->id],
                ['document'     => json_encode($this->documentList)]
            );
            // Hanya perbarui 'document' jika 'documentList' tidak kosong
            if (!empty($this->documentList)) {
                $model->document = json_encode($this->documentList);
                $model->save();
            }
            if($model->wasRecentlyCreated || $model->wasChanged()){
                $this->active = 'document';
                return $this->alert( 'success', 'Document Berhasil Ditambahkan', [
                    'position' => 'top-end',
                    'timer' => 500,
                    'toast' => true,
                ]);
            }else{
                return $this->alert( 'error', 'Document Gagal Ditambahkan', [
                    'position' => 'top-end',
                    'timer' => 500,
                    'toast' => true,
                ]);
            }
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
