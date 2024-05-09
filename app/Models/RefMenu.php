<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Facades\Auth;

class RefMenu extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'ref_menu';
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
