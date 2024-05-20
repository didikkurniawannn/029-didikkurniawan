<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class RefRole extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql';
    protected $table = 'ref_roles';
    protected $primaryKey = 'id';
    
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
    
    protected static function boot()
    {
        parent::boot();
        
    }
    
    protected static $logName = 'Role';
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->nama . " {$eventName} Oleh: " . Auth::user()->nama;
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
