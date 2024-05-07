<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'addr_provinces';
    public $timestamps = false; // Menonaktifkan penggunaan timestamps
}
