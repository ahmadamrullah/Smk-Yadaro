<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Siswa;
use App\Model\Kelas;
use App\Model\Jurusan;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Data Siswa";
        $siswas = Siswa::orderBy('nama', 'ASC')->paginate(10);
        return view('admin.siswa.index', compact('judul', 'siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = "Form Tambah Siswa";
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        return view('admin.siswa.create',  compact('judul', 'kelas', 'jurusan'));
    }

    
    public function store(Request $request)
    {
        Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('admin.siswa.profile', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judul = "Form Ubah Data";
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        return view('admin.siswa.edit', compact('judul', 'siswa', 'kelas', 'jurusan'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::where('id', $id)->first();
        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
