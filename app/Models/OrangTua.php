<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class OrangTua extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'orang_tua';
    protected $primaryKey = 'id_ortu';
    protected $guard = 'id_ortu';
}
