<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefJenisKelamin extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'ref_jenis_kelamin';
    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}
