<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog-list',compact('blogs'));
    }

    public function create()
    {
        return view('admin.add-blog');
    }

    public function store(Request $request)
    {
        $blog = new Blog;
        $img = '';
        if ($request->hasFile('img')) {
            $gambar = $request->file('img');
            $nama = $gambar->getClientOriginalName();
            $gambar->move(public_path().'/img/',$nama);
            $img = '/img/'.$nama;
        }
        $blog->img = $img;
        $blog->judul = $request->judul;
        $blog->isi = $request->isi;
        $blog->save();

        return redirect('/blog-list')->with('sukses','Katalog berhasil ditambahkan');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.edit-blog',compact('blog'));
    }
  
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->update($request->all());

        return redirect('blog-list')->with('edit','Data berhasil diubah');
    }


    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blog-list')->with('hapus','Data Berhasil Dihapus');
    }
}
