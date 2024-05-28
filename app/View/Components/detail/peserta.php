<?php

namespace App\View\Components\detail;

use Closure;
use Illuminate\Contracts\View\View;
use App\Models\Transaksi\Rapat;
use App\Models\Transaksi\Kehadiran;
use Illuminate\View\Component;

class peserta extends Component
{
    /**
     * Create a new component instance.
     */
    public $data_rapat;
    public $idRapat;
    public $peserta_id;
    public $kehadiran;
    public $peserta = [];

    public $id;

    public function __construct($id)
    {
        // $this->id = $id;
        $data = Rapat::where('id', $id)->first();
        $this->kehadiran = Kehadiran::where('rapat_id',$id)->get();
        $this->data_rapat = $data;
        $this->peserta_id = json_decode($data->peserta_id);
        $this->peserta = []; // Pastikan array ini sudah dideklarasikan
        if (!empty($this->peserta_id)) {
            foreach ($this->peserta_id as $val) {
                $nama_dinas = getInstansi($val);
                array_push($this->peserta, $nama_dinas); // Menambahkan nama dinas ke array peserta
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detail.daftar-peserta',[
            'informasi'=>$this->data_rapat, 
            'peserta' => $this->peserta, 
            'kehadiran' => $this->kehadiran
        ]);
    }
}
