<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_pengumpul_tugas extends Model
{
    protected $table = 'daftar_pengumpul_tugas';
    protected $guarded = ['id_daftar_pengumpul_tugas'];
    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(user::class,'id_user');
    }
}
