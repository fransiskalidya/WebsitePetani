@extends('sebelum.dataPetani.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Data Saran Pengunjung
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{$saran->nama}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$saran->email}}</li>
                    <li class="list-group-item"><b>Pesan: </b>{{$saran->pesan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('saran.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
