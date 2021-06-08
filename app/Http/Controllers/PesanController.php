<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\DataPetani;
use App\Models\PesananDetail;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{

    public function index($id)
    {
    	$barang = Barang::where('id', $id)->first();
        $dataPetani = DataPetani::where('id', $id)->first();


    	return view('pesan.index', compact('barang', 'dataPetani'));
    }

    public function pesan(Request $request, $id)
    {	
    	$barang = Barang::where('id', $id)->first();
    	$tanggal = Carbon::now();
        $dataPetani = DataPetani::where('id', $id)->first();

    	//validasi apakah melebihi stok
    	if($request->jumlah_pesan > $barang->stok)
    	{
    		return redirect('pesan/'.$id);
    	}
        //cek validasi
    	$cek_pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
    	//simpan ke database pesanan
    	if(empty($cek_pesanan))
    	{
    		$pesanan = new Pesanan;
	    	$pesanan->id_user = Auth::user()->id;
            //$pesanan->id_datapetani = $dataPetani->id;
	    	$pesanan->tanggal = $tanggal;
	    	$pesanan->status = 0;
	    	$pesanan->total = 0;
	    	$pesanan->save();
    	}
    	

    	//simpan ke database pesanan detail
    	$pesanan_baru = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();

    	//cek pesanan detail
    	$cek_pesanan_detail = PesananDetail::where('id_barang', $barang->id)->where('id_pesanan', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    		$pesanan_detail = new PesananDetail;
	    	$pesanan_detail->id_barang= $barang->id;
	    	$pesanan_detail->id_pesanan = $pesanan_baru->id;
	    	$pesanan_detail->jumlah = $request->jumlah_pesan;
	    	$pesanan_detail->subtotal = $barang->harga*$request->jumlah_pesan;
	    	$pesanan_detail->save();
    	}else 
    	{
    		$pesanan_detail = PesananDetail::where('id_barang', $barang->id)->where('id_pesanan', $pesanan_baru->id)->first();

    		$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

    		//harga sekarang
    		$harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
	    	$pesanan_detail->subtotal = $pesanan_detail->subtotal+$harga_pesanan_detail_baru;
	    	$pesanan_detail->update();
    	}

    	//jumlah total
    	$pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
    	$pesanan->total = $pesanan->total+$barang->harga*$request->jumlah_pesan;
    	$pesanan->update();
    	
        //Alert::success('Pesanan Sukses Masuk Keranjang', 'Success');
    	return redirect('check-out');

    }
        public function check_out()
    {
        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
 	    $pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('id_pesanan', $pesanan->id)->get();

        }
        
        return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->id_pesanan)->first();
        $pesanan->total = $pesanan->total-$pesanan_detail->subtotal;
        $pesanan->update();


        $pesanan_detail->delete();

        //Alert::error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        //if(empty($user->alamat))
        //{
            //Alert::error('Identitasi Harap dilengkapi', 'Error');
            //return redirect('profile');
        //}

        //if(empty($user->nohp))
        //{
            //Alert::error('Identitasi Harap dilengkapi', 'Error');
            //return redirect('profile');
       // }

        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('id_pesanan', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang= Barang::where('id', $pesanan_detail->id_barang)->first();
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->update();
        }

        //Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$pesanan_id);

    }
  
}
