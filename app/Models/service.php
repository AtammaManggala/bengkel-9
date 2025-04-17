<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'service';

    protected $fillable = [
        'id_service',
        'jns_kendaraan',
        'keluhan',
        'nm_mekanik',
        'tgl_masuk',
        'tgl_keluar',
    ];
}
