@extends('sesudah.layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="row justify-content-center">
    <div class="pull-left mt-2">
        <h2>PENDISTRIBUSIAN OBAT PERTANIAN DESA GONDANGLOR KABUPATEN LAMONGAN</h2>
    </div>
    <div class="pull-left mt-2">
        <h2>INVOICE TRANSAKSI</h2>
    </div>
</div>
<div class="container">
    @if($data_petani)
    <p><strong>ID Petani&nbsp;: </strong>{{ $data_petani->id_petani }}</p>
    <p><strong>Nama&nbsp;: </strong>{{ $data_petani->nama }}</p>
    <p><strong>Alamat&nbsp;: </strong>{{ $data_petani->alamat }}</p>
    <p><strong>No.Telepon&nbsp;: </strong>{{ $data_petani->no_tlpn }}</p>
    @else
    <h2>Belum ada data!</h2>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Total</th>
    
        </tr>
         @if($data_petani->barang)
        @foreach($data_petani->barang as $barang)
        <tr>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->qty }}</td>
            <td>{{ $barang->total }}</td>
    
        </tr>
        @endforeach
        @endif
    </table>
    <div class="row justify-content-end">
        <a href="{{'/dashboard'}}" class="btn btn-danger">Kembali</a>
    </div>
</div>

{{-- <!--Bootstrap core JavaScript -->
<script scr="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script scr="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!--Bootstrap core CSS -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection