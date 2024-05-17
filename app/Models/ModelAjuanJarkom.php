<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAjuanJarkom extends Model
{
    use HasFactory;
    public $table = 'dt_ajuan_jarkom';
    protected $fillable = [
        'jarkom_id',
        'jarkom_id_tujuan',
        'jarkom_unit_kerja',
        'jarkom_tujua',
        'jarkom_no_surat',
        'jarkom_tgl_surat',
        'jarkom_perihal',
        'jarkom_email',
        'jarkom_notelp',
        'jarkom_date_input',
        'jarkom_user_input',
        'jarkom_date_update',
        'jarkom_user_update',
        'jarkom_status',

    ];
}
