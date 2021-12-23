<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Kejuruan;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel_terbaru = Post::get()->random(3);
        $artikel = Post::latest()->paginate(5);

        $kejuruan = Kejuruan::latest()->get()->take(4);
        $artikel_terkait = Post::latest()->get()->random(3);
        return view('artikel.index', compact('artikel', 'artikel_terbaru', 'kejuruan', 'artikel_terkait'));
    }

    public function detail($slug)
    {
        $artikel = post::where('slug', $slug)->first();
        $kejuruan = Kejuruan::latest()->get()->take(4);
        $artikel_terkait = Post::latest()->get()->random(3);
        return view('artikel.artikel_single', compact('artikel', 'kejuruan', 'artikel_terkait'));
    }

    public function detail_kejuruan($slug)
    {
        $kjr = Kejuruan::where('slug', $slug)->first();
        $pjl = Pelajaran::all();
        return view('program-kjr.detail', compact('kjr', 'pjl'));
    }

}
