<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "username" => 'string|required',
            "password" => 'string|required',
            "role" => 'string|required',
        ]);
        if ($validate->fails()) {
            return redirect('login')->with('eror', 'Validasi gagal dilakukan');
        }

        $credentials = $request->only('username', 'password');

        if ($request->role == 'admin') {
            $guard = 'pengguna';
            $redirect = route("admin.dashboard");
        } else if ($request->role == 'siswa') {
            $guard = 'siswa';
            $redirect = '/dashboard-siswa';
        } else if ($request->role == 'orang_tua') {
            $guard = 'orangTua';
            $redirect = '/dashboard-orang_tua';
        }

        if (Auth::guard($guard)->attempt($credentials)) {
            return redirect($redirect);
        }

        return back()->with('eror', "username atau password salah");
    }
}
