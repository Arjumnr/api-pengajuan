<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBerkas extends Model
{
    use HasFactory;
    public $table = 'dt_berkas';
    protected $fillable = [
        'berkas_id',
        'berkas_id_ajuan',
        'berkas_path_file',
        'berkas_status',
        'berkas_date_input',
    ];
}
