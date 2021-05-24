<?php

namespace App\Http\Controllers;

use App\Models\DataPetani;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class DataPetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $datas = DataPetani::where('nama', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $datas = DataPetani::orderBy('id_petani', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('sebelum.dataPetani.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sebelum.dataPetani.inputData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataPetani::create([
            'id_petani' => $request->id_petani,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
        ]);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return 'Data Berhasil Ditambahkan';
        return redirect()->route('dataPetani.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_petani)
    {
        $data = DataPetani::find($id_petani);
        return view('sebelum.dataPetani.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_petani)
    {
        $data = DataPetani::find($id_petani);

        return view('sebelum.dataPetani.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_petani)
    {
        $datas = DataPetani::find($id_petani);
        $datas->id_petani = $request->id_petani;
        $datas->nama = $request->nama;
        $datas->alamat = $request->alamat;
        $datas->no_tlpn = $request->no_tlpn;

        $datas->save();

        return redirect()->route('dataPetani.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_petani)
    {
        DataPetani::find($id_petani)->delete();
        return redirect()->route('dataPetani.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
    // public function tampil(Request $request)
    // {
    //     if ($request->has('search')) { // Jika ingin melakukan pencarian judul
    //         $datas = DataPetani::where('nama', 'like', "%" . $request->search . "%")->paginate(5);
    //     } else { // Jika tidak melakukan pencarian judul
    //         //fungsi eloquent menampilkan data menggunakan pagination
    //         $datas = DataPetani::orderBy('id_petani', 'desc')->paginate(5); // Pagination menampilkan 5 data
    //     }
    //     return view('sebelum.dataPetani.tampil', compact('datas'));
    // }
}
