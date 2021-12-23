<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = ['kd_jabatan', 'nama_jabatan'];

    public function Guru()
    {
        return $this->hasMany(Guru::class, 'jabatan_id', 'id');
    }
}
