<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAjuan extends Model
{
    use HasFactory;
    public $table = 'mst_jenis_ajuan';
    protected $fillable = [
        'jns_id',
        'jns_nama',
        'jns_aktif',
    ];
    
}
