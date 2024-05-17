<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ModelUnit;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function store(Request $request)
    {
        try{
            
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
