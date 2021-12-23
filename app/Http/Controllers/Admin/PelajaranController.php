<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pelajaran;

class PelajaranController extends Controller
{
    
    public function index()
    {
        $judul = "Data Pelajaran";
        $pelajaran = Pelajaran::paginate(10);
        return view('admin.pelajaran.index', compact('judul', 'pelajaran'));
    }

    public function store(Request $request)
    {
        $pelajaran = Pelajaran::create($request->all());
        return redirect()->route('pelajaran.index');
    }

    public function edit($id)
    {
        $judul = "Form Ubah Data";
        $pjl = Pelajaran::find($id);
        return view('admin.pelajaran.edit', compact('judul', 'pjl'));
    }

    public function update(Request $request, $id)
    {
        $pjl = Pelajaran::where('id', $id)->first();
        $pjl->update($request->all());
        return redirect()->route('pelajaran.index');
    }

    public function destroy($id)
    {
        $pjl = Pelajaran::where('id', $id)->first();
        $pjl->delete();
        return redirect()->back();
    }
}
