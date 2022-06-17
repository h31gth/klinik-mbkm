<?php

namespace App\Models;

use App\Models\Dokter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    use HasFactory;

    protected $table = 'table_poliklinik';

    protected $fillable = [
        'name',
        'keterangan',
        'image'
    ];

    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }
}
