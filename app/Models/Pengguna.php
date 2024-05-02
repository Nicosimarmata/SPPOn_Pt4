<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $guard = 'id_pengguna';

    protected $hidden = 'password';

    public static function attemptLogin($username, $password){
        $pengguna = self::where('username', $username)->first();

        if($pengguna && Hash::check($password, $pengguna->password)){
            return $pengguna;
        }

        return null;
    }
}

