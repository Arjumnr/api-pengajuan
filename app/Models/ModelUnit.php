<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUnit extends Model
{
    use HasFactory;
    public $table = 'mst_unit_kerja';
    protected $fillable = [
        'unit_kode',
        'unit_level',
        'unit_nama',
        'unit_parent',
    ];
}
