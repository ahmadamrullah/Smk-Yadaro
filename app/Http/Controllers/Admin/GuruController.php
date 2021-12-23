<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Guru;
use App\Model\Jabatan;
use App\Model\Pelajaran;
use File;

class GuruController extends Controller
{
    
    public function index()
    {
        $judul = "Data Guru";
        $gurus = Guru::orderBy('nama', 'ASC')->paginate(10);
        return view('admin.guru.index', compact('judul', 'gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = "Form Tambah Data";
        $jabatan = Jabatan::all();
        $pelajaran = Pelajaran::all();
        return view('admin.guru.create', compact('judul', 'jabatan', 'pelajaran'));
    }

    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->image;
            $new_image = time(). $image->getClientOriginalName();
            $image->move('uploads/guru/', $new_image);

            $guru = Guru::create([
                'nip'           => $request->nip,
                'nama'           => $request->nama,
                'alamat'        => $request->alamat,
                'tempat_lahir'  => $request->tempat_lahir,
                'tgl_lahir'     => $request->tgl_lahir,
                'jk'            => $request->jk,
                'status'        => $request->status,
                'pendidikan'    => $request->pendidikan,
                'email'         => $request->email,
                'nohp'          => $request->nohp,
                'image'         => $new_image,
                'jabatan_id'    => $request->jabatan_id,
                'pelajaran_id'  => $request->pelajaran_id
            ]);
        }
        return redirect()->route('guru.index');
    }

    public function show($id)
    {
        $guru = Guru::find($id);
        $judul = "Detail Data Guru";
        return view('admin.guru.detail', compact('judul', 'guru'));
    }

    public function edit($id)
    {
        $judul = "Form Ubah Data";
        $guru = Guru::find($id);
        $jabatan = Jabatan::all();
        $pelajaran = Pelajaran::all();
        return view('admin.guru.edit', compact('judul', 'jabatan', 'pelajaran', 'guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);
        if ($request->hasFile('image')) {
            $image = $request->image;
            $new_image = time(). $image->getClientOriginalName();
            $image->move('uploads/guru/', $new_image);

            $guru->update([
                'nip'           => $request->nip,
                'nama'           => $request->nama,
                'alamat'        => $request->alamat,
                'tempat_lahir'  => $request->tempat_lahir,
                'tgl_lahir'     => $request->tgl_lahir,
                'jk'            => $request->jk,
                'status'        => $request->status,
                'pendidikan'    => $request->pendidikan,
                'email'         => $request->email,
                'nohp'          => $request->nohp,
                'image'         => $new_image,
                'jabatan_id'    => $request->jabatan_id,
                'pelajaran_id'  => $request->pelajaran_id
            ]);
        } else {
            $guru = Guru::find($id);
            $guru->update([
                'nip'           => $request->nip,
                'nama'           => $request->nama,
                'alamat'        => $request->alamat,
                'tempat_lahir'  => $request->tempat_lahir,
                'tgl_lahir'     => $request->tgl_lahir,
                'jk'            => $request->jk,
                'status'        => $request->status,
                'pendidikan'    => $request->pendidikan,
                'email'         => $request->email,
                'nohp'          => $request->nohp,
                'jabatan_id'    => $request->jabatan_id,
                'pelajaran_id'  => $request->pelajaran_id
            ]);
        }
        return redirect()->route('guru.index');
        
    }

    public function destroy($id)
    {
        $guru = Guru::where('id', $id)->first();
        File::delete('uploads/guru/'. $guru->image);
        Guru::where('id', $id)->delete();
        return redirect()->back();
    }
}
