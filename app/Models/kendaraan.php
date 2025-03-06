<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';

    protected $fillable = [
            'id_kendaraan',
            'no_pol',
            'tahun_kendaraan',
            'no_mesin',
            'no_rangka',
            'kapasitas mesin',
            'transmisi',
            'id_jns_kendaraan',
            'id_pemilik',
    ];
}
