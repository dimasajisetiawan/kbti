<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    protected $table = 'tugas';
    protected $guarded = [];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'kode_tugas';
    protected $with = ['daftar_pengumpul_tugas'];

    public function daftar_tugas()
    {
        return $this->belongsTo(daftar_tugas::class,'kode_tugas');
    }

    public function daftar_pengumpul_tugas()
    {
        return $this->hasMany(daftar_pengumpul_tugas::class,'kode_tugas');
    }
}
