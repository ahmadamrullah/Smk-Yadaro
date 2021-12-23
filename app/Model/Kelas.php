<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['nama_kelas', 'ruang_kelas'];
    
    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'kelas_id', 'id');
    }
}
