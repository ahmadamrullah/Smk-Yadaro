<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kejuruan;
use App\Model\Pelajaran;

class ProgramController extends Controller
{
    public function index()
    {
        $kejuruan = Kejuruan::latest()->paginate(5);
        return view('program-kjr.index', compact('kejuruan'));
    }

    public function detail_kejuruan($slug)
    {
        $kjr = Kejuruan::where('slug', $slug)->first();
        $pjl = Pelajaran::all();
        return view('program-kjr.detail', compact('kjr', 'pjl'));
    }
}
