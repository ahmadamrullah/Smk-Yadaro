<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{

    protected $fillable = ['kd_jurusan', 'nama_jurusan'];

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'jurusan_id', 'id');
    }
}
