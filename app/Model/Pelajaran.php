<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    protected $fillable = ['kd_pjl', 'nama_pjl'];

    public function Guru()
    {
        return $this->hasMany(Guru::class, 'pelajaran_id', 'id');
    }
}
