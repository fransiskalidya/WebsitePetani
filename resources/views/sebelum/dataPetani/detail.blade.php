@extends('sebelum.layouts.app')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
        Detail Data Petani
        </div> <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item" align="middle">
                    <li class="list-group-item"><b>Id Petani: </b>{{$data->id_petani}}li>
                    <li class="list-group-item"><b>Nama: </b>{{$data->nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$data->alamat}}</li>
                    <li class="list-group-item"><b>No Telepon: </b>{{$data->no_tlpn}}</li>
                     </ul>
        </div>
            <a class="btn btn-success mt-3" href="{{ route('dataPetani.index') }}">Kembali</a>
        </div>
    </div>
</div>
