<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_dokter extends Model
{
    use HasFactory;
    protected $table = 'jadwal_dokter';

    protected $fillable = [
        'waktu','dokter','poliklinik'
    ];

    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }
    public function poliklinik()
    {
        return $this->hasMany(Poliklinik::class);
    }
}
