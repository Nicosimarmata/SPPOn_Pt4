<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagihanPembayaran extends Model
{
    use HasFactory;
    protected $table = 'tagihan_pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $guard = 'id_pembayaran';

    
}
