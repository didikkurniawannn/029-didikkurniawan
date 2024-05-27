<?php

namespace App\Livewire\Rapat\Agenda\Detail;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Sidebar extends Component
{
    use LivewireAlert;

    public $data_rapat;
    public $idRapat;
    
    public function render()
    {
        return view('livewire.rapat.agenda.detail.sidebar');
    }
    
    public function mount($id)
    {
        $data = Model::where('id',Crypt::decrypt($id))->first();

        $this->data_rapat              = $data;
        $this->idRapat                 = $data->id;
        // $this->peserta_id           = json_decode($data->peserta_id);
        // $this->keterangan_peserta   = $data->keterangan_peserta;
        // $this->documentList         = json_decode($data->document);
        // $this->listSkpd             = RefInstansi::orderBy('type','asc')->get();
    }

    public function submitRapat(){
        $model = Model::updateOrCreate([
                'id' => $this->idRapat
            ],
            [
                'step'                  => 4,
                'finish'                => 1,
                'created_id'            => Auth::user()->id,
                'updated_id'            => Auth::user()->id,
                'updated_at'            => date('Y-m-d H:i:s'),
            ]);

            if($model->wasRecentlyCreated || $model->wasChanged()){
                setActivity('User '.Auth::user()->username.' telah merilis id rapat '.$model->id);
                $this->alert('success', 'Rapat berhasil diverifikasi', [
                        'position' => 'top',
                        'timer' => 3000,
                        'toast' => true,
                        'timerProgressBar' => true,
                ]);
                return redirect()->route('rapat.detail', [Crypt::encrypt($model->id)]);
            }else{
                return $this->alert('error', 'Merilis Data Gagal di Simpan', [
                        'position' => 'top',
                        'timer' => 3000,
                        'toast' => true,
                        'timerProgressBar' => true,
                ]);
            }
    }

    public function enableRapat(){
        $model = Model::updateOrCreate([
                'id' => $this->idRapat
            ],
            [
                'step'                  => 4,
                'finish'                => 1,
                'status'                => 1,
            ]);

            if($model->wasRecentlyCreated || $model->wasChanged()){
                setActivity('User '.Auth::user()->username.' telah menyetujui id rapat '.$model->id);
                $this->alert('success', 'Rapat berhasil diverifikasi', [
                        'position' => 'top',
                        'timer' => 3000,
                        'toast' => true,
                        'timerProgressBar' => true,
                ]);
                return redirect()->route('rapat.detail', [Crypt::encrypt($model->id)]);
            }else{
                return $this->alert('error', 'Data Gagal di Simpan', [
                        'position' => 'top',
                        'timer' => 3000,
                        'toast' => true,
                        'timerProgressBar' => true,
                ]);
            }
    }

    public function disabledVerifikasi($id)
    {
        $this->dispatch("swal:disabledVerifikasi", [
            'type' => 'warning',
            'title' =>'Apa anda yakin ?',
            'text' =>'Setelah memilih YA maka akan dikembalikan ke Pembuat Rapat',
            'id'=>$id
        ]);
    }

    public function disableRapat($id,$catatan){
        $model = Model::updateOrCreate([
                'id' => $id
            ],
            [
                'step'                  => 4,
                'finish'                => 0,
                'status'                => 2,
                'catatan_verifikasi'    => $catatan,
            ]);

            if($model->wasRecentlyCreated || $model->wasChanged()){
                setActivity('User '.Auth::user()->username.' telah menolak id rapat '.$model->id);
                $this->alert('success', 'Rapat berhasil diverifikasi', [
                        'position' => 'top',
                        'timer' => 3000,
                        'toast' => true,
                        'timerProgressBar' => true,
                ]);
                return redirect()->route('rapat.detail', [Crypt::encrypt($model->id)]);
            }else{
                return $this->alert('error', 'Data Gagal di Simpan', [
                        'position' => 'top',
                        'timer' => 3000,
                        'toast' => true,
                        'timerProgressBar' => true,
                ]);
            }
    }

    
}

