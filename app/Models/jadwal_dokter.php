<?php

namespace App\Models;

use App\Models\Dokter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_dokter extends Model
{
    use HasFactory;
    
    protected $table = 'table_jadwal_dokter';
    protected $fillable =['waktu','id_dokter','id_poliklinik'];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }


}