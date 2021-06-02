<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pgm = Pengumuman::where('Judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pgm = Pengumuman::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('sebelum.pengumuman.index', compact('pgm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sebelum.pengumuman.inputData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengumuman::create([
            'id' => $request->id,
            'Judul' => $request->Judul,
            'Isi' => $request->Isi,
        ]);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return 'Data Berhasil Ditambahkan';
        return redirect()->route('pengumuman.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pgm = Pengumuman::find($id);
        return view('sebelum.pengumuman.tampil', compact('pgm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pengumuman::find($id);

        return view('sebelum.pengumuman.edit', ['data' => $data]);
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
        $pgm = Pengumuman::find($id);
        $pgm->id = $request->id;
        $pgm->Judul = $request->Judul;
        $pgm->Isi = $request->Isi;

        $pgm->save();

        return redirect()->route('pengumuman.index')
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
        Pengumuman::find($id)->delete();
        return redirect()->route('pengumuman.index')
            ->with('success', 'Data Berhasil Dihapus');
    }

    public function tampil(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pgm = Pengumuman::where('Judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pgm = Pengumuman::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('sebelum.pengumuman.tampil', compact('pgm'));
    }
}
