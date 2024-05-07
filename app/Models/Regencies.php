<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regencies extends Model
{
    use HasFactory;

    protected $table = 'addr_regencies';
    public $timestamps = false; // Menonaktifkan penggunaan timestamps
}
