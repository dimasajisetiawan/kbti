<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_tugas extends Model
{
    protected $table = 'daftar_tugas';
    protected $primaryKey = 'id_daftar_tugas';
    protected $guarded = ['id_daftar_tugas'];
    protected $with = ['tugas'];

    public function tugas()
    {
        return $this->hasMany(tugas::class,'id_daftar_tugas');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class,'kode_kelas');
    }

}
