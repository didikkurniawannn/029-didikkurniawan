<?php

namespace App\Models\Transaksi;

use App\Models\Villages;
use App\Models\Regencies;
use App\Models\Province;
use App\Models\Districts;
use App\Models\RefInstansi;
use App\Models\User;
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

    public function user()
    {
        return $this->belongsTo(User::class,'created_id');
    }

    public function instansi()
    {
        return $this->belongsTo(RefInstansi::class,'instansi_id');
    }

    public function toDesa()
    {
        return $this->hasOne(Villages::class, 'id', 'desa_id');
    }

    public function toKecamatan()
    {
        return $this->hasOne(Districts::class, 'id','kecamatan_id');
    }

    public function toKabupaten()
    {
        return $this->hasOne(Regencies::class, 'id','kabupaten_id');
    }

    public function toProvinsi()
    {
        return $this->hasOne(Province::class, 'id','provinsi_id');
    }
}
