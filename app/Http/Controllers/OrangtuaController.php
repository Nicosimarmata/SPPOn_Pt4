<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    public function index(){
        return view ("admin.dtortu.index");
    }
    public function tambahortu(){
        return view ("admin.dtortu.tambahortu");
    }
}
