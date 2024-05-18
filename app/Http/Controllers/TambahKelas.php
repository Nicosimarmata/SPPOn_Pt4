<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahKelas extends Controller
{
    public function index(){
        return view ("admin.dtkelas.tambahkelas");
    }
}
