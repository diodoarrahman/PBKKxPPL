<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;
    protected $table = 'pemiliks';
    protected $fillable = [
        'nama_pemilik',
        'nomor_telpon',
        'kosan_id'
        ];

        public function kosan()
        {
        return $this->hasMany(Pemilik::class);
        }
        
}
