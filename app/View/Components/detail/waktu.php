<?php

namespace App\View\Components\detail;

use Closure;
use App\Models\Transaksi\Rapat;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class waktu extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $informasi      = Rapat::find($this->id);
        $desa           = $informasi->toDesa ? ' Desa ' . ucfirst(strtolower($informasi->toDesa->name)) : '';
        $kecamatan      = $informasi->toKecamatan ? ', Kecamatan ' . ucfirst(strtolower($informasi->toKecamatan->name)) : '';
        $kabupaten      = $informasi->toKabupaten ? ', ' . ucfirst(strtolower($informasi->toKabupaten->name)) : '';
        $provinsi       = $informasi->toProvinsi ? ', Provinsi ' . ucfirst(strtolower($informasi->toProvinsi->name)) : '';
        $alamat         = $informasi->alamat . $desa . $kecamatan . $kabupaten . $provinsi;
        $lat            = $informasi->lat;
        $lng            = $informasi->lng;
        return view('components.detail.waktu',[
            'informasi' => $informasi,
            'alamat' => $alamat,
            'lat' => $lat,
            'lng' => $lng
        ]);
    }
}
