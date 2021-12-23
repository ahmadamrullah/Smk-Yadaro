<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Model\Post;
use File;

class PostController extends Controller
{
    public function index()
    {
        $judul = "Data Artikel";
        $post = Post::latest()->paginate(10);
        return view('admin.post.index', compact('judul', 'post'));
    }

    public function create()
    {
        $judul = "Form Tambah Data";
        return view('admin.post.create', compact('judul'));
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->judul);
        if ($request->hasFile('image')) {
            $image = $request->image;
            $new_image = time(). $image->getClientOriginalName();
            $image->move('uploads/artikel/', $new_image);

            $post =Post::create([
                'judul' => $request->judul,
                'slug'  => $slug,
                'content'   => $request->content,
                'image'     => $new_image
            ]) ;
        }
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $judul = "Form Tambah Data";
        $post = Post::where('id', $id)->first();
        return view('admin.post.edit', compact('judul', 'post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        
        if ($request->hasFile('image')) {
            $image = $request->image;
            $new_image = time(). $image->getClientOriginalName();
            $image->move('uploads/kejuruan/', $new_image);

            $slug = Str::slug($request->judul);
            $post->update([
                'judul' => $request->judul,
                'slug'  => $slug,
                'content'   => $request->content,
                'image'     => $new_image
            ]) ;
        } else {
            $slug = Str::slug($request->judul);
            $post->update([
                'judul' => $request->judul,
                'slug'  => $slug,
                'content'   => $request->content,
            ]) ;
        }
        return redirect()->route('post.index');  
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        File::delete('uploads/artikel/'. $post->image);
        $post->delete();
        return redirect()->back(); 
    }
}
