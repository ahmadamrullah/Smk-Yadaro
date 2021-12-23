<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nip','nama','alamat','tempat_lahir','tgl_lahir','jk','status','pendidikan',
        'email','nohp','image','jabatan_id','pelajaran_id'
    ];

    
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'id');
    }

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'pelajaran_id', 'id');
    }
    
}
