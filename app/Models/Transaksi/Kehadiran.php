<?php

namespace App\Models\Transaksi;

use App\Models\RefInstansi;
// use App\Models\Transaksi\Rapat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Kehadiran extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 't_registrasi';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected static $logName = 'Kehadiran';
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->nama . " {$eventName} Oleh: " . Auth::user()->nama;
    }

    public function rapat()
    {
        return $this->belongsTo(Rapat::class,'rapat_id');
    }

    public function instansi()
    {
        return $this->belongsTo(RefInstansi::class,'instansi_id');
    }


}
