<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    // public function getUser(){
    //     $user = User::all();
    //     // dd($user);
    //     return response()->json($user); 
    // }
    public function loginPost(Request $request){

         $rules = [
            'username'   => 'required',
            'password'   => 'required',

        ];

        $messages = [
            'username.required'      => 'Username wajib di isi',
            'password.required'        => 'Password wajib di isi',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first(), 400]);
        }
        $req = $request->all();
        $data = User::where('username', $req['username'])->first();
        // return response()->json($data);
        if (!$data) {
            return response()->json([
                'status' => false,
                'message' => 'Username Salah',
            ], 400);
        } else if (Hash::check($req['password'], $data->password_hash)) {
            return response()->json([
                'status' => true,
                'message' => 'Berhasil Login',
                'data'    => $data,
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Password Salah',
            ], 400);
        }
    
    }
}
