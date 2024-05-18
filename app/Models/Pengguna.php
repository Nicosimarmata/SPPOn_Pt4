<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pengguna extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $guarded = ['id_pengguna'];

    protected $hidden = 'password';

    public static function attemptLogin($username, $password)
    {
        $pengguna = self::where('username', $username)->first();

        if ($pengguna && Hash::check($password, $pengguna->password)) {
            return $pengguna;
        }

        return null;
    }
}
