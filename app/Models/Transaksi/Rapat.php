<?php

namespace App\Models\Transaksi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Rapat extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 't_rapat';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected static $logName = 'Menu';
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->nama . " {$eventName} Oleh: " . Auth::user()->nama;
    }
}
