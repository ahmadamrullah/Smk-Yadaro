<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kejuruan extends Model
{
    protected $fillable = ['judul', 'content', 'slug', 'image'];
}
