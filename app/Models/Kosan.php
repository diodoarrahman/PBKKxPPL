<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosan extends Model
{
    use HasFactory;
    protected $table = 'datakos';
    protected $fillable = [
        'namakosan',
        'jeniskos',
        'kamar_tersedia',
        'tenggat_pembayaran',
        'tersedia'
        ];
}
