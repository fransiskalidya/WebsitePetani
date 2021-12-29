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
                <form action="{{route('contents.tampil')}}" class="row g-3" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- End Form Search -->
        </div>
    </div>
    <div class="col-xl-10 col-md-2 offset-md-1">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Judul</th>
            <th>Foto</th>
            <th>Pengertian</th>
            <th>Penyebab</th>
            <th>Pencegahan</th>
            <th>Tips</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($contents as $Content)
        <tr>
    
            <td>{{ $Content->Judul }}</td>
            <td>
            <img width="100px" height="100px" src="{{asset('storage/'.$Content->Image)}}">
            </td>
            <td>{{ $Content->Pengertian }}</td>
            <td>{{ $Content->Penyebab }}</td>
            <td>{{ $Content->Pencegahan }}</td>
            <td>{{ $Content->Tips }}</td>
            <td>
            <form action="{{ route('content.destroy',$Content->id) }}" method="POST">   
                <a class="btn btn-info" href="{{ route('content.show',$Content->id) }}">Tampil</a>
                <a class="btn btn-primary" href="{{ route('content.edit',$Content->id) }}">Edit</a>
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
        </table>
    @endsection
