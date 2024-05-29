<?php

namespace App\Livewire\Frontend\Modal;

use LivewireUI\Modal\ModalComponent;
use App\Models\Transaksi\Kehadiran as Model;
use App\Models\Transaksi\Rapat;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;
use App\Models\RefInstansi;
use Illuminate\Support\Facades\Crypt;


class Konfirmasi extends ModalComponent
{
    use LivewireAlert;

    public $data;
    public $jam;
    public $tanggal;
    public $instansi_list;

    public $rapat_id;
    public $instansi;
    public $no_registrasi;
    public $tgl_registrasi;
    public $nama;
    public $nip;
    public $jabatan;
    public $email;
    public $no_telp;
    public $tgl_kehadiran;
    public $status_kehadiran;
    public $catatan;
    public $jenis_peserta;
    public $kehadiran_id;

    protected $rules =[
        'rapat_id'  => 'required',
        'instansi' => 'required',
        'nama' => 'required',
        'nip' => 'required|min:16|max:16',
        'jabatan' => 'required',
        'email' => 'required',
        'no_telp' => 'required',
        'jenis_peserta' => 'required',
    ];  


    public function mount($id)
    {
        $this->data                     = Rapat::where('id',$id)->first();
        $this->jam                      = $this->data->jam_mulai == $this->data->jam_selesai ? waktuIndo($this->data->jam_mulai) .' - Selesai' : waktuIndo($this->data->jam_mulai) ." - ". waktuIndo($this->data->jam_selesai)  ;
        $this->tanggal                  = $this->data->tanggal_mulai == $this->data->tanggal_selesai ? tglIndo($this->data->tanggal_mulai) : tglIndo($this->data->tanggal_mulai) ." - ". tglIndo($this->data->tanggal_selesai)  ;
        $this->instansi_list            = RefInstansi::get();
        $this->rapat_id                 = $id;
    }

    public function render()
    {
        return view('livewire.frontend.modal.konfirmasi');
    }

    public function store(){
        // dd(generateTicketNumbers());
        // $this->kehadiran_id = 2;

        // return $this->alert('info', 'selamat anda berhasil registrasi, kode registrasi '.'123'.' mohon simpan kode tersebut untuk kehadiran', [
        //     'showDenyButton' => true,
        //     'denyButtonText' => 'Invoice',
        //     'showCancelButton' => true,
        //     'cancelButtonText' => 'Cancel',
        //     'onDenied' => 'denied',
        //     'onDismissed' => 'cancelled',
        //     'timer' => null,
        // ]);
        $this->validate();
        $model = Model::create(
                [
                    'rapat_id'          => $this->rapat_id,
                    'instansi'          => $this->instansi,
                    'no_registrasi'     => generateTicketNumbers(),
                    'tgl_registrasi'    => date('Y-m-d H:i:s'),
                    'nama'              => $this->nama,
                    'nip'               => $this->nip,
                    'jabatan'           => $this->jabatan,
                    'email'             => $this->email,
                    'no_telp'           => $this->no_telp,
                    'jenis_peserta'     => $this->jenis_peserta,
                    'created_at'        => date('Y-m-d H:i:s'),
                ]
            );
        if($model->save()){
            $this->kehadiran_id = $model->no_registrasi;
            return $this->alert('info', 'selamat anda berhasil registrasi, kode registrasi '.$model->no_registrasi.' mohon simpan kode tersebut untuk kehadiran', [
                'showConfirmButton' => true,
                'confirmButtonText' => 'OK',
                'onConfirmed' => 'denied',
                'timer' => null,
                'toast' => true
            ]);
        }else{
            return $this->alert('error', 'Gagal melakukan registrasi', [
                    'position' => 'top',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
            ]);
        }
    }

    public static function destroyOnClose(): bool
    {
        return true;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }
    public function denied() 
    {
        return redirect()->route('invoice',[Crypt::encrypt($this->kehadiran_id)]);
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
