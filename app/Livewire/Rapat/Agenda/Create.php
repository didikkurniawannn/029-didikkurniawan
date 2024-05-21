<?php
namespace App\Livewire\Rapat\Agenda;

use Livewire\Component;
use App\Models\Transaksi\Rapat as Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class Create extends Component
{
    public function create()
    {
        setActivity('Pengguna Mengakses Halaman Membuat Rapat');

        if(Auth::user()->role_id==1){
            $model = Model::where('is_delete','=',0)
            ->where('finish','!=',1)
            ->first();
        }else{
            $model = Model::where('is_delete','=',0)
            ->where('finish','!=',1)
            ->where('created_id',Auth::user()->id)
            ->first();
        }

        $rapat = Model::where('finish','=',0)->where('is_delete','=',0)->where('created_id',Auth::user()->id)->first();
        if(empty($rapat->step)){
            return redirect()->route('rapat.form.informasi');
        }else{
            if($rapat->step == 0){
                // return redirect()->route('bphtb.form.penerima.hak-edit', [Crypt::encrypt($model->id_bphtb)]);
            }elseif($rapat->step == 1){
                // return redirect()->route('bphtb.form.pelepas.hak', [Crypt::encrypt($model->id_bphtb)]);
            }elseif($rapat->step == 2){
                // return redirect()->route('bphtb.form.objek.pajak', [Crypt::encrypt($model->id_bphtb)]);
            }elseif($rapat->step == 3){
                // return redirect()->route('bphtb.form.maps', [Crypt::encrypt($model->id_bphtb)]);
            }elseif($rapat->step == 4){
                // return redirect()->route('main.layanan.bphtb.detail', [Crypt::encrypt($model->id_bphtb)]);
            }
        }
    }
}

