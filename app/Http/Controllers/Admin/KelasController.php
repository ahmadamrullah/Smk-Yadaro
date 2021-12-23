<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $judul = "Data Kelas";
        $kelas = Kelas::paginate(10);
        return view('admin.kelas.index', compact('judul', 'kelas'));
    }

    public function store(Request $request)
    {
        $kelas = Kelas::create($request->all());
        return redirect()->route('kelas.index');
    }

    public function edit($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $judul = "Form Ubah Data";
        return view('admin.kelas.edit', compact('judul', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $kelas->update($request->all());
        return redirect()->route('kelas.index');
    }

    
    public function destroy($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        $kelas->delete();
        return redirect()->back();
    }
}
