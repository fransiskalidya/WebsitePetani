<?php

namespace App\Http\Controllers;

use App\Models\DataPetani;
use App\Models\Petani_Barang;
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
            $datas = DataPetani::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
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
            'id' => $request->id,
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
    public function show($id)
    {
        $data = DataPetani::find($id);
        return view('sebelum.dataPetani.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataPetani::find($id);

        return view('sebelum.dataPetani.edit', ['data' => $data]);
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
        $datas = DataPetani::find($id);
        $datas->id = $request->id;
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
    public function destroy($id)
    {
        DataPetani::find($id)->delete();
        return redirect()->route('dataPetani.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
    public function tampil(Request $request)
    {
        // $datas = DataPetani::all();
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $datas = DataPetani::where('nama', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $datas = DataPetani::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('sebelum.dataPetani.tampil', compact('datas'));
    }

    public function invoice($id)
    {
        $data_petani = DataPetani::with('barang')
            ->where('id', $id)
            ->first();
        return view('sesudah.invoice', compact('data_petani'));
    }
}
