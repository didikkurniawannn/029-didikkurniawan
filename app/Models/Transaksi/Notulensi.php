<?php

namespace App\Models\Transaksi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Notulensi extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 't_notulensi';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected static $logName = 'Notulensi';
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


}
