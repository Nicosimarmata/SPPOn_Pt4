<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StorePenggunaRequest;
use App\Http\Requests\UpdatePenggunaRequest;

class PenggunaController extends Controller
{
    
    public function index(){
        $pengguna=Pengguna::all();
        return view ("admin.dtpengguna.index", ['pengguna'=>$pengguna]);}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.dtpengguna.tambahpengguna");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $validasi =new Pengguna ([
                "nama_lengkap" => $request->input('nama_lengkap'),
                "username" => $request->input('username'),
                "password" =>Hash::make($request->input('password')) ,
                "role" => $request->input('role'),
                "no_tlpn" => $request->input('no_tlpn'),
                "alamat" => $request->input('alamat')
            ]);
            $validasi->save();
            Alert::success("sukses","berhasil menambah pengguna");
            return redirect()->route("pengguna.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenggunaRequest $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
