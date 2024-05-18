<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view ("admin.dtsiswa.index");
    }
    public function tambahsiswa(){
        return view ("admin.dtsiswa.tambahsiswa");
    }

    // simpan siswa baru
    function store(Request $request){
        $validasi = $request->validate([
            "nama_siswa" => "required|string"
        ]);
    }
}
