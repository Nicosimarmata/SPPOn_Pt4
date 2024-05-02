<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $validate = Validator::make($request->all(),[
            "username" => 'string|required',
            "password" => 'string|required',
        ]);
        if ($validate->fails()){
            return redirect('login')->with('eror', 'Validasi gagal dilakukan');
        } 

     

        $username = $request->input('username');
        $password = $request->input('password');
        $auth = Pengguna::attemptLogin($username, $password);
        
        if ($auth) {
            // Khusus yang ada rolenya
            if ($auth->role == "admin"){
                return redirect ()-> route("admin.dashboard");
            } elseif (Auth::pengguna()->role == "siswa"){
                return redirect('/dashboard-siswa');  
            }elseif (Auth::pengguna()->role == "orang_tua"){
                return redirect('/dashboard-orang_tua');  
                }
            return redirect ('/dashboard');
        }  else {
            return back()->with('eror', "username atau password salah");
        }
    }
}
