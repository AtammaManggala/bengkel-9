<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailService extends Model
{
    use HasFactory;
    protected $table = 'detailService';

    protected $fillable = [
        'id_detail_service',
        'sparepart',
        'harga',
    ];
}
