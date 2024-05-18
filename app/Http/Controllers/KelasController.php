<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    public function index(){
        $kelas=Kelas::all();
        return view ("admin.dtkelas.index",['kelas'=>$kelas]);
    }
    //button tambah data mengarah ke hal tambah
    public function tambahkelas(){
        return view ("admin.dtkelas.tambahkelas");
    }
    // simpan kelas baru
    function store (Request $request){
        // dd($request);
        $validasi = $request->validate([
            "tingkatan_kelas" => "required|string"
        ]);

    Kelas::create($validasi);
    Alert::success("sukses","berhasil menambah data kelas");
    return redirect()->route("admin.dtkelas");
    }
    public function edit($id){
        $kelas=Kelas::find($id);
        return view ("admin.dtkelas.edit",["kelas"=>$kelas]);
    }
    public function update(Request $request, $id){
        // dd($request);
        $validasi = $request->validate([
            "tingkatan_kelas" => "required|string"
        ]);
        $kelas=Kelas::find($id);
        $kelas->update($validasi);
        Alert::success("sukses","berhasil mengubah data kelas");
        return redirect()->route("admin.dtkelas");
    }

}