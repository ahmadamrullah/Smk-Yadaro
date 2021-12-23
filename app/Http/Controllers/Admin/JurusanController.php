<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Jurusan;

class JurusanController extends Controller
{
    
    public function index()
    {
        $judul = "Data Jurusan";
        $jurusan = Jurusan::paginate(10);
        return view('admin.jurusan.index', compact('judul', 'jurusan'));
    }

    public function store(Request $request)
    {
        $jurusan = Jurusan::create($request->all());
        return redirect()->route('jurusan.index');
    }

    public function edit($id)
    {
        $jurusan = Jurusan::where('id', $id)->first();
        $judul = "Form Ubah Data";
        return view('admin.jurusan.edit', compact('judul', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::where('id', $id)->first();
        $jurusan->update($request->all());
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::where('id', $id)->first();
        $jurusan->delete();
        return redirect()->back();
    }
}
