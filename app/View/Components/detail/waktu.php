<?php

namespace App\View\Components\detail;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class waktu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $informasi = [
            'hari' => 'Senin',
            'tanggal' => '15 Mei 2024',
            'waktu_mulai' => '09:00',
            'waktu_selesai' => 'selesai',
            'tempat' => 'Ruang Rapat Diskominfo Kabupaten, Jln Terusan Soreang KM 17 Komplek Pemerintah Daerah Kabupaten Bandung',
            'dress_code' => 'Batik Lengan Panjang'
        ];
        return view('components.detail.waktu',['informasi' => $informasi]);
    }
}
