<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kejuruan;
use App\Model\post;
use App\Model\siswa;
use App\Model\Guru;

class HomeController extends Controller
{
    public function index()
    {
        $kjr = Kejuruan::latest()->paginate(5);
        $artikel = Post::latest()->paginate(4);
        $guru = Guru::latest()->paginate(5);
        return view('beranda.index', compact('kjr', 'artikel', 'guru'));
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function data_siswa()
    {
        $siswas = Siswa::paginate(10);
        return view('siswa', compact('siswas'));
    }

    public function data_staf()
    {
        $gurus = Guru::paginate(10);
        return view('staf', compact('gurus'));
    }
}
