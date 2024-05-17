<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPengajuan extends Model
{
    use HasFactory;
    public $table = 'dt_ajuan';
    protected $fillable = [
        'id_ajuan',
        'jenis_ajuan',
        'tgl_ajuan',
        'user_ajuan',
        'tgl_update',
        'user_update', 
        'status_ajuan',
        'ket_ajuan',
        'tipe_ajuan',
    ];


}
