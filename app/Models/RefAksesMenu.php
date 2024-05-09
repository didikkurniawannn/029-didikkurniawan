<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Facades\Auth;

class RefAksesMenu extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql';
    protected $table = 'ref_role_child';
    protected $primaryKey = 'id';
    
    public function menu()
    {
        return $this->belongsTo(RefMenu::class);
    }
    
    public function role()
    {
        return $this->belongsTo(RefRole::class);
    }
    
    protected static $logName = 'Akses Menu';
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->nama . " {$eventName} Oleh: " . Auth::user()->nama;
    }
}
