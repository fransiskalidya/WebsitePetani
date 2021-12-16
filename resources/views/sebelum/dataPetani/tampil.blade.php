@extends('sebelum.layouts.app')

    <!-- Header Section Begin -->
@include('sebelum.layouts.header')
    <!-- Header Section End -->

{{-- @extends('contents.layout') --}}

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            </div>

            <!-- Form Search -->

            <div class="float-left my-3 mx-4">
                <form action="{{route('dataPetani.tampil')}}" class="row g-3" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Cari...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari data</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- End Form Search -->
        </div>
    </div>

                
        <div class="col-xl-12 col-md-2">
    <table class="table table-bordered">
        <tr>
            <th>Id Petani</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            {{-- <th width="250px">Action</th> --}}
        </tr>
        @foreach ($datas as $data)
        <tr>

            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_tlpn }}</td>
        </tr>
        @endforeach
        </table>
    {{-- @endsection --}}
