<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Jabatan;

class JabatanController extends Controller
{
    
    public function index()
    {
        $judul = "Data Jabatan";
        $jabatan = Jabatan::paginate(10);
        return view('admin.jabatan.index', compact('judul','jabatan'));
    }

    public function store(Request $request)
    {
        $jabatan = Jabatan::create($request->all());
        return redirect()->route('jabatan.index');
    }

    public function edit($id)
    {
        $judul = "Form Ubah Data";
        $jabatan = Jabatan::find($id);
        return view('admin.jabatan.edit', compact('judul', 'jabatan'));
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::where('id', $id)->first();
        $jabatan->update($request->all());
        return redirect()->route('jabatan.index');
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::where('id', $id)->first();
        $jabatan->delete();
        return redirect()->back();
    }
}
