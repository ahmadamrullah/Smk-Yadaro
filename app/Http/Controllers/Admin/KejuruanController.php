<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Model\Kejuruan;
use File;

class KejuruanController extends Controller
{
    
    public function index()
    {
        $judul = "Data Kejuruan";
        $kejuruan = Kejuruan::paginate(10);
        return view('admin.kejuruan.index', compact('judul', 'kejuruan'));
    }

    public function create()
    {
        $judul = "Form Tambah Data";
        return view('admin.kejuruan.create', compact('judul'));
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->judul);
        if ($request->hasFile('image')) {
            $image = $request->image;
            $new_image = time(). $image->getClientOriginalName();
            $image->move('uploads/kejuruan/', $new_image);

            $kjr =Kejuruan::create([
                'judul' => $request->judul,
                'slug'  => $slug,
                'content'   => $request->content,
                'image'     => $new_image
            ]) ;
        }
        return redirect()->route('kejuruan.index');
    }

    public function edit($id)
    {
        $judul = "Form Tambah Data";
        $kjr = Kejuruan::where('id', $id)->first();
        return view('admin.kejuruan.edit', compact('judul', 'kjr'));
    }

    public function update(Request $request, $id)
    {
        $kjr = Kejuruan::where('id', $id)->first();
        
        if ($request->hasFile('image')) {
            $image = $request->image;
            $new_image = time(). $image->getClientOriginalName();
            $image->move('uploads/kejuruan/', $new_image);

            $slug = Str::slug($request->judul);
            $kjr->update([
                'judul' => $request->judul,
                'slug'  => $slug,
                'content'   => $request->content,
                'image'     => $new_image
            ]) ;
        } else {
            $slug = Str::slug($request->judul);
            $kjr->update([
                'judul' => $request->judul,
                'slug'  => $slug,
                'content'   => $request->content,
            ]) ;
        }
        return redirect()->route('kejuruan.index');  
    }

    public function destroy($id)
    {
        $kjr = Kejuruan::where('id', $id)->first();
        File::delete('uploads/kejuruan/'. $kjr->image);
        $kjr->delete();
        return redirect()->route('kejuruan.index'); 
    }
}
