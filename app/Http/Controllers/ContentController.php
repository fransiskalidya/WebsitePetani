<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->has('search')){ // Jika ingin melakukan pencarian judul
        $contents = Content::where('Judul', 'like', "%".$request->search."%")->paginate(5);
       } else { // Jika tidak melakukan pencarian judul
        //fungsi eloquent menampilkan data menggunakan pagination
        $contents = Content::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
    }
        return view('contents.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if ($request->file('image')) 
            {
                $image_name = $request->file('Image')->store('images', 'public');
            }

            Article::create([
                'Judul' => $request->Judul,
                'Image' => $image_name,
                'Pengertian' => $request->Pengertian,
                'Penyebab' => $request->Penyebab,
                'Pencegahan' => $request->Pencegahan,
                'Tips' => $request->Tips,
            ]);

            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return 'Content Berhasil Ditambahkan';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //Menampilkan detail data dengan menemukan id Content
    $Content = Content::find($id);
    return view('contents.detail', compact('Content'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Menampilkan detail data dengan menemukan id Content untuk dilakukan pengeditan
        $content = Content::find($id);
        
        return view('contents.edit', ['content' => $content]);
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
       
        //fungsi eloquent untuk update data inputan
        $contents = Content::find($id);

        $contents->Judul = $request->Judul;
        $contents->Pengertian = $request->Pengertian;
        $contents->Penyebab = $request->Penyebab;
        $contents->Pencegahan = $request->Pencegahan;
        $contents->Tips = $request->Tips;

        // jika file gambar pada artikel tersebut telah tersedia, maka file yang lama akan dihapus
        if ($contents->Image && file_exists(storage_path('app/public/' .$contents->Image))) {
            \Storage::delete(['public/' . $contents->Image]);
        }
        // namun, jika file gambar masih belum ada, maka file baru yang diupload akan disimpan
        $image_name = $request->file('image')->store('images', 'public');
        $contents->Image = $image_name;

        // sytax untuk menyimpan perubahan setelah melakukan edit
        $contents->save();
        return 'Content berhasil diubah';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        Content::find($id)->delete();
        return redirect()->route('content.index')
            ->with('success', 'Content Berhasil Dihapus');
    }
};
