<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villages extends Model
{
    use HasFactory;

    protected $table = 'addr_villages';
    public $timestamps = false; // Menonaktifkan penggunaan timestamps
}
