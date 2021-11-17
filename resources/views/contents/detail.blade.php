@extends('contents.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
        Detail Content
        </div> <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item" align="middle">
                    <img width="100px" height="100px" src="{{asset('storage/'.$Content->Image)}}" align="middle"></li>
                    <li class="list-group-item"><b>Judul: </b>{{$Content->Judul}}</li>
                    <li class="list-group-item"><b>Pengertian: </b>{{$Content->Pengertian}}</li>
                    <li class="list-group-item"><b>Penyebab: </b>{{$Content->Penyebab}}</li>
                    <li class="list-group-item"><b>Pencegahan: </b>{{$Content->Pencegahan}}</li>
                    <li class="list-group-item"><b>Tips: </b>{{$Content->Tips}}</li>
                     </ul>
        </div>
            <a class="btn btn-success mt-3" href="{{'/crudContent'}}">Kembali</a>
        </div>
    </div>
</div>
@endsection
