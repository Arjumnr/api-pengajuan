<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ModelAjuan;
use Illuminate\Http\Request;

class AjuanController extends Controller
{
    public function getAjuan(){
        $ajuan = ModelAjuan::all();
        if ($ajuan->count() == 0) {
            return response()->json([
                'status' => 404,
                'message' => 'ajuan not found',
                'data' => [],
            ]);
        }else {
            return response()->json([
                'status' => 200,
                'message' => 'Get ajuan Berhasil',
                'data' => $ajuan,
            ]);
        }
    }
}
