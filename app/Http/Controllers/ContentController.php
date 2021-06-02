<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Pengumuman;

class ContentController extends Controller
{
    public function index()
    {
        $pgm = Pengumuman::all();
        $dataIndex = Content::all();
        return view('sebelum.index', compact('dataIndex', 'pgm'));
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
        if ($request->file('Image')) {
            $image_name = $request->file('Image')->store('featured_image', 'public');
        }

        Content::create([
            'Judul' => $request->Judul,
            'Image' =>  $image_name,
            'Pengertian' => $request->Pengertian,
            'Penyebab' => $request->Penyebab,
            'Pencegahan' => $request->Pencegahan,
            'Tips' => $request->Tips,
        ]);
        return redirect()->route('content.index')
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
        //
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

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
};
