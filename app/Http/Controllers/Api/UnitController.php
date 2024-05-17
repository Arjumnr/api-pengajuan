<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ModelUnit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function getUnit(){
        $unit = ModelUnit::all();
        if ($unit->count() == 0) {
            return response()->json([
                'status' => 404,
                'message' => 'Unit not found',
                'data' => [],
            ]);
        }else {
            return response()->json([
                'status' => 200,
                'message' => 'Get Unit Berhasil',
                'data' => $unit,
            ]);
        }
    }
}
