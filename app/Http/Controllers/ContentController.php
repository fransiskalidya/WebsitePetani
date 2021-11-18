<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function index()
    {
        $pgm = Pengumuman::all();
        $dataIndex = Content::orderBy('id', 'desc')->paginate(1);
        return view('sebelum.index', compact('dataIndex', 'pgm'));
    }
    public function tampil(Request $request)
    {
        // $contents = Content::all();
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $contents = Content::where('Judul', 'like', "%" . $request->search . "%")->paginate(5);
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
        return view('sebelum.postContent');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required',
            'Image' => 'file|image|mimes:jpeg,png,jpg',
            'Pengertian' => 'required',
            'Penyebab' => 'required',
            'Pencegahan' => 'required',
            'Tips' => 'required',

        ]);

        if ($request->file('Image')) {
            $image_name = $request->file('Image')->store('images', 'public');
        }

        Content::create([
            'Judul' => $request->Judul,
            'Image' =>  $image_name,
            'Pengertian' => $request->Pengertian,
            'Penyebab' => $request->Penyebab,
            'Pencegahan' => $request->Pencegahan,
            'Tips' => $request->Tips,
        ]);

        return redirect()->route('contents.tampil')
            ->with('success', 'Artikel berhasil disimpan');
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
        if ($request->get('Image') && file_exists(storage_path('app/public/' . $request->Image))) {
            Storage::delete(['public/' . $request->Image]);
        }
        $image_name = $request->file('Image')->store('images', 'public');
        $contents = Content::find($id);
        $contents->Image = $image_name;
        $contents->Judul = $request->get('Judul');
        $contents->Pengertian = $request->get('Pengertian');
        $contents->Penyebab = $request->get('Penyebab');
        $contents->Pencegahan = $request->get('Pencegahan');
        $contents->Tips = $request->get('Tips');

        $contents->save();

        return redirect()->route('contents.tampil')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::find($id)->delete();
        return redirect()->route('contents.tampil')
            ->with('success', 'Data Berhasil Dihapus');
    }
};
