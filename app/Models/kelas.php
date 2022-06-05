<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $guarded = [];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'kode_kelas';

    protected $with = ['daftar_tugas','matakuliah','user'];

    public function matakuliah()
    {
        return $this->belongsTo(matakuliah::class,'kode_mk');
    }

    public function user()
    {
        return $this->belongsTo(user::class,'id_user');
    }
    public function daftar_tugas()
    {
        return $this->hasOne(daftar_tugas::class,'kode_kelas');
    }
}
