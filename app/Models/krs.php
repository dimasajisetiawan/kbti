<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class krs extends Model
{
    protected $table = 'krs';
    protected $primaryKey = 'id_krs';
    protected $guarded = ['id_krs'];

    protected $with = ['kelas','user'];


    public function kelas()
    {
        return $this->belongsTo(kelas::class,'kode_kelas');
    }
    public function user()
    {
        return $this->belongsTo(user::class,'id_user');
    }

}
