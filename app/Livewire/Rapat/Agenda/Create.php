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
        setActivity('Pengguna '.Auth::user()->username.' Mengakses Halaman Create Data');
        
        // if(Auth::user()->role_id==1){
        //     $model = Model::where('finish',0)->first();
        // }else{
            $model = Model::where('finish',0)->where('created_id',Auth::user()->id)->first();
        // }

        $rapat = Model::where('finish',0)->where('created_id',Auth::user()->id)->first();
        if(empty($rapat->step) || Auth::user()->role_id==1){
            return redirect()->route('rapat.form.informasi');
        }else{
            if($rapat->finish == 1){
                return redirect()->route('rapat.detail', [Crypt::encrypt($rapat->id)]);
            }else{
                if($rapat->step == 1){
                    return redirect()->route('rapat.form.informasi', [Crypt::encrypt($rapat->id)]);
                }elseif($rapat->step == 2){
                    return redirect()->route('rapat.form.lokasi', [Crypt::encrypt($rapat->id)]);
                }elseif($rapat->step == 3){
                    return redirect()->route('rapat.form.peserta', [Crypt::encrypt($rapat->id)]);
                }elseif($rapat->step == 4){
                    return redirect()->route('rapat.detail', [Crypt::encrypt($rapat->id)]);
                }
            }
        }
    }
}
